<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Empire Evolution - Administration</title>
<link href="<?=base_url()?>/css/admin.css" rel="stylesheet" type="text/css" media="all" /></head>
<body>
<div id="wrapper">
  <div id="header"> <img src="<?=base_url()?>images/admin/logo_green.jpg" height="116" width="530" alt="Logo" />
    <ul id="navigation">
      	<li><?php echo anchor('admin/dashboard', 'Dashboard'); ?></li>
      	<li class="current_page_item"><?php echo anchor('admin/news', 'News'); ?></li>
	<li><?php echo anchor('admin/members', 'Members'); ?></li>
      	<li><?php echo anchor('admin/buildings', 'Buildings'); ?></li>
	<li><?php echo anchor('admin/research', 'Research'); ?></li>
    </ul>
    <p id="user_info">Logged in as {username}, <?php echo anchor('member/logout', 'Logout?'); ?></p>
  </div>
  <div id="content">
    <h1>News Dashboard</h1>
    <p>Welcome {username} to the administrators news dashboard.</p>
    <div class="break"></div>
    <h1>Whats been going on? <?php echo anchor('feed/admin_news', '<img src="'.base_url().'images/rss.png" alt="RSS Feed" width="16px" height="16px"/>');?></h1>
     <table width="610px" border="0" cellspacing="0" cellpadding="0">
        <tr class="table_header">
          <th scope="col">Event</th>
		   <th scope="col" width="32%">Date</th>
		  <th scope="col" width="10%">Reported</th>
        </tr>
		<?php foreach($news_logs as $item):?>
				<tr class="table_info">
				  <td colspan="1"><?php echo $item['event'];?></td>
				  <td colspan="1"><?php echo $item['date'];?></td>
				  <td colspan="1"><?php echo $item['flagged'];?></td>
				</tr>
		<?php endforeach;?>	
      </table>
      <br class="clear" />		  
	  <p class="center"><strong>Do not</strong> use this as a messaging board.</p>
  </div>
    <div id="sidebar">
    <h2>News</h2>
    <p>Here are some related links you might be interested in:</p>
    <ul>
      	<li><?php echo anchor('news/overview/', 'View all articles'); ?></li>
	<li><?php echo anchor('news/add/', 'Add a new article'); ?></li>
      	<li><?php echo anchor('news/edit/', 'Edit an article'); ?></li>
	<li><?php echo anchor('news/publication/', 'Publish or unpublish an article'); ?></li>
      	<li><?php echo anchor('news/delete/', 'Delete an article'); ?></li>
	<li><?php echo anchor('news/tweet/', 'Tweet about something'); ?></li>
    </ul>
	<p>Remember, there are links next to each article on the left hand side under the "<strong>Whats been going on?</strong>" section.</p>
  </div>
      <br class="clear" />
  <div id="footer"> </div>
</div>
</body>
</html>
