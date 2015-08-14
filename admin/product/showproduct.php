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
require_once '../functions/upload.php';
require_once '../functions/product.php';


/*
- Kiểm tra dã đăng nhập chưa?
*/
check_login();

/*
- Lấy id sản phẩm
*/
if(isset($_GET['product_id']))
{
	$product_id = $_GET['product_id'];
}
else
{
	redirect('admin/product/list.php');
}

/*
- Lấy thông tin sản phẩm
*/
$product = product_get_by_id($product_id);

if($product == NULL) redirect('admin/product/list.php');

/*
- Lấy tên sản phẩm làm tiêu đề
*/
$page_title = $product['name'];
/*
- Require giao diện
*/
require_once '../template/header.tpl.php';
require_once '../template/sidebar.tpl.php';
require_once '../template/product/showproduct.tpl.php';
require_once '../template/footer.tpl.php';
?>