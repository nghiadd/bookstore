<script>
/*
- Hàm validate form
*/
function validateForm() {
	var vuname = document.getElementById('username-login');
	var vpass = document.getElementById('password-login');

	var uname_error = document.getElementById('username-login-error');
	var pass_error = document.getElementById('password-login-error');
	
	if(uname_Validation(vuname) == true && pass_Validation(vpass) == true) {
		return true;
	}else {
		if(uname_Validation(vuname) == "required") {
			uname_error.innerHTML = "Mời bạn nhập tên tài khoản";
		}else if(uname_Validation(vuname) == "minlength" ) {
			uname_error.innerHTML = "Tối thiểu 6 ký tự";
		}else if(uname_Validation(vuname) == "maxlength") {
			uname_error.innerHTML = "Tối đa 35 ký tự";
		}else {
		
		}
		
		if(pass_Validation(vpass) == "required") {
			pass_error.innerHTML = "Mật khẩu không được bỏ trống";
		}else if(pass_Validation(vpass) == "minlength") {
			pass_error.innerHTML = "Tối thiểu 6 ký tự";
		}else if(pass_Validation(vpass) == "maxlength") {
			pass_error.innerHTML = "Tối đa 35 ký tự";
		}else {
		
		}

	}
	return false;
}



// Validate username
function uname_Validation(uname) {
	var uname_length = uname.value.length;
	var uname_string = uname.value;
	if(uname_string == '') {
		return "required";
	}else if(uname_length < 6) {
		return "minlength";
	}else if(uname_length > 35) {
		return "maxlength";
	}else {
		return true;
	}
}

// Validate password
function pass_Validation(pass) {
	var pass_length = pass.value.length;
	var pass_string = pass.value;
	if(pass_string == '') {
		return "required";
	}else if(pass_length < 6) {
		return "minlength";
	}else if(pass_length > 35) {
		return "maxlength";
	}else {
		return true;
	}
}


</script>

		<!---------------- MAIN CONTENT ---------------->
		<div id="mainContent">	
			<div id="login-form">
				<h1>Đăng nhập</h1>
				<form action="login.php" method="post" onsubmit="return validateForm()">
				Username<br /><input type="text" name="username" id="username-login" /><span id="username-login-error"></span><br />
				Password<br /><input type="password" name="password" id="password-login" /><span id="password-login-error"></span><br />
				<input type="submit" value="Đăng nhập" id="submit-register" />
				</form>
				<a href="<?php echo SITE_URL; ?>forgot.php" >Quên mật khẩu</a>
			</div>
			
		
			<div class="clearfix"></div>
		</div><!-- End #mainContent -->