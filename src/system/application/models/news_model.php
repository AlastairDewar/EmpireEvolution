<?php
class News_model extends Model
{
  function News_model()
  {
    parent::Model();
  }
  
  function log($event)
  {
  	$sql = 'INSERT INTO news_logs (player_uid, date, event) VALUES ('.$this->Member_model->get_uid().', '.time().', '.$this->db->escape($event).');';
	$this->db->query($sql);
  }
  
  function add()
  {
  	$title = $this->input->post('title');
	$article = $this->input->post('article');
	$published = $this->input->post('publish');
	if(isset($published) && $published == "accept"){$published = 1;}else{$published = 0;}
	$sql = 'INSERT INTO news_articles (player_uid, date, title, article, published) VALUES ('.$this->Member_model->get_uid().', '.time().', '.$this->db->escape($title).', '.$this->db->escape($article).', '.$published.');';
	$this->db->query($sql);
	$this->log('added a new news article entitled '.$title);
  }
  
  function get_all_articles()
  {
		$articles = array();
		$query = $this->db->query('SELECT * FROM `news_articles` ORDER BY uid  DESC;');
		foreach ($query->result_array() as $row){
		array_push($articles, $row);}
		foreach ($articles as &$news_article) {
		$user_uid = $news_article['player_uid'];
		$username = $this->Member_model->get_username($user_uid);
		$news_article['author'] = $username;
		$news_article['date'] = date('l jS \of F Y h:i A',$news_article['date']);
		if($news_article['published'] == 1){$news_article['published'] = '<img src="'.base_url().'images/flag_green.png" alt="Published" width="16px" height="16px"/>';$news_article['published'] = anchor('news/unpublish/', $news_article['published']);}
			else{$news_article['published'] = '<img src="'.base_url().'images/flag_red.png" alt="Unpublished" width="16px" height="16px"/>';$news_article['published'] = anchor('news/publish/', $news_article['published']);}
		}
		return $articles;
  }
  
  function get_logs($numOfRecords = 5)
  {
	$logs = array();
	$query = $this->db->query('SELECT * FROM `news_logs` ORDER BY uid  DESC;');
	if($query->num_rows() < $numOfRecords){$numOfRecords = $query->num_rows();}
	for ( $x = 0; $x <= ($numOfRecords-1); $x += 1) {
		$query = $this->db->query('SELECT * FROM `news_logs` ORDER BY uid  DESC LIMIT '.$x.',1;');
		$row = $query->row_array();
		$currentLog = array();
		$currentLog['event'] = $row['player_uid'].'#'.$row['event'];
		$currentLog['date'] = $row['date'];
		$currentLog['flagged'] = $row['flagged'];
		array_push($logs,$currentLog);}
		foreach ($logs as &$log) {
			$user_uid = substr($log['event'],0,strpos($log['event'], '#'));
			$message = substr($log['event'],strpos($log['event'],'#')+1);
		$username = $this->Member_model->get_username($user_uid);
		$log['event'] = '<strong>'.$username.'</strong> '.$message;
		$log['date'] = date('l jS \of F Y h:i A', $log['date']);
			if($log['flagged'] == 1){$log['flagged'] = '<img src="'.base_url().'images/flag_red.png" alt="Reported" width="16px" height="16px"/>';}else{$log['flagged'] = null;}
		}
	return $logs;
  }
  
}
?>