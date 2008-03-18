<?PHP

				$Database = mysql_connect('alastairdewar.co.uk','adewar','0a4h0d62f4h1d0!!') or die(error('MySQL server down.'));
				$Database = mysql_select_db('adewar_EmpireEvolution',$Database) or die(error('Database Corrupted.'));

if(isset($_GET[Page])){
	if($_GET[Page] != null){
		if(!is_numeric($_GET[Page])){
	if($_GET[Type] != null){
		if(!is_numeric($_GET[Type])){
									$Page = strtolower($_GET[Page]);
									$Type = strtolower($_GET[Type]);
									if(strcmp($Type,'friend') == 0){
									if(strcmp($Page,'add') == 0){Include("../pages/AddFriend.ws");}else{
									if(strcmp($Page,'view') == 0){Include("../pages/ViewFriends.ws");}else{
									if(strcmp($Page,'remove') == 0){Include("../pages/RemoveFriend.ws");}else{
									die(error('404 - Page Not Found'));}}}}
									else{
									if(strcmp($Type,'block' )== 0){
									if(strcmp($Page,'add') == 0){Include("../pages/AddBlock.ws");}else{
									if(strcmp($Page,'view') == 0){Include("../pages/ViewBlocked.ws");}else{
									if(strcmp($Page,'remove') == 0){Include("../pages/RemoveBlock.ws");}else{
									die(error('404 - Page Not Found'));}}
									}}else{die(error('404 - Page Not Found'));}}
		}else{die(error('Type value is numeric.'));}
	}else{die(error('Type value is\'nt set.'));}
		}else{die(error('Page value is numeric.'));}
	}else{die(error('Page value is\'nt set.'));}
}else{Require("../pages/Buddylist.ws");}

?>