	  <form action="" method="post"><p>
	  Current Empire Name<br/>
	  <?PHP
	  $Data = mysql_fetch_array(mysql_query("SELECT * FROM Player WHERE ID = '".$_SESSION[UID]."' AND Password = '".$_SESSION[UID2]."' LIMIT 1;")) or die();
	  $Data = $Data[EmpireName];
	  ?>
	  <p><?PHP Echo($Data); ?></p>
	  New Empire Name<br/>
	  <input type="text" name="EmpireName" value="" class="other"/><br/><br/>
	  <input type="submit" name="Change" value="Change Empire Name"/>&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="Reset"/><br/><br/>
	  </p></form>