<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Empire Evolution - Administration</title>
<link href="<?=base_url()?>/css/admin.css" rel="stylesheet" type="text/css" media="all" />
</head>
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
    <h1>News</h1>
    <div class="break"></div>
    <h1>Your tweet has been successffully sent!</h1>
		<p>Your tweet has been published on the <a href="http://www.twitter.com/Empev">official Empire Evolution twitter account</a>.</p>
      <br class="clear" />		  
  </div>
    <div id="sidebar">
    <h2>News</h2>
    <p>Here are some related links you might be interested in:</p>
    <ul>
      	<li><?php echo anchor('news/overview/', 'View all articles'); ?></li>
	<li><?php echo anchor('news/add_article/', 'Add a new article'); ?></li>
      	<li><?php echo anchor('news/edit_article/', 'Edit an article'); ?></li>
	<li><?php echo anchor('news/edit_article_publiciation/', 'Publish/unpublish an article'); ?></li>
      	<li><?php echo anchor('news/delete_article/', 'Delete an article'); ?></li>
	<li><?php echo anchor('news/tweet/', 'Tweet about something'); ?></li>
    </ul>
	<p>Remember, there are links next to each article on the left hand side under the "<strong>Whats been going on?</strong>" section.</p>
  </div>
      <br class="clear" />
  <div id="footer"> </div>
</div>
</body>
</html>