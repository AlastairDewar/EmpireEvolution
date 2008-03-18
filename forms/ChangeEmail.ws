	  <form action="" method="post"><p>
	  Current Email<br/>
	  <?PHP
	  $Email = mysql_fetch_array(mysql_query("SELECT * FROM Player WHERE ID = '".$_SESSION[UID]."' AND Password = '".$_SESSION[UID2]."' LIMIT 1;")) or die();
	  $Email = $Email[Email];
	  ?>
	  <p><?PHP Echo($Email); ?></p>
	  Email<br/>
	  <input type="text" name="Email1" value="" class="other"/><br/><br/>
	  Email <span style="font-size:12px; display: inline;">(confirmation)</span><br/>
	  <input type="text" name="Email2" value="" class="other"/><br/><br/>
	<img src="../../images/CaptchaSecurityImages.php"/><br/>
	 Robot Prevention<br/>
	 <input  size="6" name="RobotPrevention" class="other"/><br/><br/>
	  <input type="submit" name="ChangeEmail" value="Change Email"/>&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="Reset"/><br/><br/>
	  </p></form>