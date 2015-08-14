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
- Kiểm tra xem người dùng đã đăng nhập chưa, rồi thì chuyển sang trang chủ,
tránh tính trạng tự vào lại trang login
*/
if(isset($_SESSION['_user'])) 
{
	redirect('admin/index.php');
}

/*
- Kiểm tra người dùng đã nhập username và password chưa? Nếu nhập đầy đủ mới xử lý
*/
if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '') 
{
	$username = $_POST['username'];
	$password = $_POST['password'];
    
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
        if($user['password'] === $password && $user['group_id'] == 1)
        {
            /*
            * Nếu hợp lệ thì tạo session lưu thông tin user và tạo cờ để kiểm tra đăng nhập ở các trang khác trong quản trị
            */
            $_SESSION['_user'] = $user;
     
            /*
            * Quay về trang chủ quản trị
            */
            redirect('admin/');
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

require_once 'template/login/login.tpl.php';

?>