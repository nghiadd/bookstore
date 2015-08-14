<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page_title; ?> |  UETPRO Bookstore - Không gian sách Quản trị kinh doanh - Gặp gỡ để phát triển</title>

<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/style.css" media="screen, project" />
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/register-form.css" media="screen, project" />
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/login-form.css" media="screen, project" />
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/cart.css" media="screen, project" />
<link rel="stylesheet" href="<?php echo SITE_URL; ?>css/slimpicker.css" media="screen, projection" />
<script src="<?php echo SITE_URL; ?>js/mootools-1.2.4-core-yc.js"></script>
<script src="<?php echo SITE_URL; ?>js/mootools-1.2.4.4-more-yc.js"></script>
<script src="<?php echo SITE_URL; ?>js/slimpicker.js"></script>
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
<script language="javascript" src="<?php echo SITE_URL;?>template/ckeditor/ckeditor.js" type="text/javascript"></script>
</style>
</head>
<body>
	<div id="container">
		<!-- HEADER -->
		<div id="header">
			<div id="logo">
				<img src="<?php echo SITE_URL; ?>image/logo.jpg" />
			</div><!-- End #logo -->
			
			<div id="signin-register">
				<ul>
					<li><a href="
					<?php 
					if(isset($_SESSION['_user_'])) echo SITE_URL."account.php";
					else echo SITE_URL."login.php";
					?>" >
					<?php
					if(isset($_SESSION['_user_'])) echo "Chào <span id=\""."login_name\">".$_SESSION['_user_']['username']."</span>";
					else echo "Đăng nhập";
					?>
					</a></li>
					<li><a href="
					<?php 
					if(isset($_SESSION['_user_'])) echo SITE_URL."logout.php";
					else echo SITE_URL."register.php";
					?>" >
					<?php 
					if(isset($_SESSION['_user_'])) echo "Thoát";
					else echo "Đăng ký";
					?></a></li>
				</ul>
				<p><a class="account" href="">Thông tin tài khoản</a></p>
			</div><!-- End #signin_register -->
			<div class="clearfix"></div>
			<div id="navigation">
				<ul>
					<li><a href="<?php echo SITE_URL; ?>"><span>Sách</span></a></li>
					<li><a href="<?php echo SITE_URL; ?>booklist.php"><span>Danh mục</span></a></li>
					<li><a href="<?php echo SITE_URL; ?>about.php"><span>Giới thiệu</span></a></li>
					<li><a href="<?php echo SITE_URL; ?>contact.php"><span>Liên hệ</span></a></li>
				</ul>
			</div><!-- End #navigation -->
			<div class="clearfix"></div>
			<div id="support-top">
				<div id="search-form">
					<p>Tìm kiếm</p>
					<form action="" method="get">
						<input type="text" value="" id="search-field" />
						<input type="submit" value="Tìm" id="button" />
					</form>
				</div><!-- End #search-form -->

				<div id="shopping">
					<p class="cart"><a href="<?php echo SITE_URL; ?>cart/showcart.php">Giỏ hàng</a><?php if(isset($_SESSION['cart'])) echo "(" . count($_SESSION['cart']) . ")"; else {echo "<a href=\"". SITE_URL . "cart/showcart.php" . "\"><img src=\"" . SITE_URL . "image/cart.png\" /></a>"; }?></p>
					<p class="header-payment"><a href="<?php echo SITE_URL; ?>cart/payment.php">Thanh toán</a></p>
				</div><!-- End #shopping -->
			</div><!-- End #support-top -->
		</div><!-- End #header -->
		<div class="clearfix"></div>