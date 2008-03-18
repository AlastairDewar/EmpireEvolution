<?PHP	  
		if(!loggedIn()){die(error('You must be logged in to use this feature.'));}
	  $Comment = mysql_fetch_array(mysql_query("SELECT * FROM NewsComments WHERE UID = '".$_GET[EditComment]."' LIMIT 1;"));
		if($Comment[AuthorID] != $_SESSION[UID]){die(error('You cannot edit a comment you didn\'t write.'));}
?>	  
	  <form action="" method="post"><p>
	  Comment<br/>
	  <textarea name="Comment" class="other" rows="5" cols="40"><?PHP Echo($Comment[Comment]); ?></textarea><br/><br/>
	  <img src="./images/CaptchaSecurityImages.php" alt="Please refresh the page!"><br/>
	  Robot Prevention<br/>
	  <input type="text" name="RobotPrevention" value="" size="6" class="other"/><br/><br/>
	  <input type="submit" name="EditComment" value="Edit Comment"/>&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="Reset"/>
	  </p></form>