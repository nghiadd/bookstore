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
require_once 'functions/product.php';
require_once 'admin/functions/pagination.php';

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
$limit = 16;
$start = $page*$limit - $limit;
 
/*
- Lấy danh sách sản phẩm theo trang
*/
$products = product_get_list($start, $limit);

/*
- Lưu tiêu đề
*/
$page_title = "Danh mục sách";

/*
- Require các file giao diện
*/
require_once 'template/header.tpl.php';
require_once 'template/sidebar.tpl.php';
require_once 'template/booklist/booklist.tpl.php';
require_once 'template/footer.tpl.php';
?>