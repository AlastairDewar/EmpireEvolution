<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Empire Evolution</title>
<link href="<?=base_url()?>/css/admin.css" rel="stylesheet" type="text/css" media="all" /></head>
<body>
<div id="wrapper">
  <div id="header"> <img src="<?=base_url()?>images/logo_green.jpg" height="116" width="530" alt="Logo" />
    <ul id="navigation">
      <li class="current_page_item"> <a href="#">Dashboard</a> </li>
      <li><a href="#">News</a></li>
      <li><a href="#">Players</a></li>
      <li><a href="#">Buildings</a></li>
	  <li><a href="#">Research</a></li>
    </ul>
    <p id="user_info">Logged in as {username}, <?php echo anchor('member/logout', 'Logout?'); ?></p>
  </div>
<!--    <div id="sidebar">
    <h2>Sidebar of Useful Stuff</h2>
    <p>Here are some related links you might be interested in:</p>
    <ul>
      <li><a href="#">Link to something</a></li>
      <li><a href="#">Link to something</a></li>
      <li><a href="#">Link to something</a></li>
    </ul>
  </div>
  -->
  <div id="content">
    <h1>Dashboard</h1>
    <p>Welcome {username} to the admin dashboard.</p>
    <div class="break"></div>
    <h1>Whats been going on?</h1>
    <form action="" method="get">
      <table width="610px" border="0" cellspacing="0" cellpadding="0">
        <tr class="table_header">
          <th scope="col">Administrator Logs</th>
        </tr>
        <tr class="table_info">
          <td colspan="1"><strong>AdministratorUsername</strong> did some action or another.</td>
        </tr>
        <tr class="table_info">
          <td colspan="1"><strong>AdministratorUsername</strong> did some action or another.</td>
        </tr>
        <tr class="table_info">
          <td colspan="1"><strong>AdministratorUsername</strong> did some action or another.</td>
        </tr>
        <tr class="table_info">
          <td colspan="1"><strong>AdministratorUsername</strong> did some action or another.</td>
        </tr>
        <tr class="table_info">
          <td colspan="1"><strong>AdministratorUsername</strong> did some action or another.</td>
        </tr>		
      </table>
      <fieldset>
      <input type="submit" value="Action Ticked" class="submit right_button" />
      <input type="submit" value="Delete" class="submit right" />
      </fieldset>
    </form>
    <br class="clear" />
    <div class="break"></div>

  </div>
  <div id="footer">Page rendered in {elapsed_time} seconds</div>
</div>
</body>
</html>