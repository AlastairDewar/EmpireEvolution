<?PHP
/*
    This file is part of Empire Evolution.

    Empire Evolution is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Empire Evolution is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Empire Evolution.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<html>
<head>
<title>Empire Evolution</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
google.load("jquery", "1.2.6");
jQuery(document).ready(function() {
jQuery('a[rel*=facebox]').facebox() 
})
</script>
<link href="./css/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="./css/main.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="./js/facebox.js" type="text/javascript"></script> 
</head>
<body>
<h1>Empire Evolution</h1>
<?
require("GameEngine.class.php");
require("Member.class.php");
require("Resources.class.php");
$EmpireEvolution = new GameEngine();
$Member = new Member(0000000001);
$Resources = new Resources($Member->userID);

#if($EmpireEvolution->logging === true){
#$EmpireEvolution->loadLog($Member->userID);
#print("<a href=\"#logs\" rel=\"facebox\">View the logs</a>\r\n");}
?>
</body>
</html>
