<?php
/*
* Khởi động session
*/
session_start();
 
/*
* Require các file cần thiết
*/
require_once '../configs/db.php';
require_once '../configs/connectdb.php';
require_once '../configs/site.php';
require_once '../functions/common.php';
require_once '../functions/user.php';
require_once '../functions/group.php';
 
/*
* Kiểm tra dã đăng nhập chưa?
*/
check_login();
 
/*
* Nhận id sản phẩm để lấy thông tin sản phẩm đang chỉnh sửa
*/
if(isset($_GET['user_id']))
{
	$user_id = $_GET['user_id'];
}
else
{
	$user_id = 0;
}

/*
- Lấy thông tin thành viên đang chỉnh sửa
*/
$user = get_user_by_id($user_id);

if($user == NULL) redirect('admin/user/list.php');
/*
- Nếu có post dữ liệu từ form lên
*/
if($_POST)
{
/*
- Khai báo và nhận dữ liệu
*/
 
    if(isset($_POST['username']) && $_POST['username'] != '')
    {
		$username = $_POST['username'];
    }
	
	if(isset($_POST['password']))
	{
		$password = $_POST['password'];
	}
	
	if(isset($_POST['group_id']))
    {
        $group_id = $_POST['group_id'];
    }
	
    if(isset($_POST['fullname']))
    {
        $fullname = $_POST['fullname'];
    }
    
    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
    }
    
	if(isset($_POST['birthday']))
	{
		$birthday = $_POST['birthday'];
	}
	
	if(isset($_POST['gender']))
    {
		$gender = $_POST['gender'];
    }
	
    if($username != '')
    {
		/*
		* Gán giá trị cho mãng $data
		*/
        $data = array(
                        'group_id'  => $group_id,
                        'username'  => $username,
                        'password'  => $password,
                        'fullname'  => $fullname,
                        'email'     => $email,
                        'gender'    => $gender,
                        'birthday'  => $birthday,
                        );
		
		/*
		* Thực hiện thêm mới thành viên
		*/
        if(user_edit($data, $user_id) !== false)
        {
			$is_success = true;
        }
    }
    else
    {
		$error_name = 'Bạn vui lòng nhập Tên tài khoản';
    }
	/*
		$sql = "UPDATE user SET user_id = $user_id, groupd_id = $group_id, username = '$username', 
		password = '$password', fullname = '$fullname', email = '$email', birthday = '$birthday', gender = $gender
		WHERE user_id = $user_id";
		$result = mysql_query($sql);
    */
   
}

/*
- Lấy danh sách nhóm thành viên
*/
$groups = group_for_option();

/*
- Lưu tiêu đề
*/
$page_title = "Chỉnh sửa người dùng";


require_once '../template/header.date.tpl.php';
require_once '../template/sidebar.tpl.php';
require_once '../template/user/edit.tpl.php';
require_once '../template/footer.tpl.php';
?>