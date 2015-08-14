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
require_once 'functions/category.php';

/*
- Lấy tên thể loại sách
*/
$categories = category_for_option(); 


/*
- Lưu tiêu đề
*/
$page_title = "Sách";

/*
- Require các file giao diện
*/
require_once 'template/header.tpl.php';
require_once 'template/sidebar.tpl.php';
require_once 'template/product/book.tpl.php';
require_once 'template/footer.tpl.php';
?>