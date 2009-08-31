<?php
class GameEngine {

   var $database;
   var $buildings = array();
   var $research = array();
   var $player = null;
   var $log = null;

   function __construct() {
	print "Initiating game engine";
	# Start database connection
		 $this->database = new Database();
	# Fire up the loader
	new Loader();
   }

   function __destruct() {
	# Destroy database connection
		unset($this->database);
	print "Destroyed game enginge";
   }

   function load_player($unique) {
	print "Loading player ".$unique;
	#$this->player = new Player($unique);
   }
}

class Loader extends GameEngine {

   function __construct() {
        print "Initiating loading sequence";
	# Check for cache first to reduce database server load
	if($this->buildings == null) {
	$this->load_buildings();}else{
	print "Loading buildings from cache";}
	if($this->research == null) {
	$this->load_research();}else{
	print "Loading research from cache";}
   }
   
   function load_buildings() {
   	# Load buildings from database
		#$this->database->query("SELECT * FROM Buildings");
		#while($building = $this->database->fetch_array()) {
		# Loop through buildings
		# Create building object
			# $current_building = new Building();
		# Modify building to reflect one in database
		# Add building to engine
			# array_push($this->buildings, $current_building);
		#}
	print "Loaded buildings";
   }

   function load_research() {
   	# Load research from database
		# @see load_buildings
   }

   function __destruct() {
       print "Finished loading sequence";
   }
}
?>
