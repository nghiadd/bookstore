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
- Xóa toàn bộ session
*/
session_destroy();

/*
- Quay về trang đăng nhập
*/
redirect('admin/login.php');

?>