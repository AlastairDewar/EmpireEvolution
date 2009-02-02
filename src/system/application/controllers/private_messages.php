<?php
class Private_Messages extends Controller {

	function Private_Messages()
	{
		parent::Controller();	
		$this->load->library('parser');
		$this->load->model('Private_Messages_model');
		$this->load->controller('Member');
	}

	function index()
	{
		if($this->Member->logged_in())
		{
			$this->private_messages_panel();
		}
		else
		{
			$this->Member->login();	
		}
	}

	function private_messages_panel()
	{
		// TODO Check for login
		// TODO Load the private_messages_panel view
	}
	
	function view_message()
	{
		// TODO Check for login
		// TODO Check for validity (sender/recipient)
		// TODO Load the private_messages_view_message view
	}

	function inbox()
	{
		// TODO Check for login
		// TODO Load the inbox messages
		// TODO Load the private_messages_inbox view	
	}

	function sent_messages()
	{
		// TODO Check for login
		// TODO Load the inbox messages
		// TODO Load the private_messages_sent_messages view	
	}

	function send_mail()
	{
		// TODO Check for login
		// TODO Check for validity
		// TODO Check against friend blocks
		// TODO Load the private_messages_send_mail view or process it	
	}

	function drafts()
	{
		// TODO Check for login
		// TODO Load the drafts messages
		// TODO Load the private_messages_drafts view	
	}

	function delete()
	{
		// TODO Check for login
		// TODO Check for validity
		// TODO Check for confirmation 
		// TODO Load the private_messages_delete view or process it	
		// TODO Dont actually delete, just hide it
	}

	function mark_as_read()
	{
		// TODO Check for login
		// TODO Check for validity
	}

	function mark_as_unread()
	{
		// TODO Check for login
		// TODO Check for validity
	}
}

/* End of file private_messages.php */
/* Location: ./system/application/controllers/private_messages.php */
