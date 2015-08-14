		<!---------------- MAIN CONTENT ---------------->
		<div id="mainContent">	
			<div id="login-form">
				<p>Nhập địa chỉ email vào đây. Chúng tôi sẽ gửi thông tin tài khoản về địa chỉ này.</p>
				<form action="forgot.php" method="post">
				<br /><input type="text" name="email" /><br />
				<input type="submit" value="Gửi" id="submit-register" />
				</form>
				<?php if(isset($is_error) && $is_error == true) echo "<p>Địa chỉ email này không tồn tại.</p>"; ?>
			</div>
		
			<div class="clearfix"></div>
		</div><!-- End #mainContent -->