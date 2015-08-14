<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page_title." - "; ?> Sách |  UETPRO Bookstore - Không gian sách phát triển bản thân - Gặp gỡ để phát triển</title>

<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>admin/css/admin-style.css" media="screen, project" />
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>admin/css/slimpicker.css" media="screen, project" />
<script src="<?php echo SITE_URL;?>admin/js/mootools-1.2.4-core-yc.js" type="text/javascript"></script>
<script src="<?php echo SITE_URL;?>admin/js/mootools-1.2.4.4-more-yc.js" type="text/javascript"></script>
<script src="<?php echo SITE_URL;?>admin/js/slimpicker.js" type="text/javascript"></script>
<style>
a{
	color: #222;
	outline: 0;
	font-weight: bold;
	text-decoration: none;
}
a:hover{
	color: #bc2d01;
}
strong {
	font-weight:bold;
}
</style>
</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo">
			<a href="<?php echo SITE_URL; ?>admin/"><img src="../image/logo.jpg" /></a>
		</div><!-- End #logo -->
		<h1>Administrator</h1>			
		<div id="logout">
			<p>Chào <span><?php echo $_SESSION['_user']['username'];?></span></p>
			<a href="<?php echo SITE_URL; ?>admin/logout.php">Thoát</a>
		</div>
	</div><!-- End #header -->
	<div class="clearfix"></div>