<?php
class Research_model extends Model
{
  function Research_model()
  {
    parent::Model();
  }
  
 function get_logs($numOfRecords = 5)
  {
	$logs = array();
	$query = $this->db->query('SELECT * FROM `research_logs` ORDER BY uid  DESC;');
	if($query->num_rows() < $numOfRecords){$numOfRecords = $query->num_rows();}
	for ( $x = 0; $x <= ($numOfRecords-1); $x += 1) {
		$query = $this->db->query('SELECT * FROM `research_logs` ORDER BY uid  DESC LIMIT '.$x.',1;');
		$row = $query->row_array();
		$currentLog = array();
		$currentLog['event'] = $row['player_uid'].'#'.$row['event'];
		$currentLog['date'] = $row['date'];
		$currentLog['flagged'] = $row['flagged'];
		array_push($logs,$currentLog);}
		foreach ($logs as &$log) {
			$user_uid = substr($log['event'],0,strpos($log['event'], '#'));
			$message = substr($log['event'],strpos($log['event'],'#')+1);
		$username = $this->get_username($user_uid);
		$log['event'] = '<strong>'.$username.'</strong> '.$message;
		}
	return $logs;
  }
}
?>