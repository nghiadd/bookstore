
			<div id="primary">
				<div id="coin-slider">
					<a href=""><img src="image/slider/carousel-item-1.jpg" /></a>
					<a href=""><img src="image/slider/carousel-item-2.jpg" /></a>
					<a href=""><img src="image/slider/carousel-item-3.jpg" /></a>
					<a href=""><img src="image/slider/carousel-item-4.jpg" /></a>
					<a href=""><img src="image/slider/carousel-item-5.jpg" /></a>
					<a href=""><img src="image/slider/carousel-item-6.jpg" /></a>
				</div><!-- End #slider -->
				
				<div id="featured">
				<?php while($category = mysql_fetch_assoc($categories)): ?>
					<div class="product-cate">
						<h1><a href="<?php echo SITE_URL.'product/list.php?ct='.$category['category_id']; ?>"><?php echo $category['name']; ?></a></h1>
						<?php 
						$products = product_get_list_by_category(0, 4, $category['category_id']);
						while($row = mysql_fetch_assoc($products)): ?>
						<div class="product">
							<p><a href="<?php echo SITE_URL.'product/showproduct.php?product_id='.$row['product_id']; ?>"><img src="<?php echo SITE_URL.'store/'.$row['image']; ?>" title="<?php echo $row['name']; ?>" width="118" height="160" /></a></p>
							<p class="book-name ellipsis"><a href="<?php echo SITE_URL.'product/showproduct.php?product_id='.$row['product_id']; ?>" title="<?php echo $row['name']; ?>" ><?php echo $row['name']; ?></a></p>
							<p class="price">Giá bán: <span><?php echo $row['price']; ?>đ</span></p>
						</div>
						<?php endwhile; ?>						
					</div>
					<p class="readmore"><a href="<?php echo SITE_URL.'product/list.php?ct='.$category['category_id']; ?>">Xem thêm>></a></p>
					<?php endwhile; ?>
				</div><!-- End #featured -->
			</div><!-- End #primary -->
		</div><!-- End #mainContent -->
