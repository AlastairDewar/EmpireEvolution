<?php
class News extends Controller
{
  function News()
  {
	parent::Controller();	
	$this->load->library('parser');
	$this->load->model('News_model');
	$this->load->library('user_agent');
	if ($this->agent->is_mobile())
	{
		redirect('mobile');
	}
  }
  function index()
  {
	$this->latest_articles();	
  }

  function edit_article_publication()
  {

  }	

  function view($uid)
  {
		$uid = (int) $uid;
		if($uid != 0 && is_int($uid))
		{
			if($this->News_model->article_exists($uid) && $this->News_model->is_public($uid))
			{
				$template_data = array();
				$template_data['article'] = $this->News_model->get_article($uid);
				if($template_data == null){redirect('news/invalid');}
				// TODO Check for validity (visible, valid uid)
				$this->parser->parse('news/view_article', $template_data);
			}else{redirect('news/invalid');}
		}else{redirect('news');}
  }
  function latest_articles()
  {
	$template_data = array();
	$template_data['articles'] = $this->News_model->get_latest_articles(3);
	// TODO format the template data in News_model
	$this->parser->parse('news/main', $template_data);
  }
  function archive()
  {
	$template_data = $this->News_model->get_all_articles();
	$this->parser->parse('news/archive', $template_data);
  }
  function tweet()
  {
		if($this->Member_model->logged_in())
		{		
			if($this->Member_model->is_administrator())
			{
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('content', 'Content', 'required|max_length[140]');
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->model('News_model');
					$template_data = array();
					$template_data['username'] = $this->Member_model->get_username();
					$this->parser->parse('news/tweet', $template_data);
				}
				else
				{
					$this->News_model->tweet();
					$template_data = array();
					$template_data['username'] = $this->Member_model->get_username();
					$this->parser->parse('news/tweet_success', $template_data);
				}
			}else{redirect('error/insufficient_rights','refresh');}
		}else{redirect('/member/login','refresh');}
  }
  function add_article()
  {
		if($this->Member_model->logged_in())
		{		
			if($this->Member_model->is_administrator())
			{
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('title', 'Title', 'required|min_length[6]|max_length[97]');
				$this->form_validation->set_rules('article', 'Article', 'required|min_length[30]|max_length[800]');
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->model('News_model');
					$template_data = array();
					$template_data['username'] = $this->Member_model->get_username();
					$this->parser->parse('news/add_article', $template_data);
				}
				else
				{
					$this->News_model->add();
					$this->load->view('news/add_article_success');
				}
			}else{redirect('error/insufficient_rights','refresh');}
		}else{redirect('/member/login','refresh');}
  }
  function edit_article($uid = 0)
  {
		if($this->Member_model->logged_in())
		{		
			if($this->Member_model->is_administrator())
			{	
				if($uid != 0 && is_int($uid))
				{
					if($this->News_model->article_exists($uid))
					{
						$this->load->helper(array('form', 'url'));
						$this->load->library('form_validation');
						$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
						$this->form_validation->set_rules('title', 'Title', 'required|min_length[6]|max_length[255]');
						$this->form_validation->set_rules('article', 'Article', 'required|min_length[30]|max_length[800]');
						if ($this->form_validation->run() == FALSE)
						{
							$this->load->model('News_model');
							$template_data = array();
							$template_data = $this->News_model->get_article($uid);
							$template_data['username'] = $this->Member_model->get_username();
							$this->parser->parse('news/edit_article', $template_data);
						}
						else
						{
							$this->News_model->edit($uid);
							$template_data = array();
							$template_data['username'] = $this->Member_model->get_username();
							$this->parser->parse('news/edit_article_success', $template_data);
						}
					}
				}else{redirect('news/overview/edit','refresh');}
			}else{redirect('error/insufficient_rights','refresh');}
		}else{redirect('/member/login','refresh');}
  }
  function delete_article($uid = 0)
  {
	if($this->Member_model->logged_in()){
		if($this->Member_model->is_administrator()){
			$uid = (int)$uid;
			if($uid != 0 && is_int($uid)){
					if($this->News_model->article_exists($uid)){
					// TODO Check its not already deleted
						$this->load->helper(array('form', 'url'));
						$this->load->library('form_validation');
						$template_data = array();
						$template_data['username'] = $this->Member_model->get_username();
						$this->form_validation->set_rules('uid', 'Player Unique Identifer', 'required');
						if ($this->form_validation->run() == FALSE)
						{
							$this->parser->parse('news/delete_article',$template_data);
						}
						else
						{
							$this->News_model->delete($uid);
							$this->parser->parse('news/delete_article_success',$template_data);
						}
					}else{redirect('error/invalid_news_id','refresh');}
			}else{redirect('news/overview/delete','refresh');}
		}else{redirect('error/insufficient_rights','refresh');}
	}else{redirect('member/login','refresh');}
  }
  function overview()
  {
		if($this->Member_model->logged_in())
		{		
			if($this->Member_model->is_administrator())
			{
				$this->load->model('News_model');
				$template_data = array();
				$template_data['username'] = $this->Member_model->get_username();
				$template_data['news_articles'] = $this->News_model->get_all_articles(FALSE);
				$template_data['highlight'] = $this->uri->segment(3);
				$this->parser->parse('news/overview', $template_data);
			}else{redirect('error/sinsufficient_rights','refresh');}
		}else{redirect('/member/login','refresh');}
  }
  function add_comment()
  {
		if($this->Member_model->logged_in())
		{
			$this->load->library('akismet');
			$comment = array(
			'author'	=> $this->input->post('name'),
			'email'		=> $this->input->post('email'),
			'website'	=> $this->input->post('website'),
			'body'		=> $this->input->post('comment')
			);
			$config = array(
			'blog_url' => 'http://www.empev.com/',
			'api_key' => '3b18a6a4b257',
			'comment' => $comment
			);
			$this->akismet->init($config);
			if ( $this->akismet->errors_exist() )
			{				
				if ( $this->akismet->is_error('AKISMET_INVALID_KEY') )
				{
				log_error('AKISMET :: Theres a problem with the api key');
				}
				elseif ( $this->akismet->is_error('AKISMET_RESPONSE_FAILED') )
				{
				log_error('AKISMET :: Looks like the servers not responding');
				}
				elseif ( $this->akismet->is_error('AKISMET_SERVER_NOT_FOUND') )
				{
				log_error('AKISMET :: Wheres the server gone?');
				}
				// If the server is down, we have to post the comment :(
				$this->_post_comment($comment);
				$this->load->view('thankyou');
			}
			else
			{
				if ( $this->akismet->is_spam() )
				{
					$this->load->view('spam');
				}
				else
				{
					$this->load->library("recaptcha");
					$data = array(
					"captcha" => $this->recaptcha->recaptcha_get_html()
					);
					// Add the following to regular form validation Rules
					$rules = array(
					"recaptcha_response_field"=>"required|callback_check_captcha"
					);
					$this->validation->set_rules($rules);
					// Function to check to see if captcha is correctly submitted
					function check_captcha($val) {
					$this->recaptcha->recaptcha_check_answer($_SERVER["REMOTE_ADDR"],$this->input->post("recaptcha_challenge_field"),$val);
					if ($this->recaptcha->is_valid) {
					return TRUE;
					} else {
					$this->validation->set_message('check_captcha','Incorrect Security Image Response');
					return FALSE;}
					}
					$this->_post_comment($comment);
					$this->load->view('news_comment_success',$data);
				}
			}
			// TODO Check for validity (swear filter?, can comment on article, article visibility)
			// TODO Check for rights if locked
			// TODO Load the news_comment_add view OR process it
		}
		else
		{redirect('/member/login','refresh');}
  }
  function remove_comment()
  {
		if($this->Member_model->logged_in())
		{
			// TODO Check for validity (swear filter?, can comment on article, article visibility, article locked)
			// TODO Check for author OR administrator OR moderator
			// TODO Load the news_comment_remove view OR process it
			// TODO Check for confirmation
			// TODO Just hide it, dont delete it
		}
		else
		{redirect('/member/login','refresh');}
  }
 function edit_comment()
 {
		if($this->Member_model->logged_in())
		{
			// TODO Check for validity (swear filter?, can comment on article, article visibility, article locked)
			// TODO Check for author OR administrator OR moderator
			// TODO Check the thread isn't locked down
			// TODO Load the news_comment_edit view OR process it
			// TODO Tag it "<i>Administrator: This is a warning</i>"
		}
		else
		{redirect('/member/login','refresh');}
 }
}
/* End of file news.php */
/* Location: ./system/application/controllers/news.php */
