		<?php
			/**
			 * Template Name: Home 
			 */
            get_header() ;
        ?>
<!-- Slider Section Start -->
<div class="slider-section section">
        <div class="slider-wrapper">
		<?php while (have_rows('carousel')) : the_row(); ?>
            <div class="slider-slide" style="background-image: url('<?php the_sub_field('image'); ?>'); background-size: cover; background-repeat : no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9">
                            <div class="slide-content1" style="background-image:url(images/slider/shape.png);">
                                <div class="slide-content-inner">
                                	<h2> <?php the_sub_field('title1'); ?></h2>
                                    <h1> <?php the_sub_field('title2'); ?></h1>
                                    <button class="btn">SHOP NOW ! </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		<?php endwhile; ?>
        </div>
    </div>
    <!-- Slider Section End -->
		
        <section class="flat-row flat-iconbox style1 background">
			<div class="container">
				<div class="row">
				<?php while (have_rows('process')) : the_row(); ?>
					<div class="col-md-3">
						<div class="iconbox style1 v1">
							<div class="box-header">
								<div class="image">
									<img src="<?php the_sub_field('image'); ?>" alt="">
								</div>
								<div class="box-title">
									<h3><?php the_sub_field('title'); ?></h3>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		</section>
        
		<section class="flat-row flat-banner-box">
			<div class="container">
				<div class="row">
					<?php while (have_rows('banner1')) : the_row(); ?>
						<div class="col-md-4">
							<div class="banner-box">
								<div class="inner-box">
									<a href="#" title="">
										<img src="<?php the_sub_field('image'); ?>" alt="">
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
		<!-- product_categories start -->
		<section class="product_categories">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
            			<div class="bestselrTitle">
                        	<h4>Our Products <span>Categories</span></h4>
                        	<p>Get your hands on the hottest sellers right now!</p>
                        </div>
					</div>
				</div>
			<div class="row">
				<?php while (have_rows('product_category')) : the_row(); ?>
					<div class="col-md-3 my-3">
						<a href="all_products.php">
						<div class="product_cat_inner">
								<img src="<?php the_sub_field('image'); ?>" alt="All Products" class="image">
								<div class="overlay">
									<div class="text">
										<div class="text_inner">
											<p><?php the_sub_field('title'); ?></p>
											<button class="btn2">SHOP NOW</button>
										</div>
									</div>
							</div>
						</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>	

<!-- Product section start -->
	<section class="product_section">
		<div class="container">
            	<div class="row">
					<div class="col-md-12">
            			<div class="bestselrTitle">
                        	<h4>Trending <span>Now</span></h4>
                        	<p>Get your hands on the hottest sellers right now!</p>
                        </div>
					</div>
				</div>
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 12,
					'order' => 'DESC',
					'orderby' => 'id'
				);
				$catquery = new WP_Query($args); ?>
				<?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
					<div class="col-sm-6 col-lg-3">
						<div class="product-box">
							<div class="imagebox">
								<span class="item-new">NEW</span>
								<ul class="box-image">
										<li>
											<a href="<?php the_permalink() ?>" title="">
												<img src="<?php the_field('banner_image', $post->ID); ?>" alt="">
											</a>
										</li>
								</ul><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Women</a>
									</div>
									<div class="product-name">
										<a href="<?php the_permalink() ?>" title=""><?php the_title(); ?></a>
									</div>
									<div class="price">
										<span class="regular"><i class="fa fa-inr"></i><?php the_field('price', $post->ID); ?></span>
										<span class="sale"> <i class="fa fa-inr"></i> <?php the_field('discount_price', $post->ID); ?></span>
									</div>
								</div><!-- /.box-content -->
								<div class="box-bottom">
									<div class="btn-add-cart">
										<a href="#" title="">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/add-cart.png" alt="">Add to Cart
										</a>
									</div>
								</div><!-- /.box-bottom -->
							</div><!-- /.imagebox -->
						</div><!-- /.product-box -->
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>	
<!-- product section end -->

<!-- banner section 2 start -->
		<section class="banner_section2 my-4">
			<div class="row my-4">
				<?php while (have_rows('banner2')) : the_row(); ?>
					<div class="col-md-4 my-2">
						<div class="banner_inner">
							<img src="<?php the_sub_field('image') ?>" alt="Banner Images" class="image">
							<div class="overlay">
								<div class="text"><a class="btn bg-warning" href="<?php the_sub_field('url') ?>">VIEW MORE</a></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
<!-- banner section 2 end -->
<!-- Article Section start -->
	<section class="article" style="background-image : url('<?php the_field('article_bg') ?>');">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="content">
							<h2><?php the_field('article_content') ?></h2>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content">
							<!-- Button trigger modal -->
							<a href="<?php the_field('article_url'); ?>">Click Here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Article Section End -->


		<section class="flat-imagebox style3">
			<div class="container">
				<div class="row">
					<?php while (have_rows('special_offers')) : the_row(); ?>
						<div class="col-md-12">
							<div class="owl-carousel">
								<div class="box-counter">
									<div class="counter">
										<span class="special"><?php the_sub_field('title'); ?></span>
										<div class="counter-content">
											<p><?php the_sub_field('content'); ?></p>
											
										</div><!-- /.counter-content -->
									</div><!-- /.counter -->
									<div class="product-item">
										<div class="imagebox style3">
											<div class="box-image save">
												<a href="w_4.php" title="">
													<img src="<?php the_sub_field('image') ?>" alt="">
												</a>
												<span>Save <i class="fa fa-inr"></i> <?php the_sub_field('save_price') ?></span>
											</div><!-- /.box-image -->
											<div class="box-content">
												<div class="product-name">
													<a href="w-1.php" title=""> <?php the_sub_field('product_title') ?></a>
												</div>
												<?php the_sub_field('description') ?>
												<div class="price">
													<span class="sale"><i class="fa fa-inr"></i> <?php the_sub_field('discount_price') ?></span>
													<span class="regular"><i class="fa fa-inr"></i>  <?php the_sub_field('real_price') ?></span>
												</div>
											</div><!-- /.box-content -->
											<div class="box-bottom">
												<div class="btn-add-cart">
													<a href="<?php the_permalink(''); ?>" title="">
														<img src="images/icons/add-cart.png" alt="">Add to Cart
													</a>
												</div>
												<div class="compare-wishlist">
													<a href="#" class="compare" title="">
														<img src="images/icons/compare.png" alt="">Compare
													</a>
													<a href="#" class="wishlist" title="">
														<img src="images/icons/wishlist.png" alt="">Wishlist
													</a>
												</div>
											</div><!-- /.box-bottom -->
										</div><!-- /.imagbox style3 -->
									</div><!-- /.product-item -->
								</div><!-- /.box-counter -->
							</div><!-- /.owl-carousel-2 -->
						</div><!-- /.col-md-12 -->
					<?php endwhile; ?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-imagebox style3 -->


		<!-- Testimonial Section start -->
	<section class="testimonial">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
            			<div class="bestselrTitle">
                        	<h4>Clients <span>Says</span></h4>
                        	<p>Get your hands on the hottest sellers right now!</p>
                        </div>
					</div>
				</div>
				<div class="row">
					<div class="owl-carousel">
						<div class="col-12">
							<div class="testimonial_inner">
								<img src="images/testimonial/01.jpg" alt="Testimonial Image" class="image">
								<div class="text">
									<h3>Jillie, Seattle</h3>
									<p>I love the clothes from this website!!
										I am so glad I found them.<br>Everything 
										has been spot on, fits wonderfully, styles 
										are trendy and lots to choose from!!
										Thanks for being here for us!!!
									</p>
										<div class="rating">	  
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
										</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="testimonial_inner">
								<img src="images/testimonial/02.jpg" alt="Testimonial Image" class="image">
								<div class="text">
									<h3>James, UAE</h3>
									<p>I love the clothes from this website!!
										I am so glad I found them.<br>Everything 
										has been spot on, fits wonderfully, styles 
										are trendy and lots to choose from!!
										Thanks for being here for us!!!
									</p>
										<div class="rating">	  
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
										</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="testimonial_inner">
								<img src="images/testimonial/03.jpg" alt="Testimonial Image" class="image">
								<div class="text">
									<h3>Jarina, UK</h3>
									<p>I love the clothes from this website!!
										I am so glad I found them.<br>Everything 
										has been spot on, fits wonderfully, styles 
										are trendy and lots to choose from!!
										Thanks for being here for us!!!
									</p>
										<div class="rating">	  
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
										</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="testimonial_inner">
								<img src="images/testimonial/01.jpg" alt="Testimonial Image" class="image">
								<div class="text">
									<h3>Joya, Bangladesh</h3>
									<p>I love the clothes from this website!!
										I am so glad I found them.<br>Everything 
										has been spot on, fits wonderfully, styles 
										are trendy and lots to choose from!!
										Thanks for being here for us!!!
									</p>
										<div class="rating">	  
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star-o"></span>
												<span class="fa fa-star-o"></span>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<!-- Testimonial Section end -->
		<section class="flat-imagebox style4">
			<div class="container">
            	<div class="row">
					<div class="col-md-12">
            			<div class="bestselrTitle">
                        	<h4>Featured <span>Products</span></h4>
                        	<p>Get your hands on the hottest sellers right now!</p>
                        </div>
					</div>
				</div>
				<div class="row">
				<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 12,
					'order' => 'DESC',
					'orderby' => 'id'
				);
				$catquery = new WP_Query($args); ?>
				<?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
					<div class="col-sm-6 col-lg-3">
						<div class="product-box">
							<div class="imagebox">
								<span class="item-new">NEW</span>
								<ul class="box-image">
										<li>
											<a href="<?php the_permalink() ?>" title="">
												<img src="<?php the_field('banner_image', $post->ID); ?>" alt="">
											</a>
										</li>
								</ul><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Women</a>
									</div>
									<div class="product-name">
										<a href="<?php the_permalink() ?>" title=""><?php the_title(); ?></a>
									</div>
									<div class="price">
										<span class="regular"><i class="fa fa-inr"></i><?php the_field('price', $post->ID); ?></span>
										<span class="sale"> <i class="fa fa-inr"></i> <?php the_field('discount_price', $post->ID); ?></span>
									</div>
								</div><!-- /.box-content -->
								<div class="box-bottom">
									<div class="btn-add-cart">
										<a href="#" title="">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/add-cart.png" alt="">Add to Cart
										</a>
									</div>
								</div><!-- /.box-bottom -->
							</div><!-- /.imagebox -->
						</div><!-- /.product-box -->
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			</div>
	</section>

        <?php
			get_footer() ;
		?>
