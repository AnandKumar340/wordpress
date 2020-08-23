        <?php
            include '_header.php';
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
						<li class="trail-item">
							<a href="shop.php" title="">Shop</a>
							<span><img src="images/icons/arrow-right.png" alt=""></span>
						</li>
						<li class="trail-end">
							<a href="#" title="">Shopping Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
		
	<section class="flat-shop-cart">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="flat-row-title style1">
						<h3>Shopping Cart</h3>
					</div>
					<div class="table-cart">
						<table>
							<thead>
								<tr>
									<th>Product</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="img-product">
											<img src="all_products/product_banner/19.jpg" alt="">
										</div>
										<div class="name-product">
										Cotton and Rayon <br>Kurties
										</div>
								
										<div class="price">
											<i class="fa fa-inr"></i> 450.00
										</div>
										<div class="clearfix"></div>
									</td>
									<td>
										<div class="quanlity">
											<span class="btn-down"></span>
											<input type="number" name="number" value="5" min="1" max="100" placeholder="Quanlity">
											<span class="btn-up"></span>
										</div>
									</td>
									<td>
										<div class="total"><i class="fa fa-inr"></i>450.00</div>
									</td>
									<td>
										<a href="#" title="">
											<img src="images/icons/delete.png" alt="">
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="img-product">
											<img src="all_products/product_banner/01.jpg" alt="">
										</div>
										<div class="name-product">
										Psyna  Kurtis
										</div>
										<div class="price">
											<i class="fa fa-inr"></i> 600.00
										</div>
										<div class="clearfix"></div>
									</td>
									<td>
										<div class="quanlity">
											<span class="btn-down"></span>
											<input type="number" name="number" value="5" min="1" max="100" placeholder="Quanlity">
											<span class="btn-up"></span>
										</div>
									</td>
									<td>
										<div class="total"><i class="fa fa-inr"></i>600.00</div>
									</td>
									<td>
										<span>
											<img src="images/icons/delete.png" alt="">
										</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="img-product">
											<img src="all_products/product_banner/02.jpg" alt="">
										</div>
										<div class="name-product">
										Leaf Shop Kurtis
										</div>
										<div class="price">
											<i class="fa fa-inr"></i> 460.00
										</div>
										<div class="clearfix"></div>
									</td>
									<td>
										<div class="quanlity">
											<span class="btn-down"></span>
											<input type="number" name="number" value="5" min="1" max="100" placeholder="Quanlity">
											<span class="btn-up"></span>
										</div>
									</td>
									<td>
										<div class="total"><i class="fa fa-inr"></i>460.00</div>
									</td>
									<td>
										<span>
											<img src="images/icons/delete.png" alt="">
										</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="img-product">
											<img src="all_products/product_banner/13.jpg" alt="">
										</div>
										<div class="name-product">
										Dola Silk Jacquard <br>Kurti
										</div>
										<div class="price">
											<i class="fa fa-inr"></i> 1150.00
										</div>
										<div class="clearfix"></div>
									</td>
									<td>
										<div class="quanlity">
											<span class="btn-down"></span>
											<input type="number" name="number" value="5" min="1" max="100" placeholder="Quanlity">
											<span class="btn-up"></span>
										</div>
									</td>
									<td>
										<div class="total"><i class="fa fa-inr"></i>1150.00</div>
									</td>
									<td>
										<span>
											<img src="images/icons/delete.png" alt="">
										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="form-coupon">
							<form action="#" method="get" accept-charset="utf-8">
								<div class="coupon-input">
									<input type="text" name="coupon code" placeholder="Coupon Code">
									<button type="submit">Apply Coupon</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cart-totals">
						<h3>Cart Totals</h3>
						<form action="#" method="get" accept-charset="utf-8">
							<table>
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td class="subtotal"><i class="fa fa-inr"></i>2,589.00</td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td class="btn-radio">
											<div class="radio-info">
												<input type="radio" id="flat-rate" checked name="radio-flat-rate">
												<label for="flat-rate">Flat Rate: <span><i class="fa fa-inr"></i>3.00</span></label>
											</div>
											<div class="radio-info">
												<input type="radio" id="free-shipping" name="radio-flat-rate">
												<label for="free-shipping">Free Shipping</label>
											</div>
											<div class="btn-shipping">
												<a href="#" title="">Calculate Shipping</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>Total</td>
										<td class="price-total"><i class="fa fa-inr"></i>1,591.00</td>
									</tr>
								</tbody>
							</table>
							<div class="btn-cart-totals">
								<a href="#" class="update" title="">Update Cart</a>
								<a href="#" class="checkout" title="">Proceed to Checkout</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    
    <section class="flat-row flat-iconbox style1 background mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="iconbox style1 v1">
						<div class="box-header">
							<div class="image">
								<img src="images/icons/car.png" alt="">
							</div>
							<div class="box-title">
								<h3>Worldwide Shipping</h3>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="iconbox style1 v1">
						<div class="box-header">
							<div class="image">
								<img src="images/icons/order.png" alt="">
							</div>
							<div class="box-title">
								<h3>Order Online Service</h3>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="iconbox style1 v1">
						<div class="box-header">
							<div class="image">
								<img src="images/icons/payment.png" alt="">
							</div>
							<div class="box-title">
								<h3>Secure Payment</h3>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="iconbox style1 v1">
						<div class="box-header">
							<div class="image">
								<img src="images/icons/return.png" alt="">
							</div>
							<div class="box-title">
								<h3>Return 30 Days</h3>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
            
            
        <?php
            include '_footer.php';
        ?>