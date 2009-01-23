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
			$this->login();	
		}
	}

	function private_messages_panel()
	{

	}
	
	function inbox()
	{
	
	}

	function sent_messages()
	{

	}

	function send_mail()
	{

	}

	function drafts()
	{

	}

	function delete()
	{

	}

	function mark_as_read()
	{

	}

	function mark_as_unread()
	{

	}
}

/* End of file private_messages.php */
/* Location: ./system/application/controllers/private_messages.php */
