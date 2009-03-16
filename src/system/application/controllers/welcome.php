<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
		$this->load->library('user_agent');
		if ($this->agent->is_mobile())
		{
			redirect('mobile');
		}
	}
	
	function index()
	{
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */