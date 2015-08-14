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
require_once '../functions/product.php';
require_once '../functions/cart.php';

/*
- Xử lý các lệnh cập nhật, xóa
*/
if(isset($_POST['remove']) && $_POST['remove'] == "Xóa" && $_POST['pid'] > 0)
{
	remove_product($_POST['pid']);
}
else if(isset($_POST['clear']) && $_POST['clear'] == "Xóa giỏ")
{
	unset($_SESSION['cart']);
}
else if(isset($_POST['update']) && $_POST['update'] == "Cập nhật")
{
	$max = count($_SESSION['cart']);
	for($i = 0; $i < $max; $i++)
	{
		$pid = $_SESSION['cart'][$i]['product_id'];
		$q = intval($_POST['product'.$pid]);
		if($q > 0 && $q <= 50){
			$_SESSION['cart'][$i]['quantity'] = $q;
		}
		else
		{
			$msg = 'Một vài sản phẩm không được cập nhật, số lượng phải nằm từ 1 đến 50';
		}
	}	
}

/*
- Lưu tiêu đề
*/
$page_title = "Giỏ hàng";

/*
- Require giao diện
*/
require_once '../template/header.tpl.php';
require_once '../template/cart/showcart.tpl.php';
require_once '../template/footer.tpl.php';
?>