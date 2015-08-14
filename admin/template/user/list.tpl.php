
		<div id="primary">
			<div id="user-list">
				<h1>Danh sách người dùng</h1>
				<?php while($row = mysql_fetch_assoc($users)): ?>
				<div class="user">
					<div class="user-info">
						<p><span class="left-user">Tài khoản</span> <span class="right-user"><?php echo $row['username']; ?></span></p>
						<p><span class="left-user">Nhóm người dùng</span> <span class="right-user"><?php echo $row['name']; ?></span></p>
						<p><span class="left-user">Họ tên</span> <span class="right-user"><?php echo $row['fullname']; ?></span></p>
						<p><span class="left-user">Email</span> <span class="right-user"><?php echo $row['email']; ?></span></p>
						<p><span class="left-user">Ngày sinh</span> <span class="right-user"><?php echo $row['birthday']; ?></span></p>
						<p><span class="left-user">Giới tính</span> <span class="right-user"><?php if($row['gender'] == NULL) echo "Chưa xác định"; else if ($row['gender'] == 1) echo "Nam"; else echo "Nữ"; ?></span></p>
					</div><!-- End .user-info -->
					<div class="edit-delete">
						<ul>
							<li><a href="<?php echo SITE_URL.'admin/user/edit.php?user_id='.$row['user_id']; ?>">Sửa</a></li>
							<li><a href="<?php echo SITE_URL.'admin/user/delete.php?user_id='.$row['user_id']; ?>" onclick="return confirm('Bạn có muốn xóa tiếp không?')">Xóa</a></li>
						</ul>
					</div><!-- End .edit-delete -->
					<div class="clearfix"></div>
				</div>
				<?php endwhile; ?>
			<div class="clearfix"></div>				
			</div><!-- End #featured -->
		</div><!-- End #primary -->
		<div class="clearfix"></div>	
		<div id="pagination">
			<div>
				<?php echo pagination(user_count_list(), $limit, SITE_URL.'admin/user/list.php'); ?>
			</div>
		</div><!-- End #pagination -->
	</div><!-- End #mainContent -->
	<div class="clearfix"></div>