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
	<link rel="stylesheet" href="css/menu.css">
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
					<li class="nav-item active"><a href="../menu.php" class="nav-link"
							style="font-family: 'Antic Slab';">Menu</a></li>
					<li class="nav-item"><a href="index.php #booking" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Reservation</a></li>
					<li class="nav-item"><a href="index.php #ftco-testimony" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Gallery</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link"
							style="color: black; font-family: 'Antic Slab';">Contact</a></li>
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
						?>><img  data-toggle="modal" data-target="#cartModal" src="https://img.icons8.com/ultraviolet/40/000000/shopping-cart.png"/></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>.
	<script src="script/menu.js"></script>
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
						style="border-radius: 25px; padding: 20px; font-family: Poppins; font-size: 15px; font-weight: bold;" >Proceed
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
				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
	<section class="ftco-counter ftco-bg-dark img" id="section-counter"
		style="background-image: url(images/bgmenu.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay" style="opacity: 0.4;"></div>
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
                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink1.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink1.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000  ; font-size: 17px; ">An espresso-based drink with chocolate syrup, chilled milk, crushed ice and topped with whipped milk.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="menu/drink1.php"><b>Iced Mocha</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱165.00</span></p>
                            
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('ICED MOCHA');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink2.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink2.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Espresso based drink with equal parts of steamed milk and foamed milk.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Hot Cappucino</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱135.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('HOT CAPPUCINO');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink3.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink3.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Chewy and soft mocha pudding on a frappuccino</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>White Mocha Pudding Frappe</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱215.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('WHITE MOCHA PUDDING FRAPPE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink4.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink4.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">An espresso-based drink with chilled milk, sugar syrup, topped with whipped milk.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Iced Latte</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱145.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('ICED LATTE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink5.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink5.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">An espresso-based drink with sugar syrup mixed with whipped milk and crushed ice.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Hot Maple Latte</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱185.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('HOT MAPLE LATTE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink6.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink6.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Equal parts of drip coffee and steamed milk with a foamy cap.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Café Au Lait</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱125.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('CAFE AU LAIT');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink7.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink7.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000  ; font-size: 17px; ">An espresso with hot water, giving it a similar strength to, but different flavor from traditionally brewed coffee.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Cafe Americano</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱125.00</span></p>
                            
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('CAFE AMERICANO');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink8.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink8.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000  ; font-size: 17px; ">A one-to-one combination of fresh-brewed coffee and steamed milk add up to one distinctly delicious coffee drink remarkably mixed.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Cafe Misto</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱145.00</span></p>
                            
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('CAFE MISTO');\"";
                              	}
                              ?>
                               style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink9.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink9.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000  ; font-size: 17px; ">Sweetened with vanilla, and then topped with a pumpkin cream cold foam and a dusting of pumpkin spice—a super-smooth fall treat</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Pumpkin Cream Cold Brew</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱195.00</span></p>
                            
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('PUMPKIN CREAM COLD BREW');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink10.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink10.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000  ; font-size: 17px; ">A delightful combination of espresso, milk, mocha sauce and toffeenut–flavored syrup over ice, topped off with sweetened whipped cream and caramel sauce</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Iced Salted Caramel Mocha</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱205.00</span></p>
                            
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('ICED SALTED CARAMEL MOCHA');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink11.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink11.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000  ; font-size: 17px; ">Accented with vanilla and topped with a delicate float of house-made vanilla sweet cream that cascades throughout the cup</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Macadamia Latte</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱215.00</span></p>
                            
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('MACADAMIA LATTE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/drink12.php" class="gallery img d-flex align-items-center" style="background-image: url(images/drink12.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000  ; font-size: 17px; ">Chocolate powder melted in a small amount of water and mixed fresh milk.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Black Whip Latte</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱200.00</span></p>
                            
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('BLACK WHIP LATTE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food1.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food1.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Classic Pork Adobo flakes, served with Java rice & Kare-kare Soup. Served with 12oz. Lemonade and Dessert.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Adobo Flakes Kare-Kare</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱269.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('ADOBO FLAKES KARE-KARE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food2.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food2.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">Pan fried dory fish fillet infused in zesty Provencal Sauce. Add ₱35 for a 12 oz. of Iced Tea or Lemonade</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Dory Provencal</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱270.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('DORY PROVENCAL');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food3.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food3.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">Cooked shiitake mushroom, cheese and mayonnaise, rolled in a specially made soft and thin piece of crepe.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Mushroom & Cheese Crepe</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱155.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('MUSHROOM AND CHEESE CREPE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food4.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food4.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">A unique garlicky and smoky blend of Spanish Chorizo sauteed in bell peppers.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Gourmet Spanish Chorizo Cubana</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱275.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('GOURMET SPANISH CHORIZO CUBANA');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food5.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food5.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">Eggs, beaten light and fluffy, generously filled with Shitake mushroom and cheese and folded over.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>French Mushroom Omelete</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱225.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('FRENCH MUSHROOM OMELETTE');\"";
                              	}
                              ?>
                               style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food6.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food6.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">Our Signature Pasta, sweet and spicy medley of flavors, light tomato basil sauce, capers, tuna chunks, black olives and olive oil.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Pasta Ala Carlo</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱235.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('PASTA ALA CARLO');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food7.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food7.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Slices of fluffy & soft milk bread, topped with grilled chicken bits, special BBQ sauce and cheese, baked until slightly toasted.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Chicken Barbeque</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱135.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('CHICKEN BARBEQUE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food8.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food8.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Sweet ham, pineapple chunks, bacon, a special blend of three cheeses on a tangy Texas BBQ sauce.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Sweet Hawaiian Holiday Pizza</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱245.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('SWEET HAWAIIAN HOLIDAY PIZZA');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food9.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food9.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Pan-fried Dory fillet, topped with Lemon Butter sauce; served with carrots & green peas and Jasmine rice.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Lemon Butter Fish Fillet</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱220.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('LEMON BUTTER FISH FILLET');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food10.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food10.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Basil, olive oil, garlic, almond nuts, salt, pepper, parmesan cheese and sundried tomatoes. </p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Garden Herb Pesto</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱235.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('GARDEN HERB PESTO');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food11.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food11.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">A medley of crisp greens, red tomatoes, grilled chicken, sesame seeds, candied walnuts, parmesan cheese and sweet tangy Asian Vinaigrette. </p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Asian Chicken Salad</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱220.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('ASIAN CHICKEN SALAD');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/food12.php" class="gallery img d-flex align-items-center" style="background-image: url(images/food12.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Premium Spanish Chorizo, fresh greens, grilled bell peppers and caramelized onions.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Gourmet Spanish Chorizo Burger</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱290.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('GOURMET SPANISH CHORIZO BURGER');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry1.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry1.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">A moist dark chocolate chiffon with dark chocolate mousse and dark chocolate crumbs on top.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Tablea Blackout Cake</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱175.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('TABLEA BLACKOUT CAKE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry2.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry2.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Sweet, juicy strawberries in a rich, cream cheese mousse base, nestled on a buttery melt in the mouth crust.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Strawberry Cheesecake</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱205.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('STRAWBERRY CHEESECAKE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry3.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry3.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Rich, moist muffin mixed with blueberry and sprinkled with crunchy toping made of crumbled flavored dough (streusel).</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Muffins</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱70.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('MUFFINS');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry4.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry4.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Rich fruit bar made in dates and walnuts</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Food for the Gods</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱59.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('FOOD FOR THE GODS');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry5.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry5.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">Made from bananas, cream and toffee, combined with a buttery biscuit base.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Banoffee Pie</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱170.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('BANOFEE PIE');\"";
                              	}
                              ?>
                             style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry6.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry6.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">A deliciously light flaky pastry made from many layers of specially prepared pastry dough filled with tuna filling.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Tuna Pie</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱60.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('TUNA PIE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry7.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry7.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px; ">An oblong pastry made with choux dough filled with a cream and topped with chocolate icing. </p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Eclair</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱78.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('ECLAIR');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry8.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry8.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">Stewed shredded pork in sweet brown sauce and baked in a flaky crust.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Asado Pie</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱60.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('ASADO PIE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry9.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry9.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">An American classic, devil's food cake has a moist, tender crumb and satisfying chocolate flavor</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Devil's Mocha</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱60.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('DEVILS MOCHA');\"";
                              	}
                              ?>
                             style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry10.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry10.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">Features layers of salted caramel and smooth, creamy cheesecake on top of graham cracker.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Salted Caramel Cheesesake</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱270.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('SALTED CARAMEL CHEESECAKE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry11.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry11.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">The best red velvet cake with superior buttery, vanilla, and cocoa flavors, as well as a delicious tang from buttermilk. </p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Red Velvet Cake</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱255.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('RED VELVET CAKE');\"";
                              	}
                              ?>
                              style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="c1">
                            <a href="menu/pastry12.php" class="gallery img d-flex align-items-center" style="background-image: url(images/pastry12.jpg); border-radius: 50%;">
                              <div class="middle">
                                <div class="align-items-center">
                                  <br><br><p style="font-family: Lobster; color: #800000; font-size: 17px;">sweet desserts of milk or fruit juice variously flavoured and thickened with cornstarch, arrowroot, flour, and eggs.</p></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <br>
                          <div class="text">
                            <h3><a href="#"><b>Butterscotch Pudding</b></a></h3>
                            <p style="color: white;">Available for dine-in and take out</p>
                            <p class="price"><span style="color: white; font-size:17px;">₱230.00</span></p>
                            <p>
                              <a href="#" class="btn btn-primary btn-outline-white" 
                              <?php
                              	if($isActive){
                              		echo "onClick=\"addToCart('BUTTERSCOTCH PUDDING');\"";
                              	}
                              ?>
                              "style="border-radius: 25px;"><i class="fa fa-plus" aria-hidden="true"></i> Add to cart</a> &nbsp
                            </p>
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
		</div>
		</div>
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

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>

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
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>