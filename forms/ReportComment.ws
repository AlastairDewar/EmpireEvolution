	  <form action="" method="post"><p>
	  Reason<br/>
	  <select name="Reason" class="other"><option value=""></option>
<?PHP
$Data2 = mysql_query("SELECT * FROM ReasonsToReportComments");
while($Data = mysql_fetch_array($Data2))
{
Echo('<option value="'.$Data[UID].'">'.$Data[Reason].'</option>');
}
?>
  	  </select><br/><br/>
	  Other Reason<br/>
	  <textarea name="OtherReason" class="other" rows="5" cols="40"></textarea><br/><br/>
	  <img src="http://empireevolution.uk.to/images/CaptchaSecurityImages.php" alt="Please refresh the page!"/><br/>
	  Robot Prevention<br/>
	  <input type="text" name="RobotPrevention" size="6" class="other"/><br/><br/>
	  <input type="submit" name="ReportComment" value="Report Comment"/>&nbsp;&nbsp;<input type="reset" name="Reset" value="Reset"/>
	  </p></form>