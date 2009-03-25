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
		if($this->Member_model->logged_in())
		{			
			if($this->Member_model->is_administrator())
			{
				$template_data = array();
				$template_data['username'] = $this->Member_model->get_username();
				$template_data['mod_logs'] = array('There are currently no Moderator logs<br/>');
				$template_data['admin_logs'] = $this->Admin_model->get_logs();
				$this->parser->parse('admin/dashboard', $template_data);
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

	function news()
	{
		if($this->Member_model->logged_in())
		{			
			if($this->Member_model->is_administrator())
			{
				$this->load->model('News_model');
				$template_data = array();
				$template_data['username'] = $this->Member_model->get_username();
				$template_data['news_logs'] = $this->News_model->get_logs();
				$this->parser->parse('news/dashboard', $template_data);
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
	
	function members()
	{
		if($this->Member_model->logged_in())
		{			
			if($this->Member_model->is_administrator())
			{
				$template_data = array();
				$template_data['username'] = $this->Member_model->get_username();
				$template_data['member_logs'] = $this->Member_model->get_logs();
				$this->parser->parse('members/dashboard', $template_data);
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
	
	function buildings()
	{
		if($this->Member_model->logged_in())
		{			
			if($this->Member_model->is_administrator())
			{
				$this->load->model('Building_model');
				$template_data = array();
				$template_data['username'] = $this->Member_model->get_username();
				$template_data['building_logs'] = $this->Building_model->get_logs();
				$this->parser->parse('buildings/dashboard', $template_data);
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
	
	function research()
	{
		if($this->Member_model->logged_in())
		{			
			if($this->Member_model->is_administrator())
			{
				$this->load->model('Research_model');
				$template_data = array();
				$template_data['username'] = $this->Member_model->get_username();
				$template_data['research_logs'] = $this->Research_model->get_logs();
				$this->parser->parse('research/dashboard', $template_data);
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

	function view_logs(){}

	function view_statistics(){}
	
}	
/* End of file admin.php */
/* Location: ./system/application/controllers/admin.php */
