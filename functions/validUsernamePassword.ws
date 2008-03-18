<?php
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

?>