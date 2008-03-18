<?php
	function loggedIn()
	{
		if(isset($_SESSION[UID]) && is_numeric($_SESSION[UID]))
		{
		return true;
		}
		else
		{
		return false;
		}
	}
?>