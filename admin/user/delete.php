<?php
/*
- Khởi động session
*/
session_start();

/*
- Require các file cần thiết
*/
require_once '../configs/db.php';
require_once '../configs/connectdb.php';
require_once '../configs/site.php';
require_once '../functions/common.php';
require_once '../functions/user.php';

/*
* Kiểm tra dã đăng nhập chưa?
*/
check_login();


/*
* Lấy user id từ URL và gọi hàm user_delete_by_user_id để xóa người dùng
*/
if(isset($_GET['user_id']))
{
    $user_id = $_GET['user_id'];
    user_delete_by_user_id($user_id);
}
else
{
	redirect('admin/user/list.php');
}
 
/*
* Quay lại trang danh sách người dùng
*/
redirect('admin/user/list.php');

?>