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
      <li class="current_page_item"><?php echo anchor('admin/news', 'News'); ?></li>
	  <li><?php echo anchor('admin/members', 'Members'); ?></li>
      <li><?php echo anchor('admin/buildings', 'Buildings'); ?></li>
	  <li><?php echo anchor('admin/research', 'Research'); ?></li>
    </ul>
    <p id="user_info">Logged in as {username}, <?php echo anchor('member/logout', 'Logout?'); ?></p>
  </div>
  <div id="content">
    <h1>News</h1>
	<p>An overview of each article with links to edit and delete each article</p>
    <div class="break"></div>
    <h1>What articles are there?</h1>
     <table width="610px" border="0" cellspacing="0" cellpadding="0">
        <tr class="table_header">
          <th scope="col">Title</th>
		  <th scope="col" width="18%">Author</th>
		  <th scope="col" width="55%">Date</th>
		  <th scope="col" width="10%">Published</th>
		  <?php if(isset($highlight) && strcasecmp($highlight,'edit') == 0){echo'<th scope="col"  width="10%" class="highlight">Edit</th>'."\r\n";}else{echo'<th scope="col" width="10%">Edit</th>';}?>
		  <?php if(isset($highlight) && strcasecmp($highlight,'delete') == 0){echo'<th scope="col"  width="10%" class="highlight">Delete</th>';}else{echo'<th scope="col" width="10%">Delete</th>';}?>
        </tr>
		<?php foreach($news_articles as $item):?>
				<tr>
				  <td colspan="1"><?php echo anchor('news/article/'.$item['uid'], $item['title']); ?></td>
				  <td colspan="1"><?php echo anchor('member/profile/'.$item['author'], $item['author']); ?></td>
				  <td colspan="1"><?php echo $item['date'];?></td>
				  <td colspan="1"><?php echo $item['published'] ?></td>
				  <td colspan="1"><?php echo $item['edit'] ?></td>
				  <td colspan="1"><?php echo $item['delete'] ?></td>
				</tr>
				<tr class="table_info">
				<td colspan="6"><div class="article" class="toggle"><?php echo $item['article'] ?></div></td>
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
      	<li><?php echo anchor('news/delete/', 'Delete an article'); ?></li>
    </ul>
	<p>Remember, there are links next to each article on the left hand side under the "<strong>Whats been going on?</strong>" section.</p>
  </div>
      <br class="clear" />
  <div id="footer"> </div>
</div>
</body>
</html>