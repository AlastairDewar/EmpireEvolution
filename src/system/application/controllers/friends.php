<?php

class Friends extends Controller {

	function Friends()
	{
		parent::Controller();	
		$this->load->library('parser');
		$this->load->model('Friends_model');
		$this->load->controller('Member');
	}

	function index()
	{
		if($this->Member->logged_in())
		{
			$this->friends_panel();
		}
		else
		{
			$this->login();	
		}
	}

	function friends_panel()
	{

	}

	function add()
	{

	}

	function remove()
	{

	}

	function comparison()
	{

	}
}

/* End of file friends.php */
/* Location: ./system/application/controllers/friends.php */
