<?php
class Mobile extends Controller {

	function Mobile()
	{
		parent::Controller();	
		$this->load->library('user_agent');
	}

	function index()
	{
		if ($this->agent->is_mobile())
		{
			$this->load->view('mobile');
		}
	}
	
}
/* End of file mobile.php */
/* Location: ./system/application/controllers/mobile.php */