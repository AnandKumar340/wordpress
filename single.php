<?php get_header(); ?>

<section class="flat-breadcrumb">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumbs">
						<li class="trail-item">
							<a href="index.php" title="">Home</a>
							<span><img src="images/icons/arrow-right.png" alt=""></span>
						</li>
						<li class="trail-item">
							<a href="shop.php" title="">Men's Products</a>
							<span><img src="images/icons/arrow-right.png" alt=""></span>
						</li>
						<li class="trail-end">
							<a href="#" title="">Single Page</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
    		
        <section class="flat-product-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
				
						<div class="product-item-slide">
						
							<div id="item-images" class="slider-for">
							<?php while (have_rows('product_images')) : the_row(); ?>
							  <div class="item">
									<img src="<?php the_sub_field('image'); ?>" class="item1">
								</div>
								<?php endwhile; ?>
								
							</div>

							<div id="item-thumbs" class="slider-nav">
							<?php while (have_rows('product_images')) : the_row(); ?>
								<div class="item">
									<img src="<?php the_sub_field('image'); ?>" alt="" onclick="currentSlide(1)"> 
								</div>
								<?php endwhile; ?>
								
							</div>
							
						</div>
					
						 
					</div>
					<div class="col-md-8">
						<div class="product-detail style4">
							<span class="bg"></span>
							<div class="header-detail">
								<h4 class="name"><?php the_field('title'); ?></h4>
								<div class="category">
									<?php the_field('category'); ?>
								</div>
								<div class="reviewed">
									<div class="review">
										<div class="queue">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
										<div class="text">
											<span>3 Reviews</span>
											<span class="add-review">Add Your Review</span>
										</div>
									</div>
									<div class="status-product">
										Availablity <span>In stock</span><span><a href="" class="text-white" target="_blank">View PDF</a></span>
									</div>
								</div>
							</div>
							<div class="content-detail">
								<div class="price">
									<div class="regular">
										<i class="fa fa-inr"></i> <?php the_field('price'); ?>
									</div>
									<div class="sale">
										<i class="fa fa-inr"></i><?php the_field('discount_price'); ?>
									</div>
								</div>
								<div class="info-text">
									<p><?php the_field('short_desc'); ?></p>
								</div>
								<div class="product-id">
									SKU: <span class="id"><?php the_field('sku'); ?></span>
								</div>
							</div><!-- /.content-detail -->
							<div class="footer-detail">
								<div class="quanlity-box">
									<div class="colors">
										<select name="color">
											<option value="">Select Color</option>
											<option value="">Black</option>
											<option value="">Red</option>
											<option value="">White</option>
										</select>
									</div>
									<div class="quanlity">
										<span class="btn-down"></span>
										<input type="text" name="number" value="" min="1" max="100" placeholder="Quanlity">
										<span class="btn-up"></span>
									</div>
								</div>
								<div class="box-cart style2">
									<div class="btn-add-cart">
										<a href="#" title=""><img src="images/icons/add-cart.png" alt="">Add to Cart</a>
									</div>
						
								</div>
								<div class="social-single">
									<span>SHARE</span>
									<ul class="social-list style2">
										<li>
											<a href="#" title="">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-pinterest" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-dribbble" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-google" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section class="flat-product-content">

			<ul class="product-detail-bar">
				<div class="row">
					<div class="col-md-12">
            			<div class="bestselrTitle">
                        	<h4>Product <span>Specs</span></h4>
                        </div>
					</div>
				</div>
			</ul>
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="tecnical-specs">
							<h4 class="name">
							
							<p><?php the_field('short_desc'); ?></p>
							</h4>
							<table>
								<tbody>
									<tr>
										<td>Product Code</td>
										<td><?php the_field('product_code'); ?></td>
									</tr>
									<tr>
									<tr>
										<td>Piece</td>
										<td> <?php the_field('piece'); ?></td>
									</tr>
									<tr>
										<td>Price</td>
										<td> <i class="fa fa-inr"></i> <?php the_field('price'); ?> </td>
									</tr>
									<tr>
										<td>Top Fabric</td>
										<td> <?php the_field('top_fabric'); ?></td>
									</tr>
									<tr>
										<td>Size</td>
										<td> <?php the_field('size'); ?></td>
									</tr>
								
									<tr>
										<td>Type</td>
										<td><?php the_field('type'); ?></td>
									</tr>
									
									<tr>
										<td>Color</td>
										<td><?php the_field('colors'); ?></td>
									</tr>
									<tr>
										<td>Pattern</td>
										<td><?php the_field('pattern'); ?></td>
									</tr>
									<tr>
										<td>Description</td>
										<td><?php the_field('desc'); ?><br>
						
 												
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>

			<?php get_footer(); ?>
<script>

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoPlay: true,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  arrows: false,
  centerMode: true,
  focusOnSelect: true
  
});
</script>