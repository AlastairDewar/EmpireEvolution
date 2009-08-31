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

   /*
    *   Links to ResourceRequirement objects related to the building
    */
   var $resources_required = array();
   /*
    *   Links to ReseachRequirement objects related to the building
    */   
   var $research_required = array();
   /*
    *   Links to ResourceGeneration objects related to the building
    */
   var $resources_generated = array();

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

   function add_resource_requirement() {
	# Check existing requirements for duplicates
	# Attempt to add to database
   }

   function remove_resource_requirement() {
	# Check existing requirements
	# Attempt to remove from database
   }

   function add_research_requirement() {
	# Check existing requirements for duplicates
	# Attempt to add to database
   }

   function remove_research_requirement() {
	# Check existing requirements
	# Attempt to remove from database
   }

}
?>
