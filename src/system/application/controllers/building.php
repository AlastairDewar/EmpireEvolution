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
			$this->login();	
		}
	}

	function building_panel()
	{

	}

	function upgrade()
	{

	}

	function can_upgrade()
	{

	}

	function information()
	{

	}
}

/* End of file building.php */
/* Location: ./system/application/controllers/building.php */
