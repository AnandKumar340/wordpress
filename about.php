<?php
			/**
			 * Template Name: About Us
			 */
            get_header() ;
        ?>
<section class="flat-breadcrumb">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumbs">
						<li class="trail-item">
							<a href="index.php" title="">Home</a>
							<span><img src="images/icons/arrow-right.png" alt=""></span>
						</li>
						<li class="trail-end">
							<a href="#" title="">About Us</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<?php while (have_rows('section_1')) : the_row(); ?>
	<section class="flat-about">
						<div class="bestselrTitle">
							<h4>Director's <span> Quotes</span></h4>
                        </div>
		<div class="container">
			<div class="row">
			
					<div class="col-md-6">
						<div class="image-about">
							<img src="<?php the_sub_field('image'); ?>" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-about">
							<div class="title">
								<h3><?php the_sub_field('title'); ?></h3>
							</div>
							<div class="content">
							<p>
							<?php the_sub_field('content'); ?>

									</p>
								</p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>

	<section class="motto">
		<div class="container">
			<div class="row">
			<?php while (have_rows('section_2')) : the_row(); ?>
				<div class="col-md-6 my-2">
					<article class="main-post">
							<div class="featured-post">
								<a href="#" title="">
									<img src="<?php the_sub_field('image'); ?>" alt="">
								</a>
							</div>
							<div class="content-post my-2">
								<h2 class="title-post">
									<a href="#" title=""><?php the_sub_field('title'); ?></a>
								</h2><br>
								<div class="entry-post">
									<p>
									<?php the_sub_field('content'); ?>
									</p>
								</div>
							</div>
						</article>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	</section>


	<!-- Team Gallery -->
	<section class="team_gallery">
						<div class="bestselrTitle">
							<h4>Meet <span>Our Team</span></h4>
                        </div>
			<div class="container my-4">
				<div class="row">		
					<?php while (have_rows('head_staff_image')) : the_row(); ?>				
						<div class="col-md-4 my-3">
							<div class="image_inner">
								<img src="<?php the_sub_field('image'); ?>" alt="Team" class="image">
									<div class="middle">
										<div class="text"><?php the_sub_field('title'); ?></div>
									</div>
							</div>
						</div>
					<?php endwhile; ?>
						<div class="col-md-8">
							<div class="row">
							<?php while (have_rows('staff_image')) : the_row(); ?>	
								<div class="col-md-6 my-3">
									<div class="image_inner">
										<img src="<?php the_sub_field('image'); ?>" alt="Team" class="image">
										<div class="middle">
											<div class="text"><?php the_sub_field('title'); ?></div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							</div>							
						</div>
					</div>
				</div>
			</section>

	<!-- Team Gallery -->
	<?php
			get_footer() ;
		?>
