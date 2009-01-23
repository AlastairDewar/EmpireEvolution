<?php

class Member extends Controller {

	function Member()
	{
		parent::Controller();	
		$this->load->library('parser');
		$this->load->model('Member_model');
	}

	function index()
	{
		if($this->logged_in())
		{
			$this->member_panel();
		}
		else
		{
			$this->login();
		}
	}

	function change_password()
	{

	}

	function password_reminder()
	{

	}

	function username_reminder()
	{

	}

	function profile()
	{
			//  If no uid is given and logged in, give users page
			//
			//  if($uid == 0 && $this->logged_in())
			//  {
			//  	$uid = $this->session->userdata('uid');
			//  }
			$uid = $this->uri->segment(3, 0);
			if($uid != 0){
			// TODO	Check if profile is public or private
			$template_data = array();
    			$template_data['username'] = "Username";
			$template_data['join_date'] = "Forever";
			$this->parser->parse('member_profile', $template_data);}
	}

	function member_panel()
	{
		if($this->logged_in())
		{			
			$template_data = array();
    			$template_data['username'] = "Username";
			$this->parser->parse('member_panel', $template_data);
		}
		else
		{
			$this->login();	
		}
	}

	function logged_in()
	{
		if($this->session->userdata('logged_in') === TRUE)
		{
			return TRUE;
		}
	 }

	function logout()
	{
		if($this->logged_in())
		{			
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('member_logout');
			}
			else
			{
				$array_items = array('logged_in' => FALSE);
				$this->session->unset_userdata($array_items);
				$this->load->view('home');
			}
		}
		else
		{
			$this->member_panel();	
		}
	}

	function login()
	{
		if($this->logged_in())
		{			
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|alpha_dash');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_lenth[32]|alpha_dash|callback_login_check');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('member_login');
			}
			else
			{
				$username = $this->input->post('username');
				$uid = $this->Member_model->get_uid_from_username($username);
				$newdata = array('uid'  => $uid,'logged_in' => TRUE);
				$this->session->set_userdata($newdata);
				$this->member_panel();
		
			}
		}
		else
		{
			$this->load->view('home');	
		}
	}

	function register()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|alpha_dash|callback_restricted_usernames');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_lenth[32]|alpha_dash|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_restricted_emails');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('member_register');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$emailaddress = $this->input->post('emailaddress');
			$this->Member_model->add_member();
			$uid = $this->Member_model->get_uid_from_username($username);
			$code = $this->Member_model->generate_confirmation($uid);
			$this->load->library('email');
			  $this->email->from('Registration@alastairdewar.co.uk');
			  $this->email->to($emailaddress);
			  $this->email->subject('Empire Evolution Registration');
			  $message = "Thank you for registering at Empire Evolution\r\n\r\n";
			  $message .= "Your account requires activation. It can be activivated by visitng the following link.\r\n";
			  $message .= "<a href=\"".site_url()."/member/confirm/".$code."\">".site_url()."/member/confirm/".$code."\"</a>\r\n\r\n";
			  $message .= "If you recieved this email in error please let a member of staff know by emailing <a href=\"mailto:Admin@alastairdewar.co.uk\">Admin@alastairdewar.co.uk</a>";
			  $this->email->message($message);
			  $this->email->send();
			$this->load->view('member_register_success');
		}
	}

	function login_check($str)
	{
		$username = $this->input->post('username');
		$uid = $this->Member_model->get_uid_from_username($username);
		if(!$this->Member_model->valid_login($uid, md5($str)))
		{		
			$this->form_validation->set_message('login_check', 'The %s you provided did not match that of the Username you gave'.md5($str));
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	function restricted_usernames($str)
	{
		if (stristr($str,'admin ') === TRUE || stristr($str,'admin_') === TRUE)
		{
			$this->form_validation->set_message('restricted_usernames', 'The %s field can not contain the word "admin"');
			return FALSE;
		}
		else
		{
			if (stristr($str,'mod ') === TRUE || stristr($str,'mod_') === TRUE)
			{
				$this->form_validation->set_message('restricted_usernames', 'The %s field can not contain the word "mod"');
				return FALSE;
			}
			else
			{
				if($this->Member_model->unique_username($str) === FALSE)
				{
					$this->form_validation->set_message('restricted_usernames', 'The %s you supplied is already in use');
					return FALSE;
				}
				else
				{
					return TRUE;
				}
			}
		}
	}

	function restricted_emails($str)
	{
		$domain = substr(strstr($str, '@'),1,strlen(strstr($str, '@')));
		$baddomains = array('mailinator.com');
		foreach ($baddomains as &$baddomain) {
			if (strcasecmp($domain, $baddomain) == 0)
			{
				$this->form_validation->set_message('restricted_emails', 'We apologise but we cannot accept disposable email addresses');
				return FALSE;
			}
		}
		if($this->Member_model->unique_email($str) === FALSE)
		{	
			$this->form_validation->set_message('restricted_emails', 'The %s you supplied is already in use');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}

/* End of file member.php */
/* Location: ./system/application/controllers/member.php */
