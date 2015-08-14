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
require_once '../functions/pagination.php';

/*
- Kiểm tra dã đăng nhập chưa?
*/
check_login();

/*
* Lấy dữ liệu phân trang
*/
if(isset($_GET['page']))
{
    /*
    - Nếu ở trang 2 trở đi
    */
    $page = $_GET['page'];
}
else
{
    /*
    - Nếu ở trang đầu tiên
    */
    $page = 1;
}
 
/*
- Giới hạn số record trên 1 trang (Ở đây đang khai báo là 16)
*/
$limit = 5;
$start = $page*$limit - $limit;

/*
- Lấy danh sách thành viên
*/
$users = user_get_list($start, $limit);

/*
- Lưu tiêu đề
*/
$page_title = "Danh sách người dùng";

/*
- Require các file giao diện
*/
require_once '../template/header.tpl.php';
require_once '../template/sidebar.tpl.php';
require_once '../template/user/list.tpl.php';
require_once '../template/footer.tpl.php';
?>