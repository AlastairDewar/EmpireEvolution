	  <form action="" method="post"><p>
	  Username<br/>
	  <input type="text" name="Username" value="" class="other"/><br/><br/>
	  Reason<br/>
	  <select name="Reason" class="other"><option value=""></option>
<?PHP
$Data2 = mysql_query("SELECT * FROM ReasonsToRemoveFriends");
while($Data = mysql_fetch_array($Data2))
{
Echo('<option value="'.$Data[UID].'">'.$Data[Reason].'</option>');
}
?>
	  </select><br/><br/>
	  <input type="submit" name="RemoveFriend" value="Remove Friend"/><br/><br/>
	  </p></form>