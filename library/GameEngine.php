<?php
class GameEngine {

   var $database;
   var $buildings = array();
   var $research = array();
   var $player = null;
   var $log = null;

   function __construct() {
	$this->log("Initiating game engine");
	# Start database connection
		 $this->database = new Database();
	# Fire up the loader
	new Loader();
   }

   function __destruct() {
	# Destroy database connection
		unset($this->database);
	$this->log("Destroyed game enginge");
   }

   function load_player($unique) {
	$this->log("Loading player ".$unique);
	#$this->player = new Player($unique);
   }

   function log($string) {
	$message = "[".date("H:i:s")."] ".$string."\n";
	print $message;
	$this->log = $this->log . "\n" . $message;
   }
}

class Loader extends GameEngine {

   function __construct() {
        $this->log("Initiating loading sequence");
	# Check for cache first to reduce database server load
	if($this->buildings == null) {
	$this->load_buildings();}else{
	$this->log("Loading buildings from cache");}
	if($this->research == null) {
	$this->load_research();}else{
	$this->log("Loading research from cache");}
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
	$this->log("Loaded buildings");
   }

   function load_research() {
   	# Load research from database
		# @see load_buildings
   }

   function __destruct() {
       $this->log("Finished loading sequence");
   }
}
?>
