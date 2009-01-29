<?php

class Building extends Controller {

  function Building()
  {
	parent::Controller();	
	$this->load->library('parser');
	$this->load->model('Building_model');
	$this->load->controller('Member');
  }

  function index()
  {
	if($this->Member->logged_in())
	{
		$this->building_panel();
	}
	else
	{
		$this->Member->login();	
	}
  }

  function building_panel()
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

  function upgrade($uid)
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

  function can_upgrade($uid)
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

  function information($uid)
  {
		// TODO Check for validity in uid
		// TODO Load the building_info view 
  }

  function edit($uid)
  {
	if($this->Member->logged_in())
	{			
		// TODO Check for validity in uid
		// TODO Check for administrator rights
		// TODO Check for confirmation
		// TODO Load the building_edit view OR process it
	}
	else
	{
		$this->Member->login();	
	}
  }

  function add()
  {
	if($this->Member->logged_in())
	{
		// TODO Check for validity in uid
		// TODO Check for administrator rights
		// TODO Check for confirmation
		// TODO Load the building_add view OR process it
	}
	else
	{
		$this->Member->login();	
	}
  }

  function remove($uid)
  {
	if($this->Member->logged_in())
	{
		// TODO Check for validity in uid
		// TODO Check for administrator rights
		// TODO Check for confirmation
		// TODO Load the building_remove view OR process it
	}
	else
	{
		$this->Member->login();	
	}
  }

}

/* End of file building.php */
/* Location: ./system/application/controllers/building.php */
