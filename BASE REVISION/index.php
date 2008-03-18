<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="StyleSheet" href="Style.css" type="text/css" media="screen" />
<title>Empire Evolution</title>
</head>
<body>
<?PHP
Require("./classes/Settings.class.php");
$Settings = new Settings();
function error($Message){
Echo('<div id="Menu"><div id="scrollTop">&nbsp;</div><div id="MenuContent"><br/><p><b>Empire Evolution Error!</b></p><p>'.$Message.'</p><br/></div><div id="scrollBottom">&nbsp;</div></div>');}
function validUsernamePassword($Username,$Password){
$Username = strtolower($Username);
$Password = strtolower($Password);
$ValidUsername = array ("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9","_","-"," ");
$ValidPassword = array ("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9","!","_","-");
$j = strlen($Username);
for ($k = 0; $k < $j; $k++) {
$char = substr($Username, $k, 1);
	$j2 = count($ValidUsername);
	for ($k2 = 0; $k2 < $j2; $k2++) {
	if(substr($char,$ValidUsername[$k2]) ==0)
	{$Matched++;break;}
	}
}
$j3 = strlen($Password);
for ($k3 = 0; $k3 < $j2; $k3++) {
$char = substr($Password, $k3, 1);
	$j4 = count($ValidPassword);
	for ($k4 = 0; $k4 < $j4; $k4++) {
	if(substr($char,$ValidPassword[$k4]) ==0)
	{$Matched2++;break;}
	}
}
if($j == $Matched){return true;}else{return false;}
if($j == $Matched2){return true;}else{return false;}}
function usernameFormat($Username){
$Username = strtolower($Username);
$Username[0] = strtoupper($Username[0]);
return $Username;
}
	function load(){
	if(isset($_SESSION[UID]) && $_SESSION[UID] != null && isset($_SESSION[UID2]) && $_SESSION[UID2] != null){
	$User = mysql_fetch_array(mysql_query("SELECT * FROM Player WHERE ID='".$_SESSION[UID]."' AND Password='".$_SESSION[UID2]."' LIMIT 1;")) or die(error('Account details changed.<br/>Please <a href="?Page=Login">Login</a> again.'));
	$Player->Username = $User[Username];}else{Echo('Not logged in.');}}

	function displayBanner(){
	Echo('<img src="./images/Banner.gif" alt="Empire Evolution Banner"/>');
	}

$Database = mysql_pconnect('localhost','adewar','0a4h0d62f4h1d0!!') or die(error('MySQL server down.'));
$Database = mysql_select_db('adewar_EmpireEvolution', $Database) or die(error('MySQL database error.'));
Require("./classes/Player.class.php");
$Player = new Player();
displayBanner();
Require("Navigation.php");
?>
</body>
</html>