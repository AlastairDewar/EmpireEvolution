<?php
class News extends Controller
{
  function News()
  {
	parent::Controller();	
	$this->load->library('parser');
	$this->load->model('News_model');
	$this->load->model('Member_model');
  }

  function index()
  {
	$this->latest_articles();	
  }

  function view_article($uid)
  {
	// TODO Check for validity (visible)
	// TODO Load the news_view_article view
  }

  function latest_articles()
  {
	// TODO Load the last 3 VISIBLE articles
	// TODO Load the news_latest_articles view
  }

  function archive()
  {
	// TODO Load all the articles which are visible
	// TODO Load the news_archive view 
  }

  function add()
  {
	// TODO Check for login
	// TODO Check for validity
	// TODO Check for administrator rights
	// TODO Load the news_add view OR process it
  }

  function remove()
  {
	// TODO Check for login
	// TODO Check for validity
	// TODO Check for administrator rights
	// TODO Check for confirmation
	// TODO Load the news_remove view OR process it
  }

  function edit()
  {
	// TODO Check for login
	// TODO Check for validity
	// TODO Check for administrator rights
	// TODO Load the news_edit view OR process it
  }

  function add_coment()
  {
	// TODO Check for login
	// TODO Check for validity (swear filter?, can comment on article, article visibility)
  }

  function remove_comment()
  {
	// TODO Check for login
	// TODO Check for confirmation
	// TODO Administrator check
  }

 function edit_comment()
 {
	// TODO Check for login
	// TODO Check for validity (see add_comment)
	// TODO Administrator check (tag it)
 }
}

/* End of file news.php */
/* Location: ./system/application/controllers/news.php */
