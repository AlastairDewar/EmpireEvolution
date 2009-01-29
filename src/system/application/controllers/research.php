<?php

class Research extends Controller {

	function Research()
	{
		parent::Controller();	
		$this->load->library('parser');
		$this->load->model('Research_model');
		$this->load->controller('Member');
	}

	function index()
	{
		if($this->Member->logged_in())
		{
			$this->research_panel();
		}
		else
		{
			$this->Member->login();	
		}
	}

	function research_panel()
	{
	if($this->Member->logged_in())
	{
		// TODO Load the building panel	
	}
	else
	{
		$this->Member->login();	
	}
	}

	function upgrade()
	{
	if($this->Member->logged_in())
	{
		// TODO Check for validity in uid
		// TODO Start the upgrade checks
		// TODO Check for comfirmation?
		// TODO Upgrade the building
	}
	else
	{
		$this->Member->login();
	}
	}

	function can_upgrade()
	{
	if($this->Member->logged_in())
	{
		// TODO Check for validity in uid
		// TODO Perform the upgrade checks
		// TODO Return boolean value
	}
	else
 	{	
		$this->Member->login();	
	}
	}

	function information()
	{

	}

	function add()
	{
		// TODO Check for login
		// TODO Check for validity in uid
		// TODO Check for administrator rights
		// TODO Check for confirmation
		// TODO Load the research_add view OR process it
	}

	function remove($uid)
	{
		// TODO Check for login
		// TODO Check for validity in uid
		// TODO Check for administrator rights
		// TODO Check for confirmation
		// TODO Load the research_remove view OR process it
	}

	function edit($uid)
	{
		// TODO Check for login
		// TODO Check for validity in uid
		// TODO Check for administrator rights
		// TODO Check for confirmation
		// TODO Load the reasearch_edit view OR process it
	}
}

/* End of file research.php */
/* Location: ./system/application/controllers/research.php */
