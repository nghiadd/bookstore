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
require_once '../functions/cart.php';

/*
- Tạo session lưu dữ liệu giỏ hàng
*/
if(isset($_POST['action']) && $_POST['action'] == 'Chọn mua')
{
	$product = product_get_by_id($_POST['id']);
	if($product['status'] == 0)
	{
		$msg = "Sản phẩm hiện đã hết hàng. Quý khách vui lòng quay lại sau.";
	}
	else if(isset($_SESSION['cart']))
	{
		$product_id = $_POST['id'];
		$max = count($_SESSION['cart']);
		if(product_exist($product_id) == true)
		{
			for($i = 0; $i < $max; $i++)
			{
				if($_SESSION['cart'][$i]['product_id'] == $product_id)
				{
					$_SESSION['cart'][$i]['quantity']++;
				}
			}
		}
		else
		{
			$_SESSION['cart'][$max]['product_id']= $product_id;
			$_SESSION['cart'][$max]['quantity']= 1;
		}
	}
	else
	{
		$_SESSION['cart'] = array();
		$_SESSION['cart'][0]['product_id']= $_POST['id'];
		$_SESSION['cart'][0]['quantity']= 1;
	}
}

/*
- Lấy id sản phẩm
*/
if(isset($_GET['product_id']))
{
	$product_id = $_GET['product_id'];
}
else
{
	redirect('product/list.php');
}

/*
- Lấy thông tin sản phẩm
*/
$product = product_get_by_id($product_id);

if($product == NULL) redirect('product/list.php');

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