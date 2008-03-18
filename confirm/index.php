<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<title>Empire Evolution</title>
		<link rel="stylesheet" href="http://empireevolution.uk.to/Style.css" type="text/css" media="screen" />
		<!--[if IE 6]>
		<link rel="stylesheet" href="http://empireevolution.uk.to/StyleIE.css" type="text/css" media="screen" />
		<![endif]-->
  </head>
  <body>
  <div id="banner" onclick="location.href='http://empireevolution.uk.to/';" ></div>
  <div id="scroll">
  <div id="scrollTop">&nbsp;</div>
  <div id="scrollBackdrop">&nbsp;
  <div id="scrollContent">

<?PHP

require('../functions/error.ws');

$Database = mysql_connect('alastairdewar.co.uk', 'adewar', '0a4h0d62f4h1d0!!');
$Database = mysql_select_db('adewar_EmpireEvolution',$Database);

	if(isset($_GET[Code]) && $_GET[Code] != null && !is_numeric($_GET[Code]))
	{
		$Code = $_GET[Code];
		$User = mysql_query("SELECT * FROM Player WHERE ConfirmCode = '".$Code."' LIMIT 1;") or die(mysql_error());
		if(mysql_num_rows($User) == 1)
		{
			$User = mysql_fetch_array($User);
			mysql_query("UPDATE Player SET ConfirmCode = '-1' WHERE ID = '".$User[ID]."'") or die(mysql_error());
			Echo('Thank you for validating your account.<br/><br/>You can now <a href="../?Page=Login">login</a>.<br/>');
		}
		else
		{
		die(error('Invalid confirmation code or your email has already been activated.'));
		}
	}
	else
	{
	die(error('No confirmation code set.'));
	}
?>

  </div></div>
  <div id="scrollBottom">&nbsp;</div>
  </div>
  </body>
</html>