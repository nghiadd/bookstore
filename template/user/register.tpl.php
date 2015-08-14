<script>
/*
- Hàm validate form
*/
function myValidateForm() {
	var vfname = document.getElementById('fullname');
	var vbday = document.getElementById('birthday');
	var vemail = document.getElementById('email');
	var vuname = document.getElementById('username');
	var vpass = document.getElementById('password');
	var vconpass = document.getElementById('conpass');	

	var fname_error = document.getElementById('fullname-error');
	var bday_error = document.getElementById('birthday-error');
	var email_error = document.getElementById('email-error');
	var uname_error = document.getElementById('username-error');
	var pass_error = document.getElementById('password-error');
	var conpass_error = document.getElementById('conpass-error');	
	
	if(fname_Validation(vfname) == true && bday_Validation(vbday) == true && email_Validation(vemail) == true && 
	uname_Validation(vuname) == true && pass_Validation(vpass) == true && conpass_Validation(vconpass, vpass) == true) {
		return true;
	}else {
		if(fname_Validation(vfname) == "required") {
			fname_error.innerHTML = "Nhập họ tên vào đây";
		}else if(fname_Validation(vfname) == "minlength") {
			fname_error.innerHTML = "Tối thiểu 4 ký tự";
		}else if(fname_Validation(vfname) == "maxlength") {
			fname_error.innerHTML = "Tối đa 100 ký tự";
		}else {
			
		}
		
		if(bday_Validation(vbday) == "required") {
			bday_error.innerHTML = "Hãy nhập ngày tháng năm sinh";
		}
		
		if(email_Validation(vemail) == "required") {
			email_error.innerHTML = "Hãy nhập địa chỉ email vào đây";
		}else if(email_Validation(vemail) == "notvalid") {
			email_error.innerHTML = "Địa chỉ email không hợp lệ";
		}else {
		
		}
		
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
		
		if(conpass_Validation(vconpass, vpass) == "notmatch") {
			conpass_error.innerHTML = "Mật khẩu không khớp";
		}
	}
	return false;
}


// Validate fullname
function fname_Validation(fname) {
	var fname_length = fname.value.length;
	var fname_string = fname.value;
	if(fname_string == '') {
		return "required";
	}else if(fname_length < 4) {
		return "minlength";
	}else if(fname_length > 100) {
		return "maxlength";
	}else {
		return true;
	}
}


// Validate birthday
function bday_Validation(bday) {
	var bday_string = bday.value;
	if(bday_string == '') {
		return "required";
	}else {
		return true;
	}
}

// Validate email
function email_Validation(email) {
	var valid_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var email_string = email.value;
	if(email_string == '') {
		return "required";
	}else if(!email_string.test(email_string)) {
		return "notvalid";
	}else {
		return true;
	}
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

// Validate confirm password
function conpass_Validation(conpass, pass) {
	var conpass_string = conpass.value;
	var pass_string = pass.value;
	if(conpass_string !== pass_string) {
		return "notmatch";
	}else {
		return true;
	}
}

</script>
		<!---------------- MAIN CONTENT ---------------->
		<div id="mainContent">	
			<div id="register-form">
				<h1>Đăng ký</h1>
				<p style="color: #FFCA6F;">Các mục đánh dấu (*) không được để trống</p>
				<form action="register.php" method="post" onsubmit="return myValidateForm()" >
				Tên đầy đủ (*): <br /><input type="text" value="" name="fullname" id="fullname" /><span id="fullname-error"></span><br />
				Ngày/Tháng/Năm sinh (*): <br />
				<input style="display: inline;" id="birthday" name="birthday" type="text" class="slimpicker" autocomplete="off" alt="{
					dayChars:1,
					dayNames:['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
					daysInMonth:[31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
					format:'dd/mm/yyyy',
					monthNames:['January', 'February', 'March', 'April', 'May', 'Juny', 'July', 'August', 'September', 'October', 'November', 'December'],
					startDay:1,
					yearOrder:'desc',
					yearRange:50,
					yearStart:<?php $curYear = (int)date("Y"); $startYear = $curYear - 15; echo $startYear; ?>
				}" value="" /><span id="birthday-error"></span><br />
				Email (*): <br /><input type="text" name="email" id="email" /><span id="email-error"></span><br />
				Tài khoản (*): <br /><input type="text" name="username" id="username" /><span id="username-error"></span><br />
				Mật khẩu (*): <br /><input type="password" name="password" id="password" /><span id="password-error"></span><br />
				Xác nhận mật khẩu (*): <br /><input type="password" name="password" id="conpass" /><span id="conpass-error"></span><br />
				<input type="submit" value="Đăng ký" id="submit-register" />
				</form>
			</div>
		
<script>

$$('input.slimpicker').each( function(el){
	var picker = new SlimPicker(el);
});

</script>
			<div class="clearfix"></div>
		</div><!-- End #mainContent -->