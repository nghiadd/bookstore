				<div id="account-info">
					<h2>Thông tin tài khoản</h2>
					<form action="" method="post" name="account-info-form">
						<input type="hidden" name="user_id" value="<?php echo $_SESSION['_user_']['user_id']; ?>" />
						<p>
							<label>Họ tên</label>
							<input type="text" name="fullname" value="<?php echo $_SESSION['_user_']['fullname']; ?>" />
						</p>
						<div class="clearfix"></div>
						<p>
							<label>Tài khoản</label>
							<strong><?php echo $_SESSION['_user_']['username']; ?></strong>
						</p>
						<div class="clearfix"></div>
						<p>
							<label>Email</label>
							<strong><?php echo $_SESSION['_user_']['email']; ?></strong>
						</p>
						<div class="clearfix"></div>
						<p>
							<label>Ngày sinh</label>
							<strong><?php echo $_SESSION['_user_']['birthday']; ?></strong>
						</p>
						<div class="clearfix"></div>
						<p>
							<label>Giới tính</label>
							<select name="gender">
								<option value="2" <?php if($_SESSION['_user_']['gender'] == 2) echo 'selected="selected"';?>>Chưa rõ</option>
								<option value="1" <?php if($_SESSION['_user_']['gender'] == 1) echo 'selected="selected"';?>>Nam</option>
								<option value="0" <?php if($_SESSION['_user_']['gender'] == 0) echo 'selected="selected"';?>>Nữ</option>						
							</select>
						</p>
						<div class="clearfix"></div>
						<input type="submit" name="submit-account" id="submit-account" value="Lưu thay đổi" />
					<form>
				</div>
			</div>
		</div><!-- End #mainContent -->
