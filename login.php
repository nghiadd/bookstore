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
	if(isset($_POST['username']) && $_POST['username'] != '')
	{
		$username = $_POST['username'];
	}
	
	if(isset($_POST['password']) && $_POST['password'] != '')
	{
		$password = $_POST['password'];
	}
	
	/*
    - Lấy user tương ứng với username người dùng nhập
    */
    $user = get_user_by_username($username);
 
    /*
    - Kiểm tra user có tồn tại?
    */
    if($user !== false)
	{
        /*
        * Kiểm tra mật khẩu nhập đúng hay không? (Mật khẩu được mã hóa MD5)
        */
        if($user['password'] === $password)
        {
            /*
            * Nếu hợp lệ thì tạo session lưu thông tin user và tạo cờ để kiểm tra đăng nhập ở các trang khác trong quản trị
            */
            $_SESSION['_user_'] = $user;
     
            /*
            * Quay về trang chủ quản trị
            */
            redirect();
        }
        else
        {
            /*
            * Có lỗi, bật cờ $is_error = true
            */
            $is_error = true;
        }
    }
    else
    {
        /*
        * Có lỗi, bật cờ $is_error = true
        */
        $is_error = true;
    }			
}

/*
- Lưu tiêu đề
*/
$page_title = "Thành viên";

/*
- Require các file giao diện
*/
require_once 'template/header.tpl.php';
require_once 'template/user/login.tpl.php';
require_once 'template/footer.tpl.php';
?>