<?php
			/**
			 * Template Name: Contact Us
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
							<a href="#" title="">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
		
	

        <section class="flat-iconbox style4">
        	<div class="container">
        		<div class="row">
				<?php while (have_rows('address')) : the_row(); ?>
        			<div class="col-md-6 col-lg-6 my-4">
        				<div class="contact-iconbox ">
        					<div class="box-header">
        						<div class="image">
        							<img src="<?php the_sub_field('image'); ?>" alt="">
        						</div>
        						
        					</div>
        					<div class="box-content">
							<div class="title">
        							<h3><?php the_sub_field('title'); ?></h3>
        						</div>
        						<p>
									<?php the_sub_field('content'); ?>
        						</p>
        					</div>
        				</div>
        			</div>
				<?php endwhile; ?>
				<?php while (have_rows('contacts')) : the_row(); ?>
        			<div class="col-md-6 col-lg-6 my-4">
        				<div class="contact-iconbox ">
        					<div class="box-header">
        						<div class="image">
        							<img src="<?php the_sub_field('image'); ?>" alt="">
        						</div>
        						
        					</div>
        					<div class="box-content">
							<div class="title">
        							<h3><?php the_sub_field('title'); ?></h3>
        						</div>
        						<p>
									<?Php the_sub_field('content'); ?>
        						</p>
        					</div>
        				</div>
        			</div>
				<?php endwhile; ?>
				<?php while (have_rows('mails')) : the_row(); ?>
        			<div class="col-md-6 col-lg-6 my-4">
        				<div class="contact-iconbox ">
        					<div class="box-header">
        						<div class="image">
        							<img src="<?php the_sub_field('image'); ?>" alt="">
        						</div>
        						
        					</div>
        					<div class="box-content">
							<div class="title">
        							<h3><?php the_sub_field('title'); ?></h3>
        						</div>
        						<p>
								<?php the_sub_field('content'); ?>
        						</p>
        					</div>
        				</div>
        			</div>
				<?php endwhile; ?>
				<?php while (have_rows('social_links')): the_row(); ?>
        			<div class="col-md-6 col-lg-6 my-4">
        				<div class="contact-iconbox ">
        					<div class="box-header">
        						<div class="image">
        							<img src="<?php the_sub_field('image'); ?>" alt="">
        						</div>
        						
        					</div>
        					<div class="box-content">
							<div class="title">
        							<h3><?php the_sub_field('title'); ?></h3>
								</div>
								<div class="social-links">
								<?php while (have_rows('social_area')): the_row(); ?>
									<a href="<?php the_sub_field('url'); ?>" class="icons"><i class="fa <?php the_sub_field('fa_icon'); ?>"></i></a>
								<?php endwhile; ?>
								</div>
        					</div>
        				</div>
        			</div>
				<?php endwhile; ?>
        		</div>
        	</div>
        </section>

        <section class="flat-contact">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-6">
        				<div class="form-contact center">
        					<div class="form-contact-header">
        						<h3>Leave us a Message</h3>
        						<p>
        							Leave a message for your any queries, we'll contact you under 24 hours.
        						</p>
        					</div><!-- /.form-contact-header -->
        					<div class="form-contact-content">
        						<form action="#" method="post" id="form-contact" accept-charset="utf-8">
									<div class="form-box one-half name-contact">
										<label for="name">First name*</label>
										<input type="text" id="name" name="name" placeholder="Your Name">
									</div>
									<div class="form-box one-half password-contact">
										<label for="password-contact">Email Address*</label>
										<input type="email" id="email" name="email" placeholder="Your Email Id">
									</div>
									<div class="form-box">
										<label for="subject">Subject</label>
										<input type="text" id="subject" name="subject" placeholder="Subject">
									</div>
									<div class="form-box">
										<label for="comment">Comment</label>
										<textarea name="comment" id="comment"></textarea>
									</div>
									<div class="form-box">
										<button type="submit" class="contact">Send</button>
									</div>
								</form>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-6">
							<div class="map">
					<iframe src="<?php the_field('google_map_link'); ?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>			</div>
        			</div>
        		</div>
        	</div>
		</section>
<?php
			get_footer() ;
		?>