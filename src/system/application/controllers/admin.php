<?php
class Admin extends Controller {

	function Admin()
	{
		parent::Controller();
		$this->load->model('Admin_model');
	}
	
	function index()
	{
		if($this->Member_model->logged_in())
		{			
			if($this->Member_model->is_administrator())
			{
				redirect('/admin/dashboard','refresh');	
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

	function dashboard()
	{
		$template_data = array();
    	$template_data['username'] = $this->Member_model->get_username();
		$template_data['mod_log'] = array('There are currently no Moderator logs');
		$template_data['admin_log'] = $this->Admin_model->get_logs();
		$this->parser->parse('admin_dashboard', $template_data);}
	}

/* End of file admin.php */
/* Location: ./system/application/controllers/admin.php */