<?php

class Friends extends Controller {

	function Friends()
	{
		parent::Controller();	
		$this->load->library('parser');
		$this->load->model('Friends_model');
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

	function add($uid)
	{
		// TODO Check for login
		// TODO Check for validity
		// TODO Load the friends_add view OR process it
	}

	function remove($uid)
	{
		// TODO Check for login
		// TODO Check for validity
		// TODO Check for confirmation
		// TODO Load the friends_remove view OR process it
	}

	function comparison($uid1, $uid2)
	{
		// TODO Check for login
		// TODO Check for validity
		// TODO Load the friends_comparison view OR process it	
	}
}

/* End of file friends.php */
/* Location: ./system/application/controllers/friends.php */