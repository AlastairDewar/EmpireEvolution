<?php

   function __autoload($class_name) {
	#var_dump($class_name);
	require './library/' . $class_name . '.php';
   }

$game = new GameEngine();
sleep(3);
?>
