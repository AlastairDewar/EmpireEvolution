<html>
<head>
<title>Empire Evolution</title>
<link rel="stylesheet" href="<?=base_url()?>css/main.css" type="text/css" media="screen, projection" />
</head>
<body>
<h1>Empire Evolution</h1>
<p>This is where you log into Empire Evolution.</p>
<?php echo validation_errors(); ?>
<?php echo form_open('member/login'); ?>
<?php echo $this->session->userdata('logged_in'); ?>
<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<h5>Password</h5>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<div><input type="submit" value="Submit" /></div>
</form>
<p>Page rendered in {elapsed_time} seconds</p>
</body>
</html>
