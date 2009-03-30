<?php

class Member {

	private integer $unique_identifier
	private String $username;
	private String $password;
	private String $email
	private integer $rights;
	private integer $join_date;
	private integer $latest_activity
	private $buildings = array();
	private $research_technologies = array();
	private $resources = array();

   function __construct() {
		$this->load->view("Member/register");
   }
   
   function __construct($unique_identifier) {
       print "In BaseClass constructor\n";
   }
   
   function set_username($new_username) {
		$this->username = $new_username;
   }
}

?>