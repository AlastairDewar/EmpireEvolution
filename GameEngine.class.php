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
class GameEngine {
      var $databaseServerConnection = null;
	  var $databaseConnection = null;
	  var $databaseUsername = "empireevolution";
	  var $databasePassword = "empev";
	  var $databaseHostname = "localhost";
	  var $databaseName = "empireevolution";
	  var $databaseQuery = null;
	  var $logging = true;
	  var $domainName = "alastairdewar.local";

      // Class constructor
      function GameEngine() {
		$this->createDatabaseConnection();
      }

		function createDatabaseConnection() {
		if($this->databaseServerConnection == null)
		{
			if($this->databaseUsername != null)
			{
				if($this->databasePassword != null)
				{
					if($this->databaseHostname == null)
					{str_replace("'", "", "$address"); 
						print('<div class="warning">Database username not set.'."\r\n".'Attempting to use default \'localhost\'.</div>');
						$this->databaseHostname="localhost";
					}
					
					$this->databaseServerConnection = @mysql_connect($this->databaseHostname, $this->databaseUsername, $this->databasePassword);
					if($this->databaseServerConnection === false){$this->error('Failure to connect to database server at \''.$this->databaseHostname.'\'.');}
					
					$this->databaseConnection = @mysql_select_db($this->databaseName, $this->databaseServerConnection);
					if($this->databaseConnection === false){$this->error('Failure to connect to database \''.$this->databaseName.'\'.');}
					
				}else{ $this->error();}			
			}else{$this->error('Database username not set.');}
		}else{$this->error('Database server connection already established.');}
	  }

	function error($message){
	#print('<div class="error">'.$message.'</div>');
	$message = str_replace("'", "\"", $message);
	print("\r\n".'<script type="text/javascript">jQuery.facebox(\''.$message.'\');</script>');
	print("\r\n</body>");
	print("\r\n</html>");
	exit;
	}
	  
	  function queryDatabase($databaseQuery){
		$this->databaseQuery = $databaseQuery;
		$this->databaseQuery = @mysql_query($this->databaseQuery /*, $this->databaseConnection*/ );
		if($this->databaseQuery === false){$this->error("Failure to conduct database query.");}
		return $this->databaseQuery;
	  }
	  
	  function killDatabaseConnection() {
		mysql_close($this->databaseServerConnection);
	  }

	  function log($logMessage){
		if($this->logging === true){
		$logfile = "./logs/".$this->userID.".log";
		$fh = @fopen($logfile, 'a+') or $this->error("Cannot open log file for writing.");
		@fwrite($fh, $logMessage."\r\n") or $this->error("Cannot write to log file.");
		fclose($fh) or $this->error("Cannot close log file after writing.");}
	  }
	  function loadLog($userID){
		if($this->logging === true){
		$logfile = "./logs/".$userID.".log";
		$fh = @fopen($logfile, "r") or $this->error("Cannot open log file for reading.");
		while(!feof($fh))
		  {$contents = $contents.fgets($fh). "\r\n";}
		fclose($fh) or $this->error("Cannot close log file after reading.");
		print(filesize($filename));
		echo "<div id=\"logs\" style=\"display:none;\">".$contents."</div>\r\n";}
	  }
	  
   }
?>
