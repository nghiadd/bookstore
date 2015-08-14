		<div id="primary">
			<p style="padding: 0px 0px;"><?php if(isset($msg)) echo $msg; ?></p>
			<div id="show-product">
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
						<div>
						<form action="" method="POST">
						<input type="hidden" name="id" value="<?php echo $product['product_id']; ?>" />
						<input type="submit" name="action" value="Chọn mua" id="buy-items" />
						</form>
						</div>
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