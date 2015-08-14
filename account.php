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
require_once 'functions/user.php';

/*
- Kiểm tra đã đăng nhập hay chưa
*/
if(!isset($_SESSION['_user_']))
{
	redirect('login.php');
}

if($_POST)
{
	if(isset($_POST['fullname']) && $_POST['fullname'] != '')
	{
		$fullname = $_POST['fullname'];
	}
	
	if(isset($_POST['gender']) && $_POST['gender'] != '')
	{
		$gender = $_POST['gender'];
	}
	
	if(isset($_POST['user_id']) && $_POST['user_id'] != '')
	{
		$user_id = $_POST['user_id'];
	}
	
	//Lấy user theo username
	$user = get_user_by_id($user_id);
	
	//Update thông tin lên cơ sở dữ liệu
	$sql = "UPDATE user SET fullname = '" . $fullname . "', gender = " . $gender . " WHERE user_id = " . $user_id;
	$query = mysql_query($sql);
	
	$_SESSION['_user_']['fullname'] = $fullname;
	$_SESSION['_user_']['gender'] = $gender;
}

/*
- Lưu tiêu đề
*/
$page_title = "Thành viên";

/*
- Require các file giao diện
*/
require_once 'template/header.tpl.php';
require_once 'template/user/sidebar.tpl.php';
require_once 'template/user/account.tpl.php';
require_once 'template/footer.tpl.php';
?>