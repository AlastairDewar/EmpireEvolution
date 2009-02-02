<?php
class Member extends Controller {

	function Member()
	{
		parent::Controller();
	}

	function index()
	{
		if($this->Member_model->logged_in())
		{
			redirect('/member/panel', 'refresh');
		}
		else
		{
			redirect('/member/login', 'refresh');
		}
	}

	function change_password()
	{
		// TODO Check for login
		// TODO Check for original password
		// TODO Check for validity
		// TODO Load the member_change_password view OR process it
	}

	function password_reminder()
	{
		// TODO Check for validity
		// TODO Check for account from Username / Email
		// TODO Load the member_password_reminder view OR process it		
	}

	function username_reminder()
	{
		// TODO Check for validity
		// Check for account from Email
		// TODO Load the member_username_reminder view OR process it
	}

	function profile()
	{
			//  If no uid is given and logged in, give users page
			//
			//  if($uid == 0 && $this->Member_model->logged_in())
			//  {
			//  	$uid = $this->session->userdata('uid');
			//  }
			$uid = $this->uri->segment(3, 0);
			if($uid != 0){
			// TODO Check if profile is public or private
			// TODO Check if they have been blocked
			$template_data = array();
    		$template_data['username'] = "Username";
			$template_data['join_date'] = "Forever";
			$this->parser->parse('member_profile', $template_data);}
	}

	function panel()
	{
		if($this->Member_model->logged_in())
		{			
			$template_data = array();
    		$template_data['username'] = $this->Member_model->get_username();
			$this->parser->parse('member_panel', $template_data);
			$this->Member_model->update_activity();
		}
		else
		{
			redirect('/member/login','refresh');
		}
	}

	function confirm($code)
	{
		$this->Member_model->confirm($uid, $code);
		$this->load->view('member_confirmation_success');
	}
	
	function logout()
	{
		if($this->Member_model->logged_in())
		{			
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('uid', 'UID', 'required|min_length[1]|max_length[11]|numeric');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('member_logout');
			}
			else
			{
				$this->session->sess_destroy();
				redirect('/welcome/','refresh');
			}
		}
		else
		{
			redirect('/welcome/', 'refresh');
		}
	}

	function login()
	{
		if(!$this->Member_model->logged_in())
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
				$newdata = array('uid'  => $uid,'logged_in' => 1);
				$this->session->set_userdata($newdata);
				if($this->Member_model->last_login() == 0)
				{
					$this->load->view('member_init_login');
				}
				else
				{
					redirect('/member/panel','refresh');
				}
			}
		}
		else
		{
			redirect('/member/panel','refresh');
		}
	}

	function register()
	{
		if(!$this->Member_model->logged_in())
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
				  $this->email->from('Registration@empev.co.cc');
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
		else
		{				
			redirect('/member/panel','refresh');
		}		
	}

	function login_check($str)
	{
		$username = $this->input->post('username');
		$uid = $this->Member_model->get_uid_from_username($username);
		if(!$this->Member_model->valid_login($uid, md5($str)))
		{		
			$this->form_validation->set_message('login_check', 'The Username and Password you provided did not match that of any of our players');
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
		$baddomains = array('mailinator.com','trashymail.com','mailinator2.com','sogetthis.com','mailin8r.com','mailinator.net','spamherelots.com','thisisnotmyrealemail.com','maileater.com','spambox.us','spamhole.com','pookmail.com');
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
