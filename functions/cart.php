<?php

function product_exist($product_id) {
	$max = count($_SESSION['cart']);
	$i = 0;
	$is_exist = false;
	for($i = 0; $i < $max; $i++)
	{
		if($_SESSION['cart'][$i]['product_id'] == $product_id)
		{
			$is_exist = true;
			break;
		}
	}
	return $is_exist;
}

function remove_product($product_id){
	$pid = intval($product_id);
	$max = count($_SESSION['cart']);
	for($i = 0; $i < $max; $i++)
	{
		if($pid == $_SESSION['cart'][$i]['product_id'])
		{
			unset($_SESSION['cart'][$i]);
			break;
		}
	}
	$_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>