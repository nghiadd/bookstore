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
require_once '../functions/product.php';
require_once '../functions/cart.php';

if(!isset($_SESSION['_user_']))
{
	$msg_payment = "Bạn phải đăng nhập trước khi mua hàng.";
	redirect('login.php');
}


/*
- Lưu tiêu đề
*/
$page_title = "Giỏ hàng";

/*
- Require giao diện
*/
require_once '../template/header.tpl.php';
require_once '../template/cart/payment.tpl.php';
require_once '../template/footer.tpl.php';
?>