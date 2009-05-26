<html>
<head>
<title>Empire Evolution</title>
<link rel="stylesheet" href="<?=base_url()?>css/main.css" type="text/css" media="screen, projection" />
</head>
<body>
<div id="scroll">
<h1 id="title">Welcome to Empire Evolution!</h1>
<ul id="navigation">
<li><?php echo anchor('news', 'News'); ?></li>
<li><?php echo anchor('member/dashboard', 'Play'); ?></li>
<li><?php echo anchor('member/register', 'Register'); ?></li>
</ul>

		<?php foreach($article as $item):?>
			<?php echo $item['title'];?>
		<?php endforeach;?>	

<p id="extraInfo">Empire Evolution &copy; <a href="http://www.alastairdewar.co.uk/">Alastair Dewar</a> 2006 - 2008<br/>Page rendered in {elapsed_time} seconds.</p>
</div>
</body>
</html>
