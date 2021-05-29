<?php
	session_start();
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
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/index.css">
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
					<li class="nav-item active"><a href="index.php" class="nav-link"
							style="font-family: 'Antic Slab'">Home</a></li>
					<li class="nav-item"><a href="#about" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">About</a></li>
					<li class="nav-item"><a href="#section-counter" class="nav-link"
							style="color: black; font-family: 'Antic Slab'">Menu</a></li>
					<li class="nav-item"><a href="#booking" class="nav-link"
							style="color: black; font-family: 'Antic Slab'">Reservation</a></li>
					<li class="nav-item"><a href="#ftco-testimony" class="nav-link"
							style="color: black; font-family: 'Antic Slab'">Gallery</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link"
							style="color: black;font-family: 'Antic Slab'">Contact</a></li>
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
						?>><img data-toggle="modal" data-target="#cartModal"
							src="https://img.icons8.com/ultraviolet/40/000000/shopping-cart.png" />
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>.
	<script src="script/index.js"></script>
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
					<button type="button" onclick="checkOut(document.getElementById('total').innerHTML);"
						class="btn btn-primary"
						style="border-radius: 25px; padding: 20px; font-family: Poppins; font-size: 15px; font-weight: bold;">Proceed
						to Checkout <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="cd-user-modal" id="loginModal">
		<!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container">
			<!-- this is the container wrapper -->
			<center>
				<br>
				<img src="images/logo.png" width="50" height="55"> &nbsp
				<a class="navbar-brand" href="index.php" style="color: #CD853F;">Kaffa Bunn<small
						style="color: #CD853F;">Cafe</small></a>
				<br>
			</center>
			<ul class="cd-switcher">
				<li><a href="#0" style="font-family: 'Lobster', cursive; color: #CD853F">Log In</a></li>
				<li><a href="#0" style="font-family: 'Lobster', cursive; color: #CD853F">Sign Up</a></li>
			</ul>
			<div id="cd-login">
				<!-- log in form -->
				<form class="cd-form" method="POST" action="php/loginprocess.php">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="email" name="email" type="email"
							placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="loginpass" name="loginpass" type="password"
							placeholder="Password">
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
			</div> <!-- cd-login -->
			<div id="cd-signup">
				<!-- sign up form -->
				<form class="cd-form" id="RegForm" method="POST">
					<p class="fieldset">
						<label class="image-replace cd-username" for="refirstname">First Name</label>
						<input class="full-width has-padding has-border" id="regfirstname" name="regfirstname"
							type="text" placeholder="First Name" required>
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
						<input class="full-width has-padding has-border" id="regpassword" name="regpassword"
							type="password" placeholder="Password" onkeyup="passMatch(), mustContain()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" title="Must contain at least one number and one uppercase and lowercase letter, and at least minimum of 8 characters and maximum of 16 characters" required>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<p>Password must contain:</p>
					<p id="numchar">❌ minimum of 8 characters and maximum 16 characters</p>
					<p id="numeric">❌ atleast 1 numeric or special character</p>
					<p id="upper">❌ atleast 1 uppercase letter</p>
					<p id="lower">❌ atleast 1 lowercase letter</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="regconpassword">Confirm Password</label>
						<input class="full-width has-padding has-border" id="regconpassword" name="regconpassword"
							type="password" placeholder="Password" onkeyup="passMatch()" required>
						<span class="cd-error-message">Error message here!</span>
					</p>
					<span id="error-password-match"></span>
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
								<input class="full-width has-padding has-border" id="regstreet" name="regstreet"
									type="text" placeholder="Street Address" required>
								<span class="cd-error-message">Error message here!</span>
							</p>
						</div>
						<div class="col-md-6">
							<p class="fieldset">
								<label class="image-replace cd-street" for="regstreetopt">Street Address</label>
								<input class="full-width has-padding has-border" id="regstreetopt" name="regstreetopt"
									type="text" placeholder="Appartment, suite, unit etc: (optional)">
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
						<input class="full-width has-padding has-border" id="regphone" name="regphone" type="text"
							onkeypress="return onlyNumberKey(event)"
							oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
							type="number" maxlength="11" maxlenght="11" title="Valid phone number format: XXX-XXX-XXXX"
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
						<input class="full-width has-padding" type="submit" id="savebtn" value="Create account">
					</p>
				</form>
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
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<h2 style="color: white; font-size: 20px; margin-bottom: -60px;"><i class="fa fa-pagelines"></i>
							Welcome to Kaffa Bunn Cafe</h2>
						<span class="subheading" style="font-size: 150px;">Discover.</span>
						<p><a href="#section-counter" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"
								style="border-radius: 25px;">Order Now</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image: url(images/bg1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<h2 style="color: white; font-size: 20px; margin-bottom: -60px;"><i class="fa fa-pagelines"></i>
							Welcome to Kaffa Bunn Cafe</h2>
						<span class="subheading" style="font-size: 150px;">Indulge.</span>
						<p><a href="#section-counter" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"
								style="border-radius: 25px;">Order Now</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image: url(images/bg3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<h2 style="color: white; font-size: 20px; margin-bottom: -60px;"><i class="fa fa-pagelines"></i>
							Welcome to Kaffa Bunn Cafe</h2>
						<span class="subheading" style="font-size: 150px;">Experience.</span>
						<p><a href="#section-counter" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"
								style="border-radius: 25px;">Order Now</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-about d-md-flex" id="about">
		<video controls style="max-width: 70%; height: auto;" autoplay="" loop="" playsinline="">
			<source src="images\kaffabunn.mp4" type="video/mp4">
		</video>
		<div class="one-half ftco-animate">
			<div class="heading-section ftco-animate ">
				<h2 style="color: black; font-size: 20px;"><i class="fa fa-pagelines"></i> Discover</h2>
				<span class="subheading">About Us</span>
				<br>
			</div>
			<div>
				<p style="color: black;">Founded in 1990s, way before all these major coffee chains were present in
					Metro Manila, a group of coffee lovers and enthusiasts got together and dreamt of a cafe where they
					could lounge and entertain friends and business associates, a relaxing place which fulfilled their
					demanding taste for great coffee, delicious pastries and excellent service. This dream developed
					into a concept and soon became Kaffa Bunn Cafe.</p>
				<p><a href="about.php" class="btn btn-primary btn-outline-white p-3 px-xl-4 py-xl-3"
						style="border-radius: 25px;">Know More About Us</a></p>
			</div>
		</div>
	</section>
	<br><br>
	<section class="ftco-counter ftco-bg-dark img" id="section-counter"
		style="background-image: url(images/awards.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 style="color: white; font-size: 20px;"><i class="fa fa-pagelines"></i> Indulge</h2>
					<span class="subheading">Our Menu</span>
					<br>
					<p style="color: white;">Kaffa Bunn Cafe is not just an ordinary café; besides our best-tasting
						coffee and beverages, we also serve a wide variety of appetizing food like cakes, pasta, rice
						meals and sandwiches.</p>
				</div>
			</div>
			<div class="row d-md-flex">
				<div class="col-lg-12 ftco-animate p-md-5">
					<div class="row" style="margin-top: -80px;">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab"
								role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
									role="tab" aria-controls="v-pills-1" aria-selected="true"
									style="color: white;">Drinks <i class="fa fa-coffee"></i></a> &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
									aria-controls="v-pills-2" aria-selected="false" style="color: white;">Food <i
										class="fa fa-cutlery"></i></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp
								<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
									aria-controls="v-pills-3" aria-selected="false" style="color: white;">Pastries <i
										class="fa fa-birthday-cake"></i></a>
							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center">
							<div class="tab-content ftco-animate" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
									aria-labelledby="v-pills-1-tab">
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="single-prod.php"
														class="gallery img d-flex align-items-center"
														style="background-image: url(images/drink1.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000  ; font-size: 17px; ">
																	An espresso-based drink with chocolate syrup,
																	chilled milk, crushed ice and topped with whipped
																	milk.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="single-prod.php" style="color: black;"><b>Iced
																Mocha</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱165.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('ICED MOCHA');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															Cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/drink2.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Espresso based drink with equal parts of steamed
																	milk and foamed milk.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Hot Cappucino</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱135.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('HOT CAPPUCINO');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/drink3.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Chewy and soft mocha pudding on a frappuccino</p>
																</i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>White Mocha Pudding
																Frappe</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱215.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('WHITE MOCHA PUDDING FRAPPE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink4.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/drink4.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	An espresso-based drink with chilled milk, sugar
																	syrup, topped with whipped milk.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Iced Latte</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱145.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('ICED LATTE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink5.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/drink5.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	An espresso-based drink with sugar syrup mixed with
																	whipped milk and crushed ice.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Hot Maple Latte</b></a>
													</h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱185.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('HOT MAPLE LATTE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink6.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/drink6.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Equal parts of drip coffee and steamed milk with a
																	foamy cap.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Café Au Lait</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱125.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('CAFE AU LAIT');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-2" role="tabpanel"
									aria-labelledby="v-pills-2-tab">
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/food1.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Classic Pork Adobo flakes, served with Java rice &
																	Kare-kare Soup. Served with 12oz. Lemonade and
																	Dessert.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Adobo Flakes
																Kare-Kare</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱269.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('ADOBO FLAKES KARE-KARE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/food2.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px;">
																	Pan fried dory fish fillet infused in zesty
																	Provencal Sauce. Add ₱35 for a 12 oz. of Iced Tea or
																	Lemonade</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Dory Provencal</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱270.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('DORY PROVENCAL');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/food3.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px;">
																	Cooked shiitake mushroom, cheese and mayonnaise,
																	rolled in a specially made soft and thin piece of
																	crepe.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Mushroom & Cheese
																Crepe</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱155.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo " onClick=\"addToCart('MUSHROOM AND CHEESE CREPE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/food4.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px;">
																	A unique garlicky and smoky blend of Spanish Chorizo
																	sauteed in bell peppers.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Gourmet Spanish Chorizo
																Cubana</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱275.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('GOURMET SPANISH CHORIZO CUBANA');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/food5.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px;">
																	Eggs, beaten light and fluffy, generously filled
																	with Shitake mushroom and cheese and folded over.
																</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>French Mushroom
																Omelete</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱225.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('FRENCH MUSHROOM OMELETTE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/food6.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px;">
																	Our Signature Pasta, sweet and spicy medley of
																	flavors, light tomato basil sauce, capers, tuna
																	chunks, black olives and olive oil.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Pasta Ala Carlo</b></a>
													</h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱235.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('PASTA ALA CARLO');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-3" role="tabpanel"
									aria-labelledby="v-pills-3-tab">
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/pastry1.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px;">
																	A moist dark chocolate chiffon with dark chocolate
																	mousse and dark chocolate crumbs on top.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Tablea Blackout
																Cake</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱175.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('TABLEA BLACKOUT CAKE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/pastry2.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Sweet, juicy strawberries in a rich, cream cheese
																	mousse base, nestled on a buttery melt in the mouth
																	crust.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Strawberry
																Cheesecake</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱205.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('STRAWBERRY CHEESECAKE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/pastry3.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Rich, moist muffin mixed with blueberry and
																	sprinkled with crunchy toping made of crumbled
																	flavored dough (streusel).</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Muffins</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱70.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('MUFFINS');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/pastry4.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Rich fruit bar made in dates and walnuts</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Food for the Gods</b></a>
													</h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱59.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('FOOD FOR THE GODS');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/pastry5.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	Made from bananas, cream and toffee, combined with a
																	buttery biscuit base.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Banoffee Pie</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱170.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('BANOFEE PIE');\"";
															}
														?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<div class="c1">
													<a href="drink2.php" class="gallery img d-flex align-items-center"
														style="background-image: url(images/pastry6.jpg); border-radius: 50%;">
														<div class="middle">
															<div class="align-items-center">
																<br><br>
																<p
																	style="font-family: Lobster; color: #800000; font-size: 17px; ">
																	A deliciously light flaky pastry made from many
																	layers of specially prepared pastry dough filled
																	with tuna filling.</p></i>
															</div>
														</div>
													</a>
												</div>
												<br>
												<div class="text">
													<h3><a href="#" style="color: black;"><b>Tuna Pie</b></a></h3>
													<p>Available for dine-in and take out</p>
													<p class="price"><span
															style="color: #D2691E; font-size:17px;">₱60.00</span></p>
													<p>
														<a class="btn btn-primary btn-outline-primary" <?php
															if($isActive){
																echo "onClick=\"addToCart('TUNA PIE');\"";
															}
				                              			?> style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to
															cart
														</a> &nbsp
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<center>
									<div class="form-group ml-md-4">
										<input type="submit" onclick="location.href='menu.php'" value="View Full Menu"
											class="btn btn-primary py-3 px-4"
											style="color: #654321; width: 50%; font-size: 20px; font-family: 'Antic Slab'; font-weight: bold; border-radius: 25px;">
									</div>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<section class="ftco-about d-md-flex" id="booking">
		<div class="one-half img" style="background-image: url(images/booking.jpg);"></div>
		<div class="one-half ftco-animate">
			<div class="heading-section ftco-animate ">
				<h2 style="color: black; font-size: 20px;"><i class="fa fa-pagelines"></i> Experience</h2>
				<span class="subheading">Book a Table</span>
			</div>
			<div>
				<form action="#" class="appointment-form">
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<div class="input-wrap">
								<div class="icon"><span class="ion-md-calendar"></span></div>
								<input type="text" class="form-control appointment_date" placeholder="Date">
							</div>
						</div>
						<div class="form-group ml-md-4">
							<div class="input-wrap">
								<div class="icon"><span class="ion-ios-clock"></span></div>
								<input type="text" class="form-control appointment_time" placeholder="Time">
							</div>
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Phone">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="2" class="form-control"
								placeholder="Message"></textarea>
						</div>
						<div class="form-group ml-md-4">
							<input type="submit" value="Appointment" class="btn btn-primary py-3 px-4"
								style="border-radius: 25px;">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/testimonials.jpg);"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 style="color: white; font-size: 20px;"><i class="fa fa-pagelines"></i> Enjoy</h2>
					<span class="subheading">Gallery</span>
					<br>
					<p style="color: white;">Kaffa Bunn also has exceptional interiors thus earning the tag an
						“Instagram-able” coffee shop. It is prominently decorated with flowers and greens to give you
						that garden cafe and home-y vibe. All these efforts are product of Coffee Project’s dedication
						in making your visit worthy and extraordinary.
						Share your moments with us. Follow us on Instagram and use <br><br><span class="subheading"
							style="color: white; font-size: 30px;">#KaffaBunnOfficial</span></p>
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row d-flex no-gutters">
				<div class="col-lg align-self-sm-end ftco-animate">
					<img src="images/gallery1.jpg" style="width: 400px; height: 267px; margin-left: 20px;"> &nbsp
					<img src="images/gallery2.jpg" style="width: 300px; height: 400px; "> &nbsp
					<img src="images/gallery5.jpg" style="width: 400px; height: 250px;"> &nbsp
					<img src="images/gallery7.jpg" style="width: 200px; height: 310px; margin-top: -60px;"> &nbsp
					<img src="images/gallery9.jpg" style="width: 300px; height: 210px; ">
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row d-flex no-gutters">
				<div class="col-lg align-self-sm-end ftco-animate">
					<img src="images/gallery3.jpg"
						style="width: 400px; height: 230px; margin-left: 20px; margin-top: -200px;"> &nbsp
					<img src="images/gallery4.jpg" style="width: 300px; height: 210px; margin-top: -100px;"> &nbsp
					<img src="images/gallery6.jpg" style="width: 300px; height: 400px; margin-top: -60px;"> &nbsp
					<img src="images/gallery8.jpg" style="width: 350px; height: 267px;  margin-top: -180px;"> &nbsp
					<img src="images/gallery10.jpg" style="width: 250px; height: 400px; margin-top: -60px;">
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row d-flex no-gutters">
				<div class="col-lg align-self-sm-end ftco-animate">
					<img src="images/gallery11.jpg"
						style="width: 400px; height: 230px; margin-left: 20px; margin-top: -270px;"> &nbsp
					<img src="images/gallery12.jpg" style="width: 300px; height: 250px; margin-top: -170px;"> &nbsp
					<img src="images/gallery13.jpg" style="width: 300px; height: 200px;  margin-top: 20px;"> &nbsp
					<img src="images/gallery14.jpg" style="width: 165px; height: 300px; margin-top: -140px;"> &nbsp
					<img src="images/gallery15.jpg" style="width: 170px; height: 300px; margin-top: -140px;"> &nbsp
					<img src="images/gallery16.jpg" style="width: 250px; height: 200px; margin-top: 10px;">
				</div>
			</div>
		</div>
		</div>
		<br>
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
						<script>
							document.write(new Date().getFullYear());
						</script> Kaffa Bunn Cafe. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</footer>
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>

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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	<!-- bootstrap -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- custom script -->
	<script src="script/validate.js"></script>

</body>

</html>