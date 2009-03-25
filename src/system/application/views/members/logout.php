<html>
<head>
<title>Empire Evolution</title>
<link rel="stylesheet" href="<?=base_url()?>css/main.css" type="text/css" media="screen, projection" />
</head>
<body>
<h1>Empire Evolution</h1>
<p>This is where you log out of Empire Evolution.</p>
<p class="info">You should always logout using this page in order to ensure maximum security of your account.</p>
<?php echo validation_errors(); ?>
<?php $hidden = array('uid' => $this->session->userdata('uid')); echo form_open('member/logout', '', $hidden); ?>
<input type="submit" value="Submit" />
</form>
<h6>Page rendered in {elapsed_time} seconds</h6>
</body>
</html>
