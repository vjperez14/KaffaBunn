<?php
	session_start();
	include("php/fill.php");
	$isActive = isset($_SESSION['email']);
	if($isActive){
		$user = $_SESSION['email'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kaffa Bunn Cafe</title>
	<link rel="icon" href="images/logo.png" type="image/gif">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/checkout.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="script/checkout.js"></script>
	<script>
    <?php
		switch ($isActive) {
			case true:{
			echo "$(document).ready(function(){
				$('#firstname').val('" . $firstname . "');
				$('#lastname').val('" . $lastname . "');
				$('#city').val('".$city."');
				$('#street').val('".$street."');
				$('#streetopt').val('".$streetopt."');
				$('#town').val('".$town."');
				$('#zip').val('".$zip."');
				$('#phone').val('".$phone."');
				$('#e-mail').val('".$user."');

			});";
			break;
			}
			default:{
			break;
			}
		}
	?>
    </script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<img src="images/logo.png" width="50" height="55" style="margin-bottom: 15px;"> &nbsp
			<a class="navbar-brand" href="index.php" style="color: #CD853F;">Kaffa Bunn<small
					style="color: #CD853F;">Cafe</small></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">About</a></li>
					<li class="nav-item"><a href="menu.php" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Menu</a></li>
					<li class="nav-item"><a href="index.php #booking" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Reservation</a></li>
					<li class="nav-item"><a href="index.php #ftco-testimony" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Gallery</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link"
							style=" color: black; font-family: 'Antic Slab';">Contact</a></li>
					<li class="nav-item"><a href="help.php" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Help</a></li>
					<nav class="main-nav">
						<?php
							switch ($isActive) {
								case 'value' : {
									echo '<li class="nav-item" style="margin-top: 52%;"><a class="" href="php/logout.php" style="color: black; font-family: \'Antic Slab\'">LOGOUT</a></li>';
								break;
								}
								default : {
									echo '<li class="nav-item" style="margin-top: 52%;"><a class="cd-login" href="#0" style="color: black; font-family: \'Antic Slab\'">LOGIN</a></li>';
								break;
								}
							}
						?>
					</nav>
					<li class="nav-item cart" onClick='fetchCart();' id="cartNav" <?php
						if(!$isActive){
							echo "style='display:none;'";
						}
						else{
							echo "style='margin-top: 3%; margin-left: 5%;'";
						}
						?>><img  data-toggle="modal" data-target="#cartModal" src="https://img.icons8.com/ultraviolet/40/000000/shopping-cart.png"/></span></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>.
	<script src="script/checkout.js"></script>
	<!-- Modal -->
	<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header ">
					<h5 class="modal-title " id="exampleModalLabel"
						style="color: #CD853F; font-family: Lobster; font-size: 40px;">My Cart <i
							class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="cart-modal">
					<table class="table table-image" style="color: black; font-size: 18px;">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Price</th>
								<th scope="col">Action/s</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" onclick="checkOut(document.getElementById('total').innerHTML);" class="btn btn-primary"
						style="border-radius: 25px; padding: 20px; font-family: Poppins; font-size: 15px; font-weight: bold;">Proceed
						to Checkout <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="cd-user-modal">
		<!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container">
			<!-- this is the container wrapper -->
			<center>
				<br>
				<img src="images/logo.png" width="50" height="55"> &nbsp
				<a class="navbar-brand" href="index.php" style="color: #CD853F;">Kaffa Bunn<small style="color: #CD853F;">Cafe</small></a>
				<br>
			</center>
			<ul class="cd-switcher">
				<li><a href="#0" style="font-family: 'Lobster', cursive; color: #CD853F">Log In</a></li>
				<li><a href="#0" style="font-family: 'Lobster', cursive; color: #CD853F">Sign Up</a></li>
			</ul>
			<div id="cd-login">
				<!-- log in form -->
				<form class="cd-form" method="POST" action="php/loginprocess.php">
					<p class="fieldset" >
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="email" name="email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="loginpass" name="loginpass" type="password" placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<?php
						if(isset($_SESSION["error"])) {
							$error = $_SESSION["error"];
							echo "<span style='color:red;'>$error</span>";
						}
                	?> 
					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>
					<p class="fieldset">
						<input class="full-width" type="submit" id="login" name="login" value="Login"><br>
						<a href="#0" class="cd-form-bottom-message">Forgot your password?</a>
					</p>
					<br><br>
				</form>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->
			<div id="cd-signup">
				<!-- sign up form -->
				<form class="cd-form" id="RegForm" method="POST">
					<p class="fieldset">
						<label class="image-replace cd-username" for="refirstname">First Name</label>
						<input class="full-width has-padding has-border" id="regfirstname" name="regfirstname" type="text"
							placeholder="First Name" required>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="reglastname">Last Name</label>
						<input class="full-width has-padding has-border" id="reglastname" name="reglastname" type="text"
							placeholder="Last Name" required>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-email" for="regemail">E-mail</label>
						<input class="full-width has-padding has-border" id="regemail" name="regemail" type="email"
							placeholder="E-mail" required>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="regpassword">Password</label>
						<input class="full-width has-padding has-border" id="regpassword" name="regpassword" type="password"
							placeholder="Password" required>
						<!-- <a href="#0" class="hide-password">Hide</a> -->
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-city" for="regcity">City</label>
						<input class="full-width has-padding has-border" id="regcity" name="regcity" type="text"
							placeholder="City" required>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<div class="row">
						<div class="col-md-6">
							<p class="fieldset">
								<label class="image-replace cd-street" for="regstreet">Street Address</label>
								<input class="full-width has-padding has-border" id="regstreet" name="regstreet" type="text"
									placeholder="Street Address" required>
								<span class="cd-error-message">Error message here!</span>
							</p>
						</div>
						<div class="col-md-6">
							<p class="fieldset">
								<label class="image-replace cd-street" for="regstreetopt">Street Address</label>
								<input class="full-width has-padding has-border" id="regstreetopt" name="regstreetopt" type="text"
									placeholder="Appartment, suite, unit etc: (optional)">
								<span class="cd-error-message">Error message here!</span>
							</p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<p class="fieldset">
								<label class="image-replace cd-town" for="regtown">Town / Barangay</label>
								<input class="full-width has-padding has-border" id="regtown" name="regtown" type="text"
									placeholder="Town / Barangay" required>
								<span class="cd-error-message">Error message here!</span>
							</p>
						</div>
						<div class="col-md-6">
							<p class="fieldset">
								<label class="image-replace cd-zip" for="regzip">Postcode / ZIP</label>
								<input class="full-width has-padding has-border" id="regzip" name="regzip" type="text"
									placeholder="Postcode / ZIP" required>
								<span class="cd-error-message">Error message here!</span>
							</p>
						</div>
					</div>
					<p class="fieldset">
						<label class="image-replace cd-phone" for="regphone">Phone</label>
						<input class="full-width has-padding has-border" id="regphone" name="regphone" type="text" onkeypress="return onlyNumberKey(event)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "11" maxlenght="11" title="Valid phone number format: XXX-XXX-XXXX"
							placeholder="Phone" required>
						<span class="cd-error-message">Error message here!</span>
						<script> 
							function onlyNumberKey(evt) {   
								// Only ASCII charactar in that range allowed 
								var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
								if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
									return false; 
								return true; 
							} 
						</script>
					</p>
					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms and Condition.</a></label>
					</p>
					<p class="fieldset">
						<!-- <button type="button" id="savebtn" class="btn btn-primary py-3 px-5"> Sign Up </button> -->
						<input class="full-width has-padding" type="submit" id="savebtn" value="Create account">
					</p>
				</form>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->
			<div id="cd-reset-password">
				<!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link
					to create a new password.</p>
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email"
							placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>
				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
	<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bgform.jpeg);"
		data-stellar-background-ratio="0.5">
		<div class="overlay" style="opacity: .4"></div>
		<center>
			<div class="heading-section ftco-animate ">
				<br>
				<span class="subheading">Checkout <i class="fa fa-check-square-o" aria-hidden="true"></i></span>
				<h2 style="font-size: 20px;"><i class="fa fa-pagelines"></i> Purchase Information</h2><br>
			</div>
		</center>
		<section class="ftco-section" style="margin-top: -5%; margin-left: 25%">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 ftco-animate">
						<form action="php/debitinfo.php" method="POST" class="billing-form ftco-bg-brown p-3 p-md-5">
							<h3 class="mb-4 billing-heading" style="font-weight: bold;">Billing Details</h3>
							<div class="row align-items-end">
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstname">First Name</label>
										<input type="text" class="form-control" id="firstname" name="firstname" placeholder="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lastname">Last Name</label>
										<input type="text" class="form-control" id="lastname" name="lastname" placeholder="">
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="city">City</label>
										<input type="text" class="form-control" id="city" name="city" placeholder="">
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="streetaddress">Street Address</label>
										<input type="text" class="form-control" id="street" name="street" placeholder="House number and street name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="streetopt" name="streetopt" placeholder="Appartment, suite, unit etc: (optional)">
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="towncity">Town / Barangay</label>
										<input type="text" class="form-control" id="town" name="town" placeholder="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="postcodezip">Postcode / ZIP *</label>
										<input type="text" class="form-control" id="zip" name="zip" placeholder="">
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="emailaddress">Email Address</label>
										<input type="text" class="form-control" id="e-mail" name="e-mail" placeholder="">
									</div>
								</div>
								<div class="w-100"></div>
							</div>
						<div class="row mt-5 pt-3 d-flex">
							<div class="col-md-6 d-flex">
								<div class="cart-detail cart-total ftco-bg-brown p-3 p-md-4">
									<h3 class="billing-heading mb-4" style="font-weight: bold;">Cart Total</h3><br>
									<p class="d-flex">
										<span style="color: white;">Subtotal</span>
										<span style="color: white;">
											<?php
												if(isset($_GET['subTotal'])){
													$_SESSION['subTotal'] = $_GET['subTotal'];
												}
												echo $_SESSION['subTotal'];
											?>
										</span>
									</p>
									<p class="d-flex">
										<span style="color: white;">Delivery</span>
										<span style="color: white;">₱50.00</span>
									</p>
									<p class="d-flex">
										<span style="color: white;">Discount</span>
										<span style="color: white;">₱45.00</span>
									</p>
									<hr style="height:3px;border:none;color:#333;background-color:#333;">
									<p class="d-flex total-price">
										<span style="color: white;">Total</span>
										<span style="color: white;">
											<?php
												$sub = (int)substr($_SESSION['subTotal'],3);
												if($sub !=0 ){
													echo "₱" . (($sub + 50)- 45) . ".00";
												}
												else{
													echo "₱0.00";
												}
											?>
										</span>
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="cart-detail ftco-bg-brown p-3 p-md-4">
									<h3 class="billing-heading mb-4" style="font-weight: bold;">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio" style="color: white;">
												<label><input type="radio" id="cod" name="optradio" value="cod" class="mr-2"> Cash On Delivery</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio" style="color: white;">
												<label><input type="radio" id="debit" name="optradio" class="mr-2" value="debit"> Debit/Credit Card</label>
												
													<div class="form-group infodebit" hidden="true">
														<label for="cardnum">Card number:</label><br>
														<input type="text" name="cardnum" id="cardnum" class="col-md-12">
														<div class="row">
															<div class="col-md-4">
																<label for="csv">CSV:</label><br>
																<input type="password" name="csv" id="csv" class="col-md-12">
															</div>
															<div class="col">
																<label for="expdate">Valid thru:</label><br>
																<div class="row">
																	<input type="text" name="expdatem" id="expdatem" class="col-md-5" placeholder="MM">
																	/<input type="text" name="expdatey" id="expdatey" class="col-md-5" placeholder="YY">
																</div>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<div class="checkbox" style="color: white;">
																<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
															</div>
														</div>
													</div>
													<center>
														<p>
															<button type="submit" class="btn btn-white py-3 px-4" style="border-radius: 25px;">Place an order <i class="fa fa-money"aria-hidden="true"></i></button>
														</p>
													</center>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</form>
					</div> <!-- .col-md-8 -->
				</div>
			</div>
		</section>
	</section>
	<footer class="ftco-footer ftco-section img" style="background: url(images/bg4.jpg;)">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-5 mb-5 mb-md-5" style="margin-left: 50%;">
					<div class="heading-section ftco-animate ">
						<span class="subheading">Kaffa Bunn Newsletter</span>
						<p style="color: black; margin-bottom: -100%;">For great coffee experience delivered at your
							home</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 col-md-5 mb-5 mb-md-5">
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="#"><span class="icon-twitter"
									style="color: black;"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-facebook"
									style="color: black;"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-instagram"
									style="color: black;"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-youtube"
									style="color: black;"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-pinterest"
									style="color: black;"></span></a></li>
						<li class="ftco-animate"><input type="text" placeholder="Email Address"
								style="margin-left: 130%; padding: 10px; width: 120%;"></li>
						<li class="ftco-animate"><input type="submit" value="Subscribe"
								class="btn btn-primary py-3 px-4" style="margin-left: 284%; margin-top: -2%"></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-5 mb-5 mb-md-5">
					<h2 class="ftco-heading-2" style="color: black;"><b>About Us </b></h2>
				</div>
				<div class="col-lg-2 col-md-5 mb-5 mb-md-5">
					<h2 class="ftco-heading-2" style="color: black;"><b>Menu</b></h2>
				</div>
				<div class="col-lg-2 col-md-5 mb-5 mb-md-5">
					<h2 class="ftco-heading-2" style="color: black;"><b>Reservation</b></h2>
				</div>
				<div class="col-lg-2 col-md-5 mb-5 mb-md-5">
					<h2 class="ftco-heading-2" style="color: black;"><b>Gallery</b></h2>
				</div>
				<div class="col-lg-2 col-md-5 mb-5 mb-md-5">
					<h2 class="ftco-heading-2" style="color: black;"><b>Contact Us</b></h2>
				</div>
				<div class="col-lg-2 col-md-5 mb-5 mb-md-5">
					<h2 class="ftco-heading-2" style="color: black;"><b>Privacy Policies</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="color: black;">
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> Kaffa Bunn Cafe. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</footer>
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	<script src="script/checkout.js"></script>
</body>
</html>