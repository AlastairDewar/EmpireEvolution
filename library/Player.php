<?php
class Player {

   var $unique = 0;
   var $username = "";
   var $buildings = array();

   function __construct() {
	print "Loading player\n";
	$this->load_player_buildings();
   }

   function __destruct() {
	print "Logging out player\n";
   }

   function load_player_buildings() {
	# Loop through
	# Create new building
		# $current_building = new PlayerBuilding();
	# Add to array
		# array_push($buildings, $current_building);
   }

}
?>
