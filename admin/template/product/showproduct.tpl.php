		<div id="primary">
			<div id="show-product">
				<div id="edit-delete-toolbar">
					<ul>
						<li><a href="<?php echo SITE_URL.'admin/product/delete.php?product_id='.$product['product_id']; ?>" onclick="return confirm('Bạn có muốn xóa tiếp không?')" >Xóa</a></li>
						<li><a href="<?php echo SITE_URL.'admin/product/edit.php?product_id='.$product['product_id']; ?> ">Sửa</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div id="show-product-info">
					<div id="image-show-product">
						<img src="<?php echo SITE_URL.'store/'.$product['image']; ?>" />
					</div>
					<div id="name-show-product">
						<h2><?php echo $product['name']; ?></h2>
						<p><span class="span-left">Nhà xuất bản</span> <span class="span-right"><?php echo $product['publisher']; ?></span></p>
						<p><span class="span-left">Tác giả</span> <span class="span-right"><?php echo $product['author']; ?></span></p>
						<p><span class="span-left">Dịch giả</span> <span class="span-right"><?php echo $product['translator']; ?></span></p>
						<p><span class="span-left">Số trang</span> <span class="span-right"><?php echo $product['length']; ?> trang</span></p>
						<p><span class="span-left">Khổ sách</span> <span class="span-right"><?php echo $product['size']; ?></span></p>
						<p><span class="span-left">Dạng bìa</span> <span class="span-right"><?php echo $product['cover']; ?></span></p>
					</div>
					<div id="price-show-product">
						<p>Giá bán: <span><?php $english_format_number = number_format($product['price']);echo $english_format_number; ?> VND</span></p>
						<?php 
							if($product['status'] == 1) echo "<span ".'class="con-hang"'.">"."Còn hàng"."</span>"; 
							if($product['status'] == 0) echo "<span ".'class="het-hang"'.">"."Hết hàng"."</span>";
						?>
					</div>
				</div>
				<div class="clearfix"></div>
				<div id="detail-show-product">
					<h1>Giới thiệu sách</h1>
					<div>
						<?php echo $product['detail']; ?>
					</div>
				</div>
			</div><!-- End #show-product -->
		</div><!-- End #primary -->		
	</div><!-- End #mainContent -->
	<div class="clearfix"></div>		