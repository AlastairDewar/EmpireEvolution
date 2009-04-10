<?php
class Alliances extends Controller {

	function Alliances()
	{
		parent::Controller();	;
		$this->load->model('Alliances_model');
		$this->load->library('user_agent');
		if ($this->agent->is_mobile())
		{
			redirect('mobile');
		}
	}

	function index()
	{
		if($this->Member_model->logged_in())
		{
			$this->panel();
		}
		else
		{
			redirect('/member/login','refresh');	
		}
	}

	function panel()
	{

	}

	function join($uid)
	{
		// TODO Check for login
		// TODO Check for validity
		// TODO Load the alliance_join view OR process it
	}

	function remove($uid)
	{
		// TODO Check for login
		// TODO Check for validity
		// TODO Check for confirmation
		// TODO Load the alliance_remove view OR process it
	}

	function info($uid)
	{
		// TODO Check for validity
		// TODO Load the alliances_info view
	}
}

/* End of file friends.php */
/* Location: ./system/application/controllers/friends.php */