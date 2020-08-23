<?php
			/**
			 * Template Name: Terms Condition
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
							<a href="#" title="">Terms and Conditions</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
		
	<section class="flat-term-conditions">
	<div class="bestselrTitle">
							<h4>Terms & <span>Conditions</span></h4>
                        </div>
		<div class="container">
			<div class="row">
				<?php while (have_rows('section_1')) : the_row(); ?>
					<div class="col-md-12">
						<div class="term-conditions">
							<div class="text-wrap">
								<h3><?php the_sub_field('title'); ?></h3>
								<p><?php the_sub_field('content'); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php
            get_footer() ;
?>