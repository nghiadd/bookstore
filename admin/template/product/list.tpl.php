
		<div id="primary">
			<div id="featured">
				<h1>Danh mục sản phẩm</h1>
				<?php while($row = mysql_fetch_assoc($products)): ?>
				<div class="product">
					<p><a href="<?php echo SITE_URL.'admin/product/showproduct.php?product_id='.$row['product_id']; ?>"><img src="<?php echo SITE_URL.'store/'.$row['image']; ?>" title="<?php echo $row['name']; ?>" width="118" height="160" /></a></p>
					<p class="book-name ellipsis"><a href="<?php echo SITE_URL.'admin/product/showproduct.php?product_id='.$row['product_id']; ?>" title="<?php echo $row['name']; ?>" ><?php echo $row['name']; ?></a></p>
					<p class="price">Giá bán: <span><?php echo $row['price']; ?>đ</span></p>
				</div>
				<?php endwhile; ?>
			<div class="clearfix"></div>				
			</div><!-- End #featured -->
		</div><!-- End #primary -->
		<div class="clearfix"></div>	
		<div id="pagination">
			<div>
				<?php echo pagination(product_count_list(), $limit, SITE_URL.'admin/product/list.php'); ?>
			</div>
		</div><!-- End #pagination -->
	</div><!-- End #mainContent -->
	<div class="clearfix"></div>