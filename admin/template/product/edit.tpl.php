<script language="javascript" src="<?php echo SITE_URL;?>template/ckeditor/ckeditor.js" type="text/javascript"></script>
		<div id="primary">
			<h1>Sửa sản phẩm</h1>
			<div id="add-edit-product">
				<form method="post" action="" enctype="multipart/form-data" >
					<ul>
						<li>
							<label>Tên sản phẩm <span>(*)</span>:</label>
							<input type="text" name="name" value="<?php echo $product['name']; ?>" />
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
							<textarea name="detail" id="detail" ><?php echo $product['detail']; ?></textarea>
							<script type="text/javascript">CKEDITOR.replace('detail'); </script>
						</li>
						<li>
							<label>Hình ảnh</label>
							<input type="file" name="image" value="" />
						</li>
						<li>
							<label>Tác giả</label>
							<input type="text" name="author" value="<?php echo $product['author']; ?>" />
						</li>
						<li>
							<label>Dịch giả</label>
							<input type="text" name="translator" value="<?php echo $product['translator']; ?>" />
						</li>
						<li>
							<label>NXB</label>
							<input type="text" name="publisher" value="<?php echo $product['publisher']; ?>" />
						</li>
						<li>
							<label>Số trang</label>
							<input type="text" name="length" value="<?php echo $product['length']; ?>" />
						</li>
						<li>
							<label>Khổ sách</label>
							<input type="text" name="size" value="<?php echo $product['size']; ?>" />
						</li>
						<li>
							<label>Hình thức bìa</label>
							<input type="text" name="cover" value="<?php echo $product['cover']; ?>" />
						</li>						
						<li>
							<label>Giá bán</label>
							<input type="text" name="price" value="<?php echo $product['price']; ?>" />
						</li>
						<li>
							<label>Trạng thái</label>
							<?php if($product['status'] == 1): ?>
								<input type="checkbox" name="status" value="1" checked="checked" />
							<?php else: ?>
								<input type="checkbox" name="status" value="1" />
							<?php endif; ?>
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