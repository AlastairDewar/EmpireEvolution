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
    GNU General Public License for more details.volution

    You should have received a copy of the GNU General Public License
    along with Empire Evolution.  If not, see <http://www.gnu.org/licenses/>.
*/
class Member extends GameEngine {
	var $userID = 0;
	var $invalidUsername = "Unknown";

      // Class constructor
      function Member($userIdentification) {
		$this->userID = $userIdentification;
		$this->loadMemberDetails();
      }

      function loadMemberDetails() {
		$this->getUsername();
		$this->log('Member::  '.$this->userID.' loaded');      }

      function register() {
		// REQUEST	USERNAME,	PASSWORD,	EMAIL
		// PERFORM	FORMATING	CHECKS		ON		ABOVE
		// PERFORM	AVAILABILITY	CHECKS
		// REGISTER
		$this->confirmationEmail(0);
		$this->log('Member::  '.$this->userID.' registered');
      }
	  
      function getUsername() {
		$this->username = $this->queryDatabase("SELECT `Username` FROM `Members` WHERE `ID` = '".$this->userID."' LIMIT 1;");
		// PERFORM	USERNAME	FORMATING
		return $this->username;
	  }
      }

      function getPassword() {
		$loadPassword = $this->queryDatabase("SELECT `Password` FROM `Members` WHERE `ID` = '".$this->userID."' LIMIT 1;");
		return $loadPassword;
      }
	  
      function getHomeName() {
		$loadHomeName = $this->queryDatabase("SELECT `Name` FROM `Locations` WHERE `ID` = '".$this->userID."' LIMIT 1;");
		return $loadHomeName;
      }
	  
      function getEmail() {
		$loadEmail = $this->queryDatabase("SELECT `Email` FROM `Members` WHERE `ID` = '".$this->userID."' LIMIT 1;");
		return $loadEmail;
      }

      function setUsername($newUsername) {
		// PERFORM	USERNAME	CHECKS		HERE
		// CHECK	AGAINST		FILTER
		$this->queryDatabase("UPDATE `Members` SET Username = '".$newUsername."' WHERE `ID` = '".$this->userID."'");
         	$this->username = $newUsername;
		$this->log('Member::  '.$this->userID.' updated Username to '.$this->username);
      }

      function setEmail($newEmail) {
		// PERFORM	EMAIL		CHECKS		HERE
		$this->queryDatabase("UPDATE `Members` SET Email = '".$newEmail."' WHERE `ID` = '".$this->userID."'");
		$this->confirmationEmail(2);
		$this->log('Member::  '.$this->userID.' updated Email to '.$newEmail);
      }

      function setHomeName($newHomeName) {
		// PERFORM	HOMENAME	CHECKS		HERE
		// CHECK	AGAINST		FILTER
		$this->queryDatabase("UPDATE `Locations` SET Name = '".$newHomeName."' WHERE `ID` = '".$this->userID."'");
		$this->log('Member::  '.$this->userID.' updated HomeName to '.$newHomeName);
      }
	  
      function setPassword($newPassword) {
		// PERFORM	PASSWORD	CHECKS		HERE
		// PERFORM	PASSWORD	ENCRYPTION	HERE
		// LOG		PROPERLY	(IP etc)
		$this->email("<h1>Empire Evolution</h1><p>Dear ".$this->getUsername().",\r\nThank you for changing your password. Passwords should be updated frequently in order to increase an account's level of security.</p><p>If you yourself didn\'t change your password please let an administrator know as soon as possible to try and rectify this issue. Administrators can be contacted via email at <a href=\"mailto:Admin@empireevolution.com\">Admin@empireevolution.com</a>.</p>","Password Change");
		$this->queryDatabase("UPDATE `Members` SET Password = '".$encryptedPassword."' WHERE `ID` = '".$this->userID."'");
		$this->log('Member::  '.$this->userID.' updated Password');
	  }

	function validateUsername($invalidUsername) {
		$validCharacters = array();
		if(strlen($invalidUsername) >= 3){
			if(strlen($invalidUsername) <= 12){
				$invalidUsername = str_replace("-"," ",$invalidUsername);
				$invalidUsername = str_replace("_"," ",$invalidUsername);
				$ValidUsername = array ("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9"," ");
					$j = strlen($invalidUsername);
					for ($k = 0; $k < $j; $k++) {
					$char = substr($invalidUsername, $k, 1);
						$j2 = count($ValidUsername);
						for ($k2 = 0; $k2 < $j2; $k2++) {
						if(substr($char,$ValidUsername[$k2]) ==0)
						{$Matched++;break;}
						}
					}	
					if($j === $Matched){
					return true;
					}else{$this->error('Username contains invalid characters. Characters a through z and numbers 0 through 9 are acceptable. Usernames are not case sensative. All hyphens or underscores will be replaced with a space, however this is merely coosmetic and usernames with an underscore or hyphen can be used in the same manner as all other usernames without trouble.');return false;}
			}else{
			$this->error('Username is too long. Usernames must be less than or equal to 12 charcters');return false;}
		}else{
		$this->error('Username is too short. Usernames must be greater than or equal to 3 charcters');return false;}
	}

	  function confirmationEmail($confirmationType = 0){
		switch ($confirmationType) {
			case 0:
			    $reason = "registering";
			    break;
			case 1:
			    $reason = "requesting a new confirmation code";
			    $extra = "<p>You have a total of 14 days before your account will be terminated. Once an account has been terminated it cannot be restored and you must create a new one.</p>";
			    break;
			case 2:
			    $reason = "updating your email address";
			    break;
			default:
			    $reason = "requesting a new confirmation code";
			    $extra = "<p>You have a total of 14 days before your account will be terminated. Once an account has been terminated it cannot be restored and you must create a new one.</p>";
			    break;
			}
		$code = substr(md5("#Empev#".$this->userID), 0, 8);
		$this->email("<h1>Empire Evolution</h1><p>Dear ".$this->getUsername().",\r\nThank you for ".$reason.". We request that you verify your email for several reasons, such as checking sure your not a robot, to enhance your accounts security and to make sure we can keep in touch <img src=\"http://www.empireevolution.com/images/happy.gif\"/>.</p><p>Your confirmation code is <b>".$code."</b>.</p><p>Please visit <a href=\"http://www.empireevolution.com/confirm/".$code."\">http://www.empireevolution.com/confirm/".$code."</a> in order to activate your account, alternatively you could enter the code at <a href=\"http://www.empireevolution.com/confirm/\">http://www.empireevolution.com/confirm/</a>.</p><p>If you yourself didn\'t change your email please let an administrator know as soon as possible to try and rectify this issue. Administrators can be contacted via email at <a href=\"mailto:Admin@empireevolution.com\">Admin@empireevolution.com</a>.</p>","Confirmation Code");
		$this->queryDatabase("UPDATE `Confirmations` SET `Code` = '".$code."' AND `Date` = '".date()."' WHERE `ID` = '".$this->userID."'");
		$this->log('Member::  '.$this->userID.' updated Password');
	  }

	  function email($message, $head){
		$subject = 'Empire Evolution :: '.$head;
		$message = "<html><head><title>Empire Evolution :: ".$head."</title></head><body>".$message."</body>";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";$this->confirmationEmail(2);
		// Additional headers
		$headers .= 'To: '.$this->getUsername().' <'.$this->getEmail().'>' . "\r\n";
		$headers .= 'From: Empire Evolution <noreply@empireevolution.com>' . "\r\n";
		// Mail it
		mail($this->getEmail(), $subject, $message, $headers);
	  }


?>
