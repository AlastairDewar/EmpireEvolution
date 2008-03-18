<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
		<title>Empire Evolution</title>
		<!--[if IE 6]>
		<link rel="stylesheet" href="http://empireevolution.uk.to/StyleIE.css" type="text/css" media="screen" />
		<![endif]-->
		<link rel="stylesheet" href="http://empireevolution.uk.to/Style.css" type="text/css" media="screen" />
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

	if(isset($_GET[Name]) && $_GET[Name] != null && !is_numeric($_GET[Name]))
	{
	$Name = str_replace('_',' ',$_GET[Name]);
	$Alliance = mysql_query("SELECT * FROM Alliances WHERE Name='".$Name."' LIMIT 1;") or die(mysql_error());
	if(mysql_num_rows($Alliance) == 1)
	{
	Echo('<h2>'.$Name.' Alliance</h2>'.'<br/><br/>Alliance information page coming soon.');
	Echo('<br/><br/>');
	}
	else
	{
	Echo($Name.' isnt a recognised alliance name.');
	}
	}
	else
	{
	die(error('No username set.'));
	}
?>

  </div></div>
  <div id="scrollBottom">&nbsp;</div>
  </div>
  </body>
</html>