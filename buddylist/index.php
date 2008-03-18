<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Empire Evolution</title>
		<link rel="stylesheet" href="http://empireevolution.uk.to/Style.css" type="text/css" media="screen" />
		<!--[if IE]>
		<link rel="stylesheet" href="./StyleIE.css" type="text/css" media="screen" />
		<![endif]-->
	</head>
<body>
	<div id="banner" onclick="location.href='http://empireevolution.uk.to/';" ></div>
	<div id="scroll">
	<div id="scrollTop">&nbsp;</div>
	<div id="scrollBackdrop">&nbsp;
	<div id="scrollContent">
	<?PHP
		Include("../functions/error.ws");
		Include("../functions/clean.ws");
		Include("../functions/loggedIn.ws");
		Include("../functions/mail.ws");
		Include("../functions/validUsernamePassword.ws");
		Include("Navigation.php");
	?>
	<br/><br/>
	</div></div>
	<div id="scrollBottom">&nbsp;</div>
	</div>
	<div id="footer"><a href="?Page=Home">Home</a> || Copyright  	&#169; <a href="http://alastairdewar.co.uk/">Alastair Dewar</a> 2008</div>
</body>
</html>