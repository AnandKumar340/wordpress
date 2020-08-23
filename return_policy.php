<?php
			/**
			 * Template Name: Return Policy
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
							<a href="#" title="">Shiping & Return Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<section class="return_policy">
<div class="bestselrTitle">
							<h4>Return <span>Policy</span></h4>
                        </div>
	<div class="container">
		<div class="row">
			
				<div class="col-12">
					<div class="return_inner">
						<div class="content">
						
							<div class="return_content">
							<?php while (have_rows('section_1')) : the_row(); ?>
								<ul>
									<li>
									<span class="sr">Step - <?php the_sub_field('sno.'); ?></span>  <?php the_sub_field('content'); ?></li>
								</ul>
								<?php endwhile; ?>
							</div>
							
						</div>
					</div>
				</div>
			
		</div>
	</div>	
</section>
    


<?php
            get_footer() ;
?>