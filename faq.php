<?php
			/**
			 * Template Name: FAQ
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
							<a href="#" title="">FAQ's</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
		
	<div class="bestselrTitle">
							<h4>Frequently <span>Asked Questions</span></h4>
                        </div>
<section class="faq">
	<div class="container ">
		<div class="panel-group" id="faqAccordion">
			<?php while (have_rows('section_1')) : the_row(); ?>
				<div class="panel panel-default ">
					<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
						<h4 class="panel-title">
							<a href="#" class="ing"><?php the_sub_field('title'); ?></a>
					</h4>
					</div>
					<div id="question0" class="panel-collapse collapse" style="height: 0px;">
						<div class="panel-body">

							<p><?php the_sub_field('content'); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<!--/panel-group-->
	</div>
</section>

<?php
            get_footer() ;
?>