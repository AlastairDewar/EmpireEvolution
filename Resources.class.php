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
class Resources extends Member {
      var $gold, $stone, $wood = 0;
      var $goldBankRate = 0, $stoneBankRate = 5, $woodBankRate = 8;
      var $goldCheatAmount = 10000, $stoneCheatAmount = 10000, $woodCheatAmount = 10000;
      var $userID = 0;

      // Class constructor
      function Resources($userID) {
		$this->userID = $userID;
		$this->loadResources();
      }

      function loadResources() {
		$this->getGold();
		$this->getStone();
		$this->getWood();
		$this->loadCheatDetection();
		$this->log('Resources::  '.$this->userID.' resources loaded');
      }

     function loadCheatDetection(){
		/*

		Ultimately needs more work, needs to check and see the most expensive building that the user can build. Also needs to check 			and see what the most expensive upgrade they can obtain is. Also need to check units.
		*/
		$this->goldCheatAmount = 10000000; $this->stoneCheatAmount = 10000000; $this->woodCheatAmount = 10000000;
		/*
		$this->goldCheatAmount = $this->databaseQuery("SELECT `GoldRequired` FROM Buildings ORDER BY `GoldRequired` DESC LIMIT 1;");
		$this->goldCheatAmount = mysql_fetch_row($this->goldCheatAmount);
		$this->goldCheatAmount = $this->goldCheatAmount[0];
		$this->stoneCheatAmount = $this->databaseQuery("SELECT `StoneRequired` FROM Buildings ORDER BY `GoldRequired` DESC LIMIT 1;");
		$this->stoneCheatAmount = mysql_fetch_row($this->stoneCheatAmount);
		$this->stoneCheatAmount = $this->stoneCheatAmount[0];
		$this->woodCheatAmount = $this->databaseQuery("SELECT `WoodRequired` FROM Buildings ORDER BY `GoldRequired` DESC LIMIT 1;");
		$this->woodCheatAmount = mysql_fetch_row($this->woodCheatAmount);
		$this->woodCheatAmount = $this->woodCheatAmount[0];
		$goldCheatAmount2 = $this->databaseQuery("SELECT `GoldRequired` FROM Upgrades ORDER BY `GoldRequired` DESC LIMIT 1;");
		$goldCheatAmount2 = mysql_fetch_row($goldCheatAmount2);
		if($goldCheatAmount2[0] > $this->goldCheatAmount){$this->goldCheatAmount = $goldCheatAmount2[0];}
		$stoneCheatAmount2 = $this->databaseQuery("SELECT `StoneRequired` FROM Upgrades ORDER BY `StoneRequired` DESC LIMIT 1;");
		$stoneCheatAmount2 = mysql_fetch_row($stoneCheatAmount2);
		if($stoneCheatAmount2[0] > $this->stoneCheatAmount){$this->stoneCheatAmount = $stoneCheatAmount2[0];}
		$woodCheatAmount2 = $this->databaseQuery("SELECT `WoodRequired` FROM Upgrades ORDER BY `WoodRequired` DESC LIMIT 1;");
		$woodCheatAmount2 = mysql_fetch_row($woodCheatAmount2);
		if($woodCheatAmount2[0] > $this->woodCheatAmount){$this->woodCheatAmount = $woodCheatAmount2[0];}
		*/
     }

     function getGold() {
		$this->gold = $this->queryDatabase("SELECT `Gold` FROM `Resources` WHERE `ID` = '".$this->userID."' LIMIT 1;");
		$this->gold = @mysql_fetch_row($this->gold);
		$this->gold = $this->gold['0'];
		// PERFORM		CHEAT		CHECKING
		return $this->gold;
      }

      function getStone() {
		$this->stone = $this->queryDatabase("SELECT `Stone` FROM `Resources` WHERE `ID` = '".$this->userID."' LIMIT 1;");
		$this->stone = @mysql_fetch_row($this->stone);
		$this->stone = $this->stone['0'];
		// PERFORM		CHEAT		CHECKING
		return $this->stone;
      }

      function getWood() {
	  	$this->wood = $this->queryDatabase("SELECT `Wood` FROM `Resources` WHERE `ID` = '".$this->userID."' LIMIT 1;");
		$this->wood = @mysql_fetch_row($this->wood);
		$this->wood = $this->wood['0'];
		// PERFORM		CHEAT		CHECKING
		return $this->wood;
      }

      function setGold($gold) {
		$this->queryDatabase("UPDATE `Resources` SET `Gold` = '".$gold."' WHERE `ID` = '".$this->userID."' LIMIT 1;");
		if($this->getGold() != $gold){
			print("<div id=\"error\">EmpireEvolution: Failure to conduct setGold query.</div>");
		}else{
			if($gold > $this->goldCheatAmount){print("<div class=\"userError\">We have detected cheating. If you have caused this error accidently please let us know the details, our email is <a href=\"Admin@empireevolution.com\">Admin@empireevolution.com</a></div>");}
			$this->gold = $gold;
			$this->log('Resources::  '.$this->userID.' Gold updated to '.$this->gold);	
		}
      }

      function setStone($stone) {
		$this->queryDatabase("UPDATE `Resources` SET `Stone` = '".$stone."' WHERE `ID` = '".$this->userID."' LIMIT 1;");
		if($this->getStone() != $stone){
			print("<div id=\"error\">EmpireEvolution: Failure to conduct setStone query.</div>");
		}else{
			if($stone > $this->stoneCheatAmount){print("<div class=\"userError\">We have detected cheating. If you have caused this error accidently please let us know the details, our email is <a href=\"Admin@empireevolution.com\">Admin@empireevolution.com</a></div>");}
			$this->stone = $stone;
			$this->log('Resources::  '.$this->userID.' Stone updated to '.$this->stone);
		}
      }

      function setWood($wood) {
		$this->queryDatabase("UPDATE `Resources` SET `Wood` = '".$wood."' WHERE `ID` = '".$this->userID."' LIMIT 1;");
		if($this->getWood() != $wood){
			print("<div id=\"error\">EmpireEvolution: Failure to conduct setWood query.</div>");
		}else{
			if($gold > $this->goldCheatAmount){print("<div class=\"userError\">We have detected cheating. If you have caused this error accidently please let us know, our email is <a href=\"Admin@empireevolution.com\">Admin@empireevolution.com</a></div>");}
			$this->wood = $wood;
			$this->log('Resources::  '.$this->userID.' Wood updated to '.$this->wood);
		}
      }

      function spendGold($amount) {
		if($this->gold < $amount) { print('<div class="userWarning">You do not have enough Gold to do that.'."\r\n".'Why not buy some more at your marketplace if you have one or assign more villagers as goldminers.</div>'); }
		$this->setGold(($this->gold - $amount));
      }

      function spendStone($amount) {
		if($this->stone < $amount) { print('<div class="userWarning">You do not have enough Stone to do that.'."\r\n".'Why not buy some more at your marketplace if you have one or assign more villagers as stonemasons.</div>'); }
		$this->setStone(($this->stone - $amount));
      }

      function spendWood($amount) {
		if($this->wood < $amount) { print('<div class="userWarning">You do not have enough Wood to do that.'."\r\n".'Why not buy some more at your marketplace if you have one or assign more villagers as lumberjacks.</div>'); }
		$this->setWood(($this->wood - $amount));
      }
   }
?>
