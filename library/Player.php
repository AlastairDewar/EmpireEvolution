<?php
class Player {

   /*
    *   The players unique identifier
    */
   var $unique = 0;
   /*
    *   The players unique username
    */
   var $username = "";
   /*
    *   The players unique email
    */
   var $email = "";
   /*
    *   An array of town owned by a player
    */
   var $towns = array();

   function __construct($uid = 0) {
    // Check for existing player
	print "Loading player\n";
	$this->load_towns();
   }

   function __destruct() {
	print "Logging out player\n";
   }

   function load_towns() {
	// Loop through database searching for towns owned by the player
	// Create new town object from database and add buildings, resources etc.
   }
   
   function get_uid() {
   	return $this->unique;
   }
   
   function get_username() {
   	return $this->username;
   }
   
   function set_username($new_username) {
   	// Check for formatting
   	// Check for exclusivity
   	// Update database
   	$this->username = $new_username;
   }
   
   function get_email() {
   	return $email;
   }
   
   function set_email($email = "") {
   	// Check for formatting
   	// Check for exclusivity
   	// Send new confirmation email
   	// Add to email change request table in db
   }

}
?>
