<?php
/*
- Khởi động session
*/
session_start();

/*
- Require các file cần thiết
*/
require_once 'configs/db.php';
require_once 'configs/connectdb.php';
require_once 'configs/site.php';
require_once 'functions/common.php';

if($_POST)
{
	if(isset($_POST['detail']) && $_POST['detail'] != '')
	{
		$detail = $_POST['detail'];
	}
	
	if(isset($_POST['name']) && $_POST['name'] != '')
	{
		$name = $_POST['name'];
	}
	
	if(isset($_POST['email']) && $_POST['email'] != '')
	{
		$email = $_POST['email'];
	}

	if(isset($_POST['subject']) && $_POST['subject'] != '')
	{
		$subject = $_POST['subject'];
	}	
}

/*
- Gửi mail cho quản lý
*/
if(isset($name) && isset($subject) && isset($email) && isset($detail))
{
$to = "uetprobook@quanlybanhang-cnpm.herobo.com";
$message = $detail;
$from = $email;
$headers = $name . " - From:" . $from;
mail($to,$subject,$message,$headers);
}
/*
- Lưu tiêu đề
*/
$page_title = "Liên hệ";

/*
- Require các file giao diện
*/
require_once 'template/header.tpl.php';
require_once 'template/contact.tpl.php';
require_once 'template/footer.tpl.php';
?>