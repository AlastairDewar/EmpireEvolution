<?php
class Member_model extends Model
{
  function Member_model()
  {
	parent::Model();
  }

  function logged_in()
  {
	// TODO Check for account being confirmed
	if($this->session->userdata('logged_in') == 1)
	{
		return TRUE;
	}
 }

   function get_uid()
   {
		if($this->logged_in())
		{
			return $this->session->userdata('uid');
		}
   }
 
   function update_activity()
   {
		if($this->logged_in()){
			$this->db->query("UPDATE `player` SET `activity` = '".time()."' WHERE `uid` = '".$this->get_uid()."' LIMIT 1;");}
   }
 
  function get_username($uid = null)
 {
	if($uid == null && $this->logged_in()){$uid = $this->get_uid();}
	if($uid != null){
		$query = $this->db->query('SELECT `username` FROM `player` WHERE uid = "'.$uid.'" LIMIT 1;');
		$row = $query->row_array();
		return $row['username'];}
 }
 
  function valid_login($uid, $password)
  {
	$query = $this->db->query('SELECT * FROM `player` WHERE `uid` = \''.$uid.'\' AND `password` = \''.($password).'\' LIMIT 1;');
	if ($query->num_rows() == 1){return TRUE;}else{
	return FALSE;}
  }

  function is_administrator()
  {
	$query = $this->db->query('SELECT * FROM `player` WHERE `uid` = '.$this->get_uid().' LIMIT 1;');
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
	$sql = "INSERT INTO player (username, password, email, join_date) VALUES (".trim($this->db->escape($username)).", '".md5($password)."', '".$emailaddress."', '".time()."');";
	$this->db->query($sql);
  }

  function unique_username($username){
	$query = $this->db->query('SELECT * FROM `player` WHERE `username` = "'.$username.'" LIMIT 1;');
	if ($query->num_rows() > 0){return FALSE;}else{
	return TRUE;}
  }  

  function unique_email($email){
	$query = $this->db->query('SELECT * FROM `player` WHERE `email` = "'.$email.'" LIMIT 1;');
	if ($query->num_rows() > 0){return FALSE;}else{
	return TRUE;}
  }

  function get_uid_from_username($username){
	$query = $this->db->query('SELECT `uid` FROM `player` WHERE `username` = "'.$username.'" LIMIT 1;');
	$row = $query->row_array();
	return $row['uid'];
  }

  function confirm($code)
  {
    $uid = substr($code,9);
  	$sql = "DELETE FROM `player` WHERE `player_uid` = '".$uid."' AND `code` = '".$code."');";
	$this->db->query($sql);
	$this->load->view('member_confirmation_success');
  }
  
  function last_login($uid = null)
  {
	if($this->logged_in())
	{
		if($uid == null){$uid = $this->get_uid();}
		$query = $this->db->query('SELECT `activity` FROM `player` WHERE `uid` = "'.$uid.'" LIMIT 1;');
		$row = $query->row_array();
		return $row['activity'];
	}
  }
  
  function generate_confirmation($uid, $initConfirm = TRUE){
	$code = substr(md5($uid.date('l jS \of F Y h:i:s A')."deDu85ct"),0,8);
	$code = $code.$uid;
	$sql = "INSERT INTO confirmation (player_uid, code) VALUES (".$this->db->escape($uid).", '".$code."');";
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
