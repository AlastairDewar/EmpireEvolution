<?PHP
	function SpacesCount3($String)
	{
	 $Valid = array(" ");
	 $Found = 0;
	 for($i=0; $i < strlen($String); $i++){
		# For every character in the String
		foreach ($Valid as $Value){
			# For each instance in the array
		   if(strcmp($Value,$String[$i]) == 0){
			# If the current character is in the array
			$Found = $Found + 1;
			# Increment counter
			break;}}}
		if($Found > 2){
			if(strstr($String, "   ")){
				return true;}
			else{
				return false;}}
		else{
			return false;}
	}

	function SpacesCount2($String)
	{
	 $Valid = array(" ");
	 $Found = 0;
	 for($i=0; $i < strlen($String); $i++) {
		# For every character in the String
		foreach ($Valid as $Value){
			# For each instance in the array
		   if(strcmp($Value,$String[$i]) == 0){
			# If the current character is in the array
			$Found = $Found + 1;
			# Increment counter
			break;}}}
		if($Found > 1){
			if(strstr($String, "  ")){
				return true;}
			else{
				return false;}}
		else{
			return false;}
	}
function UnderscoreCount3($String)
{
 $Valid = array("_");
 $Found = 0;
 for($i=0; $i < strlen($String); $i++)
 {
 	# For every character in the String
 	foreach ($Valid as $Value)
 	{
 		# For each instance in the array
       if(strcmp($Value,$String[$i]) == 0)
	   {
	   	# If the current character is in the array
 		$Found = $Found + 1;
 		# Increment counter
 		break;
 	   }
	}
}
	if($Found > 2)
	{
		if(strstr($String, "___"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
function UnderscoreCount2($String)
{
 $Valid = array("_");
 $Found = 0;
 for($i=0; $i < strlen($String); $i++)
 {
 	# For every character in the String
 	foreach ($Valid as $Value)
 	{
 		# For each instance in the array
       if(strcmp($Value,$String[$i]) == 0)
	   {
	   	# If the current character is in the array
 		$Found = $Found + 1;
 		# Increment counter
 		break;
 	   }
	}
}
	if($Found > 1)
	{
		if(strstr($String, "__"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}

	function validateEmail($email){
	   $mailparts=explode("@",$email);
	   $hostname = $mailparts[1];
	   $exp = "^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";
	   $b_valid_syntax=eregi($exp, $email);
	   if($b_valid_syntax){
	   return true;}
	   else{
	   return false;}
	}
?>