<?php
class Database {

   var $connection = null;
   var $hostname = "adewar.db";
   var $username = "alastairdewa";
   var $password = "";
   var $name = "empev";

   var $query_string = "";

   function __construct() {
	print "Initiating database connection";
	# Create database connection	
		#$this->connection = mysqli_connect($hostname, $username, $password);
		#mysqli_select_db($this->connection, $name);
   }

   function __destruct() {
	print "Closing database connection";
	# Destroy database connection
   }

   function query($query) {
	if($this->connection != null){
	$this->query_string = mysqli_query($query);}else{
	print "Failure to estalish database connecton first";}
   }

   function fetch_array() {
	if($this->connection != null){
	if($this->query_string != null){
	return mysqli_fetch_array($this->query_string);}else{
	print "Failure to find existing query";}}else{
	print "Failure to estalish database connecton first";}
   }

}
?>
