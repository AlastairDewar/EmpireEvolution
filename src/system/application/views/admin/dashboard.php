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
      <li class="current_page_item"><?php echo anchor('admin/dashboard', 'Dashboard'); ?></li>
      <li><?php echo anchor('admin/news', 'News'); ?></li>
	  <li><?php echo anchor('admin/members', 'Members'); ?></li>
      <li><?php echo anchor('admin/buildings', 'Buildings'); ?></li>
	  <li><?php echo anchor('admin/research', 'Research'); ?></li>
    </ul>
    <p id="user_info">Logged in as {username}, <?php echo anchor('member/logout', 'Logout?'); ?></p>
  </div>
  <div id="content">
    <h1>Dashboard</h1>
    <p>Welcome {username} to the administrators main dashboard.</p>
    <div class="break"></div>
    <h1>Whats been going on?</h1>
	<p>Here's the best place to leave notes for other administrators.</p>
		<?php //echo validation_errors(); ?>
		<?php //echo form_open('admin/notes'); ?>
	<textarea cols="73" rows="15"></textarea>
	<input type="submit" name="save_notes" value="Save notes"/>
      <br class="clear" />
	  <p class="center"><strong>All</strong> actions are logged, backed up and reviewed regularly. All misconduct is duely noted.</p>
  </div>
      <div id="sidebar">
    <h2>Dashboard</h2>
    <p>Here are some related links you might be interested in:</p>
    <ul>
      <li><?php echo anchor('admin/view_logs/', 'View all logs'); ?></li>
      <li><?php echo anchor('admin/view_statistics/', 'View the statistics'); ?></li>
    </ul>
  </div>
      <br class="clear" />
  <div id="footer"> </div>
</div>
</body>
</html>
