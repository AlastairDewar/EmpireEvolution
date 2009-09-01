<?php
class Building {

   /*
    *   The buildings unique identifier
    */
   var $unique = 0;
   /*
    *   The buildings name
    */
   var $name = "";
   /*
    *   A short description of the building
    */
   var $description = "";

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
