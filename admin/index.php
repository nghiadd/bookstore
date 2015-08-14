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

/*
- Kiểm tra xem đã đăng nhập hay chưa
*/
check_login();

/*
- Lưu tiêu đề
*/
$page_title = "Trang quản trị";

/*
- Require các file giao diện
*/
require_once 'template/header.tpl.php';
require_once 'template/sidebar.tpl.php';
require_once 'template/index.tpl.php';
require_once 'template/footer.tpl.php';
?>


