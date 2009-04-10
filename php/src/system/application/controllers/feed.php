<?php
class Feed extends Controller {

	function Feed()
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
		if($this->Member_model->logged_in())
		{
			//
		}
		else
		{
			redirect('/member/login', 'refresh');
		}
	}
	
	function news()
	{
	
	}
	
	function admin_news()
	{
	
	}
	
	function admin_main()
	{
	
	}
	
	function admin_members()
	{
	
	}
	
	function admin_buildings()
	{
	
	}
	
	function admin_research()
	{
	
	}

}

/* End of file member.php */
/* Location: ./system/application/controllers/member.php */
