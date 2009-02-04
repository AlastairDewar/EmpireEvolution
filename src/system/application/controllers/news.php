<?php
class News extends Controller
{
  function News()
  {
	parent::Controller();	
	$this->load->library('parser');
	$this->load->model('News_model');
  }
  function index()
  {
	$this->latest_articles();	
  }
  function view_article($uid)
  {
	// TODO Check for validity (visible, valid uid)
	// TODO Load the news_view_article view
  }
  function latest_articles()
  {
	// TODO Load the last 3 VISIBLE articles
	// TODO Load the news_latest_articles view
  }
  function archive()
  {
	// TODO Load all the articles which are visible
	// TODO Load the news_archive view 
  }
  function add()
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
					$this->parser->parse('news_add', $template_data);
				}
				else
				{
					$this->News_model->add();
					$this->load->view('news_add_success');
				}
			}else{redirect('insufficient_rights','refresh');}
		}else{redirect('/member/login','refresh');}
  }
  function edit($uid = 0)
  {
		if($this->Member_model->logged_in())
		{		
			if($this->Member_model->is_administrator())
			{	
				if($uid != 0)
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
						// CLEAN $uid
						$template_data = $this->News_model->get_article($uid);
						$template_data['username'] = $this->Member_model->get_username();
						$this->parser->parse('news_edit', $template_data);
					}
					else
					{
						$this->News_model->edit($uid);
						$template_data = array();
						$template_data['username'] = $this->Member_model->get_username();
						$this->parser->parse('news_edit_success', $template_data);
					}
				}else{redirect('news/overview/edit','refresh');}
			}else{redirect('insufficient_rights','refresh');}
		}else{redirect('/member/login','refresh');}
  }
  function delete($uid = 0)
  {
	if($this->Member_model->logged_in())
	{
		if($this->Member_model->is_administrator())
		{
			if($uid != 0)
			{
				// TODO Check for validity
				// TODO Check for confirmation
				// TODO Load the news_remove view OR process it
				// TODO Dont delete it, just hide it
			}else{redirect('news/overview/delete','refresh');}
		}else{redirect('/member/panel','refresh');}
	}else{redirect('/member/login','refresh');}
  }  function overview()
  {
		if($this->Member_model->logged_in())
		{		
			if($this->Member_model->is_administrator())
			{
				$this->load->model('News_model');
				$template_data = array();
				$template_data['username'] = $this->Member_model->get_username();
				$template_data['news_articles'] = $this->News_model->get_all_articles();
				$template_data['highlight'] = $this->uri->segment(3);
				$this->parser->parse('news_overview', $template_data);
			}else{redirect('insufficient_rights','refresh');}
		}else{redirect('/member/login','refresh');}
  }
  function add_coment()
  {
		if($this->Member_model->logged_in())
		{
			// TODO Check for validity (swear filter?, can comment on article, article visibility)
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
			// TODO Check for author OR administrator
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
			// TODO Check for author OR administrator
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