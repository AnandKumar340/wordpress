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
						<li class="trail-end">
							<a href="#" title="">Account</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="bestselrTitle">
							<h4>Signup <span>New User</span></h4>
                        </div>	
<section class="signup_form my-4">
	<div class="container my-4">
		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="form_inner">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Full Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email Id" required>
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" id="pass" aria-describedby="pass" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="cpass" aria-describedby="cpass" placeholder="Enter Confirm Password" required>
						</div>
						<div class="form-group">
							<input type="Number" class="form-control" id="number" aria-describedby="name" placeholder="Enter Mobie Number" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="text" aria-describedby="text" placeholder="Enter Address (Optional)">
						</div>
					
						<button type="submit" class="btn3">Signup</button> 
						<div class="login_button">
						<b>Have you an account? Login here<b>
						<!-- Button trigger modal -->
						<button type="button" class="btn3" data-toggle="modal" data-target="#exampleModalCenter">Login </button>
								<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					
					<div class="modal-content">
					
						
					<div class="modal-header">
				
						<h2 class="login_modal_title" id="">Login Here</h2>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="">
						<div class="form-group">
							<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email Id" required>
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" id="pass" aria-describedby="pass" placeholder="Enter Password" required>
						</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn3">Login</button>
					</div>
					</div>
				</div>
					</div>
					</form>
				</div>
			</div>


			

		
				</div>
			</div>
		</div>
	</section>


    
    <?php
            include '_footer.php';
        ?>