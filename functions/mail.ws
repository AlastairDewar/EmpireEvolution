<?php
	function sendConfirmationMail($Email, $ConfirmationCode)
	{
		$subject = "Account Confirmation";
		$message = "Thank you for registering your email here at Empire Evolution.<br>Please follow the link below to activate your account.<br><br><a href='http://empireevolution.uk.to/confirm/".$ConfirmationCode."'>Activate your account</a><br><br>Regards,<br>Empire Evolution Team";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Empire Evolution <Registration@empireevolution.uk.to>' . "\r\n";
		$headers .= 'Reply-To: Empire Evolution <Admin@empireevolution.uk.to>'."\r\n";
		$headers .= 'Return-Path: Empire Evolution <Registration@empireevolution.uk.to>'."\r\n";
		if ( mail($Email,$subject,$message,$headers) ) {
		   echo "A confirmational email has been dispatched.<br/><br/>You cannot send another email for 15 minutes should it fail to come through.";
		   } else {
		   echo "A confirmational email has <b>failed</b> to have been dispatched.<br/>Please email <a href='mailto:Admin@empireevolution.uk.to'>Admin@empireevolution.uk.to</a> to let them know.<br/><br/>If you attempted to change to this password try use the <a href='http://empireevolution.uk.to/?Page=ResendConfirmation'>Resend Confirmation</a> function.";
		   }
	}
	function sendPasswordReminder($Email, $Password)
	{
		$subject = "Password Reminder";
		$message = "Below is your password for <a href='http://empireevolution.uk.to'>Empire Evolution</a>.<br><br>Password: ".$Password."<br><br>Regards,<br>Empire Evolution Team";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Empire Evolution <Accounts@empireevolution.uk.to>' . "\r\n";
		$headers .= 'Reply-To: Empire Evolution <Admin@empireevolution.uk.to>'."\r\n";
		$headers .= 'Return-Path: Empire Evolution <Accounts@empireevolution.uk.to>'."\r\n";
		if ( mail($Email,$subject,$message,$headers) ) {
		   echo "An email has been dispatched.<br/><br/>You cannot send another email for 15 minutes should it fail to come through.<br/><br/>You will not be able to continue any further using Empire Evolution until your email has been activated.";
		   } else {
		   echo "An email has <b>failed</b> to have been dispatched.<br/>Please email <a href='mailto:Admin@empireevolution.uk.to'>Admin@empireevolution.uk.to</a> to let them know.";
		   }
	}
?>