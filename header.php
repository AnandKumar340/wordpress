<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title> Shrivivekananad Fashion Store</title>

	<meta name="author" content="CreativeLayers">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/responsive.css">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.png">

</head>

<body>
	<section id="header" class="header">
		<div class="header-bottom style3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<div id="logo" class="logo">
							<a href="index.php" title="">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-7">
						<div class="nav-wrap">
							<div id="mainnav" class="mainnav">
								<ul class="menu">
									<li class="column-1"><a href="index.php" title="">Home</a></li>
									
									<li class="column-1">
										<a href="men.php" title="">Men's</a>
										<ul class="submenu">
											<li>
												<a href="shop.php" title="">t-shirt</a>
											</li>
											<li>
												<a href="shop.php" title="">Shirt</a>
											</li>
											<li>
												<a href="shop.php" title="">Jeans</a>
											</li>
											<li>
												<a href="shop.php" title="">Trousers</a>
											</li>
										</ul>
									</li>
									<li class="column-1">
										<a href="women.php" title="">Women's</a>
										<ul class="submenu">
											<li>
												<a href="shop.php" title="">t-shirt</a>
											</li>
											<li>
												<a href="shop.php" title="">Shirt</a>
											</li>
											<li>
												<a href="shop.php" title="">Jeans</a>
											</li>
											<li>
												<a href="shop.php" title="">Kurtis</a>
											</li>
										</ul>
									</li>
									<li class="column-1">
										<a href="kid.php" title="">Kid's</a>
										<ul class="submenu">
											<li>
												<a href="shop.php" title="">t-shirt</a>
											</li>
											<li>
												<a href="shop.php" title="">Shirt</a>
											</li>
											<li>
												<a href="shop.php" title="">Jeans</a>
											</li>
											<li>
												<a href="shop.php" title="">Trousers</a>
											</li>
										
										</ul>
									</li>
									<li class="column-1"><a href="all_products.php" title="">All Products</a></li>
									<li class="column-1"><a href="about.php" title="">About  Us</a></li>
									<li class="column-1"><a href="contact.php" title="">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="btn-menu">
							<span></span>
						</div>
					</div>
					
					<div class="col-md-2 side_menu">
						<div class="row">
							<div class="col-6 my-3">
								<div class="login my-2">
									<a href="account.php" title="">Login</a>
								</div>
							</div>
							
							<div class="col-6">
								<div class="box-cart">		
									<div class="inner-box">
										<a href="#" title="">
											<div class="icon-cart">
												<img src="images/icons/cart.png" alt="">
												<span>4</span>
											</div>
										</a>
										<div class="dropdown-box">
											<ul>
												<li>
													<div class="img-product">
														<img src="all_products/product_banner/01.jpg" alt="">
													</div>
													<div class="info-product">
														<div class="name">
														Psyna  Kurtis
														</div>
														<div class="price">
															<span>1 x</span>
															<span><i class="fa fa-inr"></i> 600.00</span>
														</div>
													</div>
													<div class="clearfix"></div>
													<span class="delete">x</span>
												</li>
												<li>
													<div class="img-product">
														<img src="all_products/product_banner/02.jpg" alt="">
													</div>
													<div class="info-product">
														<div class="name">
														Leaf Shop Kurtis
														</div>
														<div class="price">
															<span>1 x</span>
															<span><i class="fa fa-inr"></i> 460.00</span>
														</div>
													</div>
													<div class="clearfix"></div>
													<span class="delete">x</span>
												</li>
												<li>
													<div class="img-product" href="w_5.php">
														<img src="all_products/product_banner/13.jpg" alt="">
													</div>
													<div class="info-product">
														<div class="name">
														Dola Silk Jacquard Kurti
														</div>
														<div class="price">
															<span>1 x</span>
															<span><i class="fa fa-inr"></i> 1150.00</span>
														</div>
													</div>
													<div class="clearfix"></div>
													<span class="delete">x</span>
												</li>
											</ul>
											<div class="total">
												<span>Subtotal:</span>
												<span class="price"><i class="fa fa-inr"></i> 1,060.00</span>
											</div>
											<div class="btn-cart">
												<a href="cart.php" class="view-cart" title="">View Cart</a>
												<a href="shop_checkout.php" class="check-out" title="">Checkout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Search Form -->
	<div class="search_box_modal">
	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="header_search_box">
				<form action="" method="post">
					<input type="text" name="search" autocomplete="off" placeholder="SEARCH"><input type="submit" value="SEARCH">
				</form>
			</div>
		</div>
		</div>
	</div>
	<!-- <?php

wp_nav_menu(

	array(

		'theme_location'    => 'mainnav',

		'menu_class'        => 'wsmenu-list',

		'container'         => 'ul',

		'before'          => '',

		'after'           => '',


	)

);

?> -->