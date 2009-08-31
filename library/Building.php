<?php
class Building {

   var $unique = 0;
   var $name = "";
   var $description = "";

   var $resources_required = array();

   function Building($ini_unique, $ini_name, $ini_description) {
	# Change these to set when set and gets are done
	$this->unique = $ini_unique;
	$this->name = $ini_name;
	$this->description = $ini_description;
   }

   function __construct() {
	
   }

   function __destruct() {
	
   }

}
?>
