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
			$this->login();	
		}
	}

	function research_panel()
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

/* End of file research.php */
/* Location: ./system/application/controllers/research.php */
