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
* Kiểm tra dã đăng nhập chưa?
*/
check_login();



/*
* Lấy product id từ URL và gọi hàm product_delete_by_product_id để xóa sản phẩm
*/
if(isset($_GET['product_id']))
{
    $product_id = $_GET['product_id'];
    product_delete_by_product_id($product_id);
}
else
{
	redirect('admin/product/list.php');
}
 
/*
* Quay lại trang danh sách sản phẩm
*/
redirect('admin/product/list.php');

?>