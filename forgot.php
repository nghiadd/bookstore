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

if($_POST)
{
	if(isset($_POST['email']) && $_POST['email'] != '')
	{
		$email = $_POST['email'];
	}

	/*
    - Lấy user tương ứng với email người dùng nhập
    */
    $user = get_user_by_email($email);
 
    /*
    - Kiểm tra user có tồn tại?
    */
    if($user !== false)
	{
		/*
		- Gửi thông tin tài khoản cho khách hàng
		*/
		$to = $email;
		$subject = "Thông tin mật khẩu";
$message = "
Chào bạn.
 
Xin chào " . $user['fullname'] . "!

Đây là thông tin tài khoản của bạn.

- Tên đăng nhập: " . $user['username'] . "

- Mật khẩu: " . $user['password'] . "

Chào trân trọng!
";
		$from = "uetprobook@quanlybanhang-cnpm.herobo.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		
		/*
		- Lưu tiêu đề
		*/
		$page_title = "Thành viên";
		
		/*
		- Require các file giao diện
		*/
		require_once 'template/header.tpl.php';
		require_once 'template/user/getpass.tpl.php';
		require_once 'template/footer.tpl.php';
    }
    else
    {
        /*
        * Có lỗi, bật cờ $is_error = true
        */
        $is_error = true;
		
		/*
		- Lưu tiêu đề
		*/
		$page_title = "Thành viên";		
		
		/*
		- Require các file giao diện
		*/
		require_once 'template/header.tpl.php';
		require_once 'template/user/forgot.tpl.php';
		require_once 'template/footer.tpl.php';		
    }			
}
else
{
/*
- Lưu tiêu đề
*/
$page_title = "Thành viên";

/*
- Require các file giao diện
*/
require_once 'template/header.tpl.php';
require_once 'template/user/forgot.tpl.php';
require_once 'template/footer.tpl.php';
}
?>