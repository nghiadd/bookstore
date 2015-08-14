<script>
/*
- Hàm validate form
*/
function validateChangepassForm() {
	var vpass = document.getElementById('password-change');
	var vconpass = document.getElementById('conpass-change');	
	
	var pass_error = document.getElementById('password-change-error');
	var conpass_error = document.getElementById('conpass-change-error');		
	
	if(pass_Validation(vpass) == true && conpass_Validation(vconpass, vpass) == true) {
		return true;
	}else {
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
				<div id="changepass-account">
					<h2>Thay đổi mật khẩu</h2>
					<form action="" method="post" name="changepass-form" onsubmit="return validateChangepassForm()">
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['_user_']['user_id']; ?>" />
					<p>
						<label>Mật khẩu mới (*)</label>
						<input type="password" name="password" id="password-change" /><span id="password-change-error"></span>
					</p>
					<div class="clearfix"></div>
					<p>
						<label>Nhập lại mật khẩu (*)</label>
						<input type="password" name="conpass" id="conpass-change" /><span id="conpass-change-error"></span>
					</p>
					<div class="clearfix"></div>
					<p>
						<input type="submit" name="submit-account" id="submit-account" value="Lưu thay đổi" />
					</p>
					</form>
				</div>
			</div>
		</div><!-- End #mainContent -->
