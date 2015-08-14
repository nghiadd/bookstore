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
require_once '../functions/category.php';

/*
* Kiểm tra dã đăng nhập chưa?
*/
check_login();
 
/*
* Nếu có post dữ liệu từ form lên
*/
if($_POST)
{
 
    if(isset($_POST['name']) && $_POST['name'] != '')
    {
        $name = $_POST['name'];
    }
 
    if(isset($_POST['category_id']))
    {
        $category_id = $_POST['category_id'];
    }
 
    if(isset($_POST['detail']))
    {
        $detail = $_POST['detail'];
    }
 
    if(isset($_POST['author']))
    {
        $author = $_POST['author'];
    }
  
    if(isset($_POST['translator']))
    {
        $translator = $_POST['translator'];
    }
 
    if(isset($_POST['publisher']))
    {
        $publisher = $_POST['publisher'];
    }
	
    if(isset($_POST['length']))
    {
        $length = (int)$_POST['length'];
    }	
	
    if(isset($_POST['size']))
    {
        $size = $_POST['size'];
    }	
	
    if(isset($_POST['cover']))
    {
        $cover = $_POST['cover'];
    }		
	
    if(isset($_POST['price']))
    {
        $price = (int)$_POST['price'];
    }
 
    if(isset($_POST['status']))
    {
        $status = (int)$_POST['status'];
    }
 
    if($name != '')
    {
        /*
        * Thực hiện upload ảnh sản phẩm
        */
        $image = upload('image');

        /*
        * Gán giá trị cho mãng $data
        */
        $data = array(
                        'category_id'      => $category_id,
                        'name'          => $name,
                        'detail'          => $detail,
                        'image'            => $image,
						'author'            => $author,
						'translator'            => $translator,
						'publisher'            => $publisher,
						'length'            => $length,
						'size'            => $size,
						'cover'            => $cover,
                        'price'          => $price,
                        'status'        => $status
                        );
   
        /*
        * Thực hiện thêm mới sản phẩm
        */
        if(product_add($data) !== false)
        {
            $is_success = true;
        }
    }
    else
    {
        $error_name = 'Bạn vui lòng nhập Tên sản phẩm';
    }
}

/*
- Lưu tiêu đề
*/
$page_title = "Thêm sản phẩm";

/*
* Lấy danh sách danh mục (Phần tạo danh mục, quản lý danh mục các bạn có thể thực hiện tương tự như nhóm thành viên)
*/
$categories = category_for_option();

require_once '../template/header.tpl.php';
require_once '../template/sidebar.tpl.php';
require_once '../template/product/add.tpl.php';
require_once '../template/footer.tpl.php';
?>