<?php
class PlayerBuilding extends Player {

   function __construct($player_unique) {
	print "Loading player owned buildings\n";
	$this->load_player_buildings();
   }

   function __destruct() {
	print "Logging out player\n";
   }

}
?>
