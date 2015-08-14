<script language="javascript" src="<?php echo SITE_URL;?>template/ckeditor/ckeditor.js" type="text/javascript"></script>
		<div id="primary">
			<h1>Thêm sản phẩm</h1>
			<div id="add-edit-product">
				<form method="post" action="add.php" enctype="multipart/form-data" >
					<ul>
						<li>
							<label>Tên sản phẩm <span>(*)</span>:</label>
							<input type="text" name="name" value="" />
						</li>
						<li>
							<label>Thuộc danh mục <span>(*)</span>:</label>
							<select name="category_id">
								<option>Chọn danh mục</option>
								<?php while($category = mysql_fetch_array($categories)): ?>
									<option value="<?php echo $category['category_id']; ?>">
										<?php echo $category['name']; ?>
									</option>
								<?php endwhile; ?>
							</select>
						</li>
						<li>
							<label class="textarea">Chi tiết</label>
							<textarea name="detail" id="detail" ></textarea>
							<script type="text/javascript">CKEDITOR.replace('detail'); </script>
						</li>
						<li>
							<label>Hình ảnh</label>
							<input type="file" name="image" value="" />
						</li>
						<li>
							<label>Tác giả</label>
							<input type="text" name="author" value="" />
						</li>
						<li>
							<label>Dịch giả</label>
							<input type="text" name="translator" value="" />
						</li>
						<li>
							<label>NXB</label>
							<input type="text" name="publisher" value="" />
						</li>
						<li>
							<label>Số trang</label>
							<input type="text" name="length" value="" />
						</li>
						<li>
							<label>Khổ sách</label>
							<input type="text" name="size" value="" />
						</li>
						<li>
							<label>Hình thức bìa</label>
							<input type="text" name="cover" value="" />
						</li>						
						<li>
							<label>Giá bán</label>
							<input type="text" name="price" value="" />
						</li>
						<li>
							<label>Trạng thái</label>
							<input type="checkbox" name="status" value="1" />
						</li>
						<li>
							<input type="submit" value="Submit" class="add-edit-button" />
						</li>
					</ul>
				</form>
			</div><!-- End #add-product -->
		</div><!-- End #primary -->
		<div class="clearfix"></div>	
	</div><!-- End #mainContent -->
	<div class="clearfix"></div>