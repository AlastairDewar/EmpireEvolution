<?php
class Member {

	private $unique_identifier = 0;
	private $username = "";
	private $password = "";
	private $email = "";
	private $rights = 0;
	private $join_date = 0;
	private $latest_activity = 0;
	private $buildings = array();
	private $research_technologies = array();
	private $resources = array();
   
   function __construct($unique_identifier = 0) {
	if($unique_identifier != 0)
	{$this->load->view("Member/register");}
    else
	{$this->fetch($unique_identifier);}
   }
   
  /**
    * Fetch a member's credentials from the database
	*
	* @return void
	* @author Alastair Fraser Dewar
    */
   private function fetch($unique_identifier)
   {

   }

  /**
    * Set the member's unique identifier
	* (Should only ever be used by the fetch function)
	*
	* @return void
	* @author Alastair Fraser Dewar
    */
   private function set_unique_identifier($new_unique_identifier)
   {
    // Check for alteration
	// Check for validity (unique & int)
	$this->unique_identifier = $new_unique_identifier;
	// Update database (only if altered)
   }
   
  /**
    * Set a member's username
	*
	* @return void
	* @author Alastair Fraser Dewar
    */
   public function set_username($new_username)
   {
    // Check for alteration
	// Check for validity (unique & string & length & !contain "admin" or "mod")
	$this->username = $new_username;
	// Update database (only if altered)
   }
   
  /**
    * Set a member's password
	*
	* @return void
	* @author Alastair Fraser Dewar
    */
   public function set_password($new_password)
   {
    // Check if its been altered
	// Check for validity
	// Encrypt the password
	// Save it locally
	// Save it to the database
	// Send an email (informatic/confirmation)
   }
   
  /**
    * Set a member's email address
	*
	* @return void
	* @author Alastair Fraser Dewar
    */
   public function set_email($new_email)
   {
	// Check for alteration
	// Check for validity (unique & string & length & mx records)
	$this->email = $new_email;
	// Update database (only if altered)
   }
   
  
}

?>
