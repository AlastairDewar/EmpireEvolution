<?php
class Member_model extends Model
{
  function Member_model()
  {
    parent::Model();
  }

  function valid_login($uid, $password)
  {
	$query = $this->db->query('SELECT * FROM `player` WHERE `uid` = '.$uid.' AND `password` = "'.($password).'" LIMIT 1;');
	if ($query->num_rows() == 1){return TRUE;}else{
	return FALSE;}
  }

  function is_administrator()
  {
	$query = $this->db->query('SELECT * FROM `player` WHERE `uid` = '.$uid.' LIMIT 1;');
	$row = $query->row_array();
	if($row['rights'] == 2)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
  }

  function add_member()
  {
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$emailaddress = $this->input->post('email');
	$sql = "INSERT INTO player (username, password, email) VALUES (".trim($this->db->escape($username)).", '".md5($password)."', '".$emailaddress."');";
	$this->db->query($sql);
  }

  function unique_username($username){
	$query = $this->db->query('SELECT * FROM `player` WHERE username = "'.$username.'" LIMIT 1;');
	if ($query->num_rows() > 0){return FALSE;}else{
	return TRUE;}
  }  

  function unique_email($email){
	$query = $this->db->query('SELECT * FROM player WHERE email = "'.$email.'" LIMIT 1;');
	if ($query->num_rows() > 0){return FALSE;}else{
	return TRUE;}
  }

  function get_uid_from_username($username){
	$query = $this->db->query('SELECT ID FROM player WHERE username = "'.$username.'" LIMIT 1;');
	$row = $query->row_array();
	return $row['ID'];
  }

  function generate_confirmation($uid){
	$code = substr(md5($uid.date('l jS \of F Y h:i:s A')."deDu85ct"),0,8);
	$sql = "INSERT INTO confirmation (player_uid, code) VALUES (".$this->db->escape($uid).", ".$code.");";
	$this->db->query($sql);
	return $code;
  }

  function list_members()
  {
    	$query = $this->db->query("SELECT * FROM player");
    	return $query;
  }

  function list_banned_members()
  {
    $query = $this->db->query("SELECT * FROM player WHERE rights = '-1'");
    return $query;
  }
}
?>

