<?php

class Building extends Controller {

  function Building()
  {
	parent::Controller();
	$this->load->model('Building_model');
		$this->load->library('user_agent');
		if (!$this->agent->is_mobile())
		{
			redirect('mobile');
		}
  }

  function index()
  {
	if($this->Member_model->logged_in())
	{
		$this->building_panel();
	}
	else
	{
		redirect('/member/login','refresh');
	}
  }

  function building_panel()
  {
	if($this->Member_model->logged_in())
	{
		// TODO Load the building_panel view
	}
	else
	{
		redirect('/member/login','refresh');
	}
  }

  function upgrade($uid)
  {
	if($this->Member_model->logged_in())
	{
		// TODO Check for validity in uid
		// TODO Start the upgrade checks
		// TODO Check for comfirmation?
		// TODO Upgrade the building
	}
	else
	{
		redirect('/member/login','refresh');
	}
  }

  function can_upgrade($uid)
  {
	if($this->Member_model->logged_in())
	{
		// TODO Check for validity in uid
		// TODO Perform the upgrade checks
		// TODO Return boolean value
	}
	else
 	{	
		redirect('/member/login','refresh');
	}
  }

  function information($uid)
  {
		// TODO Check for validity in uid
		// TODO Load the building_info view 
  }

  function edit($uid)
  {
	if($this->Member_model->logged_in())
	{			
		if($this->Member_model->is_administrator())
		{
		// TODO Check for validity in uid
		// TODO Check for confirmation
		// TODO Load the building_edit view OR process it
		}
		else
		{
			redirect('/member/panel','refresh');	
		}
	}
	else
	{
		redirect('/member/login','refresh');
	}
  }

  function add()
  {
	if($this->Member_model->logged_in())
	{
		if($this->Member_model->is_administrator())
		{
		// TODO Check for validity
		// TODO Check for confirmation
		// TODO Load the building_add view OR process it
		}
		else
		{
			redirect('/member/panel','refresh');	
		}
	}
	else
	{
		redirect('/member/login','refresh');
	}
  }

  function remove($uid)
  {
	if($this->Member_model->logged_in())
	{
		if($this->Member_model->is_administrator())
		{
		// TODO Check for validity in uid
		// TODO Check for confirmation
		// TODO Load the building_remove view OR process it
		}
		else
		{
			redirect('/member/panel','refresh');	
		}
	}
	else
	{
		redirect('/member/login','refresh');	
	}
  }

}

/* End of file building.php */
/* Location: ./system/application/controllers/building.php */