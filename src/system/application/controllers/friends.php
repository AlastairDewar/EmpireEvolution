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
		if($this->Member_model->logged_in())
		{
			// TODO Check for validity
			// TODO Load the friends_add view OR process it
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
			// TODO Check for validity
			// TODO Load the friends_remove view OR process it
			// TODO Check for confirmation
		}
		else
		{
			redirect('/member/login','refresh');	
		}
	}

	function comparison($uid1, $uid2)
	{
		if($this->Member_model->logged_in())
		{
		// TODO Check for validity
		// TODO Load the friends_comparison view OR process it	
		}
		else
		{
			redirect('/member/login','refresh');	
		}
	}
	
	function block($uid)
	{
		if($this->Member_model->logged_in())
		{
			// TODO Check for validity
			// TODO Load the friends_block_success_view
		}
		else
		{
			redirect('/member/login','refresh');	
		}
	}
}

/* End of file friends.php */
/* Location: ./system/application/controllers/friends.php */