<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Empire Evolution - Administration</title>
<link href="<?=base_url()?>/css/admin.css" rel="stylesheet" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>  
	<script type="text/javascript">
		// this tells jquery to run the function below once the DOM is ready
		$(document).ready(function() {
		// choose text for the show/hide link
		var showText="Show";
		var hideText="Hide";
		// append show/hide links to the element directly preceding the element with a class of "toggle"
		$(".toggle").prev().append('(<a href="#" class="toggleLink">'+showText+'</a>)');
		// hide all of the elements with a class of 'toggle'
		$('.toggle').hide();
		// capture clicks on the toggle links
		$('a.toggleLink').click(function() {
		// change the link text depending on whether the element is shown or hidden
		if ($(this).text()==showText) {
		$(this).text(hideText);
		}
		else {
		$(this).text(showText);
		}
		// toggle the display
		$(this).parent().next('.toggle').toggle();
		// return false so any link destination is not followed
		return false;
		});
		});
	</script>
</head>
<body>
<div id="wrapper">
  <div id="header"> <img src="<?=base_url()?>images/admin/logo_green.jpg" height="116" width="530" alt="Logo" />
    <ul id="navigation">
      <li><?php echo anchor('admin/dashboard', 'Dashboard'); ?></li>
      <li><?php echo anchor('admin/news', 'News'); ?></li>
	  <li class="current_page_item"><?php echo anchor('admin/members', 'Members'); ?></li>
      <li><?php echo anchor('admin/buildings', 'Buildings'); ?></li>
	  <li><?php echo anchor('admin/research', 'Research'); ?></li>
    </ul>
    <p id="user_info">Logged in as {username}, <?php echo anchor('member/logout', 'Logout?'); ?></p>
  </div>
  <div id="content">
    <h1>Members</h1>
    <p>An overview of each article with links to edit and delete each article</p>
    <div class="break"></div>
    <h1>What members are there?</h1>
     <table width="610px" border="0" cellspacing="0" cellpadding="0">
        <tr class="table_header">
        <th scope="col" width="12%">User UID</th>
	<th scope="col" width="15%">Username</th>
	<th scope="col" width="8%">Rights</th>
	<th scope="col">Extras</th>
	<th scope="col" width="8%">Edit</th>
	<th scope="col" width="8%">Delete</th>
        </tr>
		<?php foreach($members as $item):?>
				<tr>
				<td colspan="1"><?php echo anchor('admin/member/edit/'.$item['uid'], $item['uid']); ?></td>
				<td colspan="1"><?php echo anchor('member/profile/'.$item['username'], $item['username']); ?></td>
			  	<td colspan="1"><?php echo $item['rights'] ?></td>
				<td colspan="1"><?php echo $item['extra'] ?></td>
				<td colspan="1"><?php echo $item['edit'] ?></td>
				<td colspan="1"><?php echo $item['delete'] ?></td>
				</tr>
		<?php endforeach;?>	
      </table>
      <br class="clear" />		  
	  <p class="center">Pagination goes here</p>
  </div>
    <div id="sidebar">
    <h2>News</h2>
    <p>Here are some related links you might be interested in:</p>
    <ul>
      	<li><?php echo anchor('member/overview/', 'View all members'); ?></li>
	<li><?php echo anchor('member/add_member/', 'Add a new member'); ?></li>
      	<li><?php echo anchor('member/edit_account/', 'Edit an account'); ?></li>
      	<li><?php echo anchor('member/delete_account/', 'Delete an account'); ?></li>
    </ul>
	<p>Remember, there are links next to each article on the left hand side under the "<strong>What articles are there?</strong>" section.</p>
  </div>
      <br class="clear" />
  <div id="footer"> </div>
</div>
</body>
</html>
