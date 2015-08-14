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
require_once 'functions/user.php';

if(isset($_SESSION['_user_'])) redirect();

if($_POST) 
{
	if(isset($_POST['username']) && $_POST['username'] != '')
	{
		$username = $_POST['username'];	
	}

	if(isset($_POST['password']) && $_POST['password'] != '')
	{
		$password = $_POST['password'];	
	}

	if(isset($_POST['fullname']) && $_POST['fullname'] != '')
	{
		$fullname = $_POST['fullname'];	
	}

	if(isset($_POST['email']) && $_POST['email'] != '')
	{
		$email = $_POST['email'];	
	}

	if(isset($_POST['username']) && $_POST['username'] != '')
	{
		$username = $_POST['username'];	
	}

	/*
	- Xử lý ngày tháng năm sinh
	*/
	if(isset($_POST['birthday']) && $_POST['birthday'] != '')
	{
		$birthday = $_POST['birthday'];
		//echo $birthday;
	}

	
	/*
	- Lưu vào cơ sở dữ liệu
	*/
	$sql = "INSERT INTO user(group_id, username, password, fullname, email, birthday, gender)
				VALUES(2, '$username', '$password', '$fullname', '$email', '$birthday', 2)";
	$result = mysql_query($sql);
/*
	if($result == true) {
		echo "Da them thanh cong vao co so du lieu.";
	}else {
		echo "Co loi xay ra.";
	}
*/

/*
- Gửi mail cho khách hàng
*/
$to = $email;
$subject = "Thông tin tài khoản khách hàng";
$message = "
Chào bạn.
 
Xin chào " . $fullname . "!

Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi. Dưới đây là thông tin tài khoản bạn đã đăng ký tại website của chúng tôi:

- Tên đăng nhập: " . $username . "

- Địa chỉ e-mail: " . $email . " 

- Mật khẩu: " . $password . "

Bạn nên lưu giữ lại e-mail này để tham khảo sau này.

Chào trân trọng!
";
$from = "uetprobook@quanlybanhang-cnpm.herobo.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

/*
- Lưu tiêu đề
*/
$page_title = "Thành viên";

/*
- Require các file giao diện
*/
require_once 'template/header.date.tpl.php';
require_once 'template/user/registered.tpl.php';
require_once 'template/footer.tpl.php';
}
else
{

/*
- Lưu tiêu đề
*/
$page_title = "Thành viên";

/*
- Require các file giao diện
*/
require_once 'template/header.date.tpl.php';
require_once 'template/user/register.tpl.php';
require_once 'template/footer.tpl.php';
}
?>


