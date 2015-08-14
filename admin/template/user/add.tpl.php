
		<div id="primary">
			<h1>Thêm người dùng</h1>
			<div id="add-edit-user">
				<form action="add.php" method="post">
				Tên đầy đủ (*) <br /><input type="text" value="" name="fullname" /><br />
				Nhóm người dùng (*) 
                    <select name="group_id" class="select-group">
                        <option>Chọn nhóm</option>
                        <?php while($group = mysql_fetch_array($groups)): ?>
							<option value="<?php echo $group['group_id']; ?>">
								<?php echo $group['name']; ?>
							</option>
                        <?php endwhile; ?>
                    </select><br />
				Ngày/Tháng/Năm sinh <br />
					<input id="birthday" name="birthday" type="text" class="slimpicker" autocomplete="off" alt="{
						dayChars:1,
						dayNames:['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
						daysInMonth:[31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
						format:'dd/mm/yyyy',
						monthNames:['January', 'February', 'March', 'April', 'May', 'Juny', 'July', 'August', 'September', 'October', 'November', 'December'],
						startDay:1,
						yearOrder:'desc',
						yearRange:50,
						yearStart:<?php $curYear = (int)date("Y"); $startYear = $curYear - 15; echo $startYear; ?>
					}" value="" /> 
				Email <br /><input type="text" name="email" /><br />
				Username <br /><input type="text" name="username" /><br />
				Password <br /><input type="password" name="password" /><br />
				Giới tính                     
                    <select name="gender" class="select-gender">
						<option value="1">Nam</option>
						<option value="0">Nữ</option>						
                    </select><br />
				<input type="submit" value="Thêm" class="add-edit-button" />
			</div><!-- End #add-edit-user -->
				<script>

				$$('input.slimpicker').each( function(el){
					var picker = new SlimPicker(el);
				});

				</script>			
		</div><!-- End #primary -->
		<div class="clearfix"></div>	
	</div><!-- End #mainContent -->
	<div class="clearfix"></div>