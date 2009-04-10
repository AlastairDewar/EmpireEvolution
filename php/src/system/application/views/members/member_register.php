<html>
<head>
<title>Empire Evolution</title>
<link rel="stylesheet" href="<?=base_url()?>css/main.css" type="text/css" media="screen, projection" />
</head>
<body>
<h1>Welcome to Empire Evolution!</h1>
<p>This is where you register for Empire Evolution.</p>
<?php echo validation_errors(); ?>
<?php echo form_open('member/register'); ?>
<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<h5>Password</h5>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<h5>Password Confirm</h5>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<div><input type="submit" value="Submit" /></div>
</form>
<p><br />Page rendered in {elapsed_time} seconds</p>
</body>
</html>