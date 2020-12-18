<?php
session_start();
$isActive = isset($_SESSION['email']);
if ($isActive) {
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
</head>
<style>
  .c1:hover .gallery {
    opacity: 0.7;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }

  .c1:hover .middle {
    opacity: 1;
  }

  .cd-user-modal {
    position: fixed;
    font-family: 'Poppins';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(52, 54, 66, 0.9);
    z-index: 3;
    overflow-y: auto;
    cursor: pointer;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity 0.3s 0, visibility 0 0.3s;
    -moz-transition: opacity 0.3s 0, visibility 0 0.3s;
    transition: opacity 0.3s 0, visibility 0 0.3s;
  }

  .cd-user-modal.is-visible {
    visibility: visible;
    opacity: 1;
    -webkit-transition: opacity 0.3s 0, visibility 0 0;
    -moz-transition: opacity 0.3s 0, visibility 0 0;
    transition: opacity 0.3s 0, visibility 0 0;
  }

  .cd-user-modal.is-visible .cd-user-modal-container {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }

  .cd-user-modal-container {
    position: relative;
    width: 90%;
    max-width: 600px;
    background: #FFF;
    margin: 3em auto 4em;
    cursor: auto;
    border-radius: 0.25em;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
    -webkit-transition-property: -webkit-transform;
    -moz-transition-property: -moz-transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
  }

  .cd-user-modal-container .cd-switcher::after {
    clear: both;
    content: "";
    display: table;
  }

  .cd-user-modal-container .cd-switcher li {
    width: 50%;
    float: left;
    text-align: center;
  }

  .cd-user-modal-container .cd-switcher li:first-child a {
    border-radius: .25em 0 0 0;
  }

  .cd-user-modal-container .cd-switcher li:last-child a {
    border-radius: 0 .25em 0 0;
  }

  .cd-user-modal-container .cd-switcher a {
    display: block;
    width: 100%;
    height: 50px;
    line-height: 50px;
    background: #d2d8d8;
    color: #809191;
  }

  .cd-user-modal-container .cd-switcher a.selected {
    background: #FFF;
    color: #CD853F; 
    font-family: "Lobster", cursive;
    font-size: 28px;
    font-weight: bold;
  }

  @media only screen and (min-width: 600px) {
    .cd-user-modal-container {
      margin: 4em auto;
    }

    .cd-user-modal-container .cd-switcher a {
      height: 70px;
      line-height: 70px;
    }
  }

  .cd-form {
    padding: 1.4em;
  }

  .cd-form .fieldset {
    position: relative;
    margin: 1.4em 0;
  }

  .cd-form .fieldset:first-child {
    margin-top: 0;
  }

  .cd-form .fieldset:last-child {
    margin-bottom: 0;
  }

  .cd-form label {
    font-size: 14px;
    font-size: 0.875rem;
  }

  .cd-form label.image-replace {
    /* replace text with an icon */
    display: inline-block;
    position: absolute;
    left: 15px;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    height: 20px;
    width: 20px;
    overflow: hidden;
    text-indent: 100%;
    white-space: nowrap;
    color: transparent;
    text-shadow: none;
    background-repeat: no-repeat;
    background-position: 50% 0;
  }

  .cd-form label.cd-username {
    background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-username.svg");
  }

  .cd-form label.cd-email {
    background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-email.svg");
  }

  .cd-form label.cd-password {
    background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-password.svg");
  }

  .cd-form input {
    margin: 0;
    padding: 0;
    border-radius: 0.25em;
  }

  .cd-form input.full-width {
    width: 100%;
  }

  .cd-form input.has-padding {
    padding: 12px 20px 12px 50px;
  }

  .cd-form input.has-border {
    border: 1px solid #d2d8d8;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
  }

  .cd-form input.has-border:focus {
    border-color: #343642;
    box-shadow: 0 0 5px rgba(52, 54, 66, 0.1);
    outline: none;
  }

  .cd-form input.has-error {
    border: 1px solid #d76666;
  }

  .cd-form input[type=password] {
    /* space left for the HIDE button */
    padding-right: 65px;
  }

  .cd-form input[type=submit] {
    padding: 16px 0;
    cursor: pointer;
    background: #CD853F;
    color: #FFF;
    font-weight: bold;
    border: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
  }

  .no-touch .cd-form input[type=submit]:hover,
  .no-touch .cd-form input[type=submit]:focus {
    background: #CD853F;
    outline: none;
  }

  .cd-form .hide-password {
    display: inline-block;
    position: absolute;
    right: 0;
    top: 0;
    padding: 6px 15px;
    border-left: 1px solid #d2d8d8;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 14px;
    font-size: 0.875rem;
    color: #343642;
  }

  .cd-form .cd-error-message {
    display: inline-block;
    position: absolute;
    left: -5px;
    bottom: -35px;
    background: rgba(215, 102, 102, 0.9);
    padding: .8em;
    z-index: 2;
    color: #FFF;
    font-size: 13px;
    font-size: 0.8125rem;
    border-radius: 0.25em;
    /* prevent click and touch events */
    pointer-events: none;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity 0.2s 0, visibility 0 0.2s;
    -moz-transition: opacity 0.2s 0, visibility 0 0.2s;
    transition: opacity 0.2s 0, visibility 0 0.2s;
  }

  .cd-form .cd-error-message::after {
    /* triangle */
    content: '';
    position: absolute;
    left: 22px;
    bottom: 100%;
    height: 0;
    width: 0;
    border-bottom: 8px solid rgba(215, 102, 102, 0.9);
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
  }

  .cd-form .cd-error-message.is-visible {
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.2s 0, visibility 0 0;
    -moz-transition: opacity 0.2s 0, visibility 0 0;
    transition: opacity 0.2s 0, visibility 0 0;
  }

  @media only screen and (min-width: 600px) {
    .cd-form {
      padding: 2em;
    }

    .cd-form .fieldset {
      margin: 2em 0;
    }

    .cd-form .fieldset:first-child {
      margin-top: 0;
    }

    .cd-form .fieldset:last-child {
      margin-bottom: 0;
    }

    .cd-form input.has-padding {
      padding: 16px 20px 16px 50px;
    }

    .cd-form input[type=submit] {
      padding: 16px 0;
    }
  }

  .cd-form-message {
    padding: 1.4em 1.4em 0;
    font-size: 14px;
    font-size: 0.875rem;
    line-height: 1.4;
    text-align: center;
  }

  @media only screen and (min-width: 600px) {
    .cd-form-message {
      padding: 2em 2em 0;
    }
  }

  .cd-form-bottom-message {
    position: absolute;
    width: 100%;
    left: 0;
    bottom: -30px;
    text-align: center;
    font-size: 14px;
    font-size: 0.875rem;
  }

  .cd-form-bottom-message a {
    color: #FFF;
    text-decoration: underline;
  }

  .cd-close-form {
    /* form X button on top right */
    display: block;
    position: absolute;
    width: 40px;
    height: 40px;
    right: 0;
    top: -40px;
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-close.svg") no-repeat center center;
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
  }

  @media only screen and (min-width: 1170px) {
    .cd-close-form {
      display: none;
    }
  }

  #cd-login,
  #cd-signup,
  #cd-reset-password {
    display: none;
  }

  #cd-login.is-selected,
  #cd-signup.is-selected,
  #cd-reset-password.is-selected {
    display: block;
  }

  .modal-body {
    overflow-y: auto;
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
  }

  .testimony-wrap {
    border: 1px solid rgba(0, 0, 0, 0.1);
    display: block;
    position: relative;
  }

  .testimony-wrap .user-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: relative;
    margin: 0 auto;
  }

  .testimony-wrap .user-img .quote {
    position: absolute;
    bottom: -10px;
    right: 0;
    width: 40px;
    height: 40px;
    background: #38d39f;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
  }

  .testimony-wrap .user-img .quote i {
    color: #fff;
  }

  .testimony-wrap .name {
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 0;
    color: #000;
  }

  .testimony-wrap .position {
    font-size: 13px;
  }
</style>

<body>


  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <img src="images/logo.png" width="50" height="55" style="margin-bottom: 15px;"> &nbsp
      <a class="navbar-brand" href="index.php" style="color: #CD853F;">Kaffa Bunn<small style="color: #CD853F;">Cafe</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link" style="color: black; font-family: 'Antic Slab';">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link" style=" color: black;font-family: 'Antic Slab';">About</a></li>
          <li class="nav-item"><a href="menu.php" class="nav-link" style="color: black; font-family: 'Antic Slab';">Menu</a></li>
          <li class="nav-item"><a href="index.php #booking" class="nav-link" style="color: black; font-family: 'Antic Slab';">Reservation</a></li>
          <li class="nav-item"><a href="index.php #ftco-testimony" class="nav-link" style="color: black; font-family: 'Antic Slab';">Gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link" style="color: black; font-family: 'Antic Slab';">Contact</a></li>
          <li class="nav-item active"><a href="help.php" class="nav-link" style=" font-family: 'Antic Slab';">Help</a></li>
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
          <li class="nav-item cart" onClick='fetchCart();' id="cartNav" 
          <?php
          if (!$isActive) {
            echo "style='display:none;'";
          } else {
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
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      var $form_modal = $('.cd-user-modal'),
        $form_login = $form_modal.find('#cd-login'),
        $form_signup = $form_modal.find('#cd-signup'),
        $form_forgot_password = $form_modal.find('#cd-reset-password'),
        $form_modal_tab = $('.cd-switcher'),
        $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
        $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
        $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
        $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
        $main_nav = $('.main-nav');

      //open modal
      $main_nav.on('click', function(event) {

        if ($(event.target).is($main_nav)) {
          // on mobile open the submenu
          $(this).children('ul').toggleClass('is-visible');
        } else {
          // on mobile close submenu
          $main_nav.children('ul').removeClass('is-visible');
          //show modal layer
          $form_modal.addClass('is-visible');
          //show the selected form
          ($(event.target).is('.cd-signup')) ? signup_selected(): login_selected();
        }

      });

      //close modal
      $('.cd-user-modal').on('click', function(event) {
        if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
          $form_modal.removeClass('is-visible');
        }
      });
      //close modal when clicking the esc keyboard button
      $(document).keyup(function(event) {
        if (event.which == '27') {
          $form_modal.removeClass('is-visible');
        }
      });

      //switch from a tab to another
      $form_modal_tab.on('click', function(event) {
        event.preventDefault();
        ($(event.target).is($tab_login)) ? login_selected(): signup_selected();
      });

      //hide or show password
      $('.hide-password').on('click', function() {
        var $this = $(this),
          $password_field = $this.prev('input');

        ('password' == $password_field.attr('type')) ? $password_field.attr('type', 'text'): $password_field.attr('type', 'password');
        ('Hide' == $this.text()) ? $this.text('Show'): $this.text('Hide');
        //focus and move cursor to the end of input field
        $password_field.putCursorAtEnd();
      });

      //show forgot-password form 
      $forgot_password_link.on('click', function(event) {
        event.preventDefault();
        forgot_password_selected();
      });

      //back to login from the forgot-password form
      $back_to_login_link.on('click', function(event) {
        event.preventDefault();
        login_selected();
      });

      function login_selected() {
        $form_login.addClass('is-selected');
        $form_signup.removeClass('is-selected');
        $form_forgot_password.removeClass('is-selected');
        $tab_login.addClass('selected');
        $tab_signup.removeClass('selected');
      }

      function signup_selected() {
        $form_login.removeClass('is-selected');
        $form_signup.addClass('is-selected');
        $form_forgot_password.removeClass('is-selected');
        $tab_login.removeClass('selected');
        $tab_signup.addClass('selected');
      }

      function forgot_password_selected() {
        $form_login.removeClass('is-selected');
        $form_signup.removeClass('is-selected');
        $form_forgot_password.addClass('is-selected');
      }

      //REMOVE THIS - it's just to show error messages 
      $form_login.find('input[type="submit"]').on('click', function(event) {
        event.preventDefault();
        $form_login.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
      });
      $form_signup.find('input[type="submit"]').on('click', function(event) {
        event.preventDefault();
        $form_signup.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
      });


      //IE9 placeholder fallback
      //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
      if (!Modernizr.input.placeholder) {
        $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.val(input.attr('placeholder'));
          }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
          $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
            }
          })
        });
      }

    });


    //credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
    jQuery.fn.putCursorAtEnd = function() {
      return this.each(function() {
        // If this function exists...
        if (this.setSelectionRange) {
          // ... then use it (Doesn't work in IE)
          // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
          var len = $(this).val().length * 2;
          this.setSelectionRange(len, len);
        } else {
          // ... otherwise replace the contents with itself
          // (Doesn't work in Google Chrome)
          $(this).val($(this).val());
        }
      });
    };
  </script>
  <!-- Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title " id="exampleModalLabel" style="color: #CD853F; font-family: Lobster; font-size: 40px;">My Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
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

          <button type="button" onclick="checkOut(document.getElementById('total').innerHTML);" class="btn btn-primary" style="border-radius: 25px; padding: 20px; font-family: Poppins; font-size: 15px; font-weight: bold;">Proceed to Checkout <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
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
        <form class="cd-form">
          <p class="fieldset">
            <label class="image-replace cd-email" for="signin-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">Password</label>
            <input class="full-width has-padding has-border" id="signin-password" type="text" placeholder="Password">
            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <input type="checkbox" id="remember-me" checked>
            <label for="remember-me">Remember me</label>
          </p>

          <p class="fieldset">
            <input class="full-width" type="submit" value="Login"><br>
            <a href="#0" class="cd-form-bottom-message">Forgot your password?</a>
          </p>
          <br><br>
        </form>


        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-login -->

      <div id="cd-signup">
        <!-- sign up form -->
        <form class="cd-form">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-firstname">First Name</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="First Name">
            <span class="cd-error-message">Error message here!</span>
          </p>
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-lastname">Last Name</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Last Name">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="text" placeholder="Password">
            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <input type="checkbox" id="accept-terms">
            <label for="accept-terms">I agree to the <a href="#0">Terms and Condition.</a></label>
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Create account">
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->

      <div id="cd-reset-password">
        <!-- reset password form -->
        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

        <form class="cd-form">
          <p class="fieldset">
            <label class="image-replace cd-email" for="reset-email">E-mail</label>
            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
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

  <section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bgfaq.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <center>
      <div class="heading-section ftco-animate ">
        <br>
        <span class="subheading">Frequently Asked Questions <i class="fa fa-users" aria-hidden="true"></i></span>
        <h2 style="font-size: 20px;"><i class="fa fa-pagelines"></i> Help</h2><br>
      </div>
    </center>
    <section class="ftco-section" style="margin-top: -5%; margin-left: 25%">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 ftco-animate">
            <form action="#" class="billing-form ftco-bg-brown p-3 p-md-5">

              <div class="row">
                <div class="col-4">
                  <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Where is Kaffa Bunn Cafe located?</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">When are you open?</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Where do you get or buy your coffee?</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Who makes your food?</a>
                    <a class="list-group-item list-group-item-action" id="list-banana-list" data-toggle="list" href="#list-banana" role="tab" aria-controls="banana">Does the Kaffa Bunn Cafe have an agenda?</a>
                    <a class="list-group-item list-group-item-action" id="list-apple-list" data-toggle="list" href="#list-apple" role="tab" aria-controls="apple">Do you have a Free Wi-Fi?</a>
                  </div>
                </div>
                <div class="col-8">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list" style="color: white;">We’re located smack in the middle of downtown Universal LMS Building, 106 Esteban, Legazpi Village, Makati, Metro Manila, PH, with plenty of parking in the front and back of the shop. </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list" style="color: white;">Glad you asked. We’re a 7-day a week operation, taking only Thanksgiving and Christmas off to make coffee at home. Our hours are Monday – Sunday, 6:00 a.m. to 5:00 p.m, Call us even on the worst Maine weather days, as we rarely close due to storms.</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list" style="color: white;">We are very proud to buy our beans from Coffee By Design. Coffee By Design is a certified organic manufacturer that directly sources only sustainably farmed green coffee beans. I have enjoyed the privilege of visiting one of the farms that CBD buys from, La Manita Farm, Costa Rica, and witnessed first-hand that CBD only buys coffee from growers that provide 100% traceability. I can assure all of our customers that our coffee is grown only where the environment and all those involved in growing and providing our beans are treated with total respect for fairness and sustainability.</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list" style="color: white;">We do! With the exception of our gluten-free offerings, we make, bake, and serve our entire menu. We also buy local whenever we can, such as fresh meat raised and butchered at LP Bisson & Sons Farm and Meat Market, bread from Borealis Bread, and gluten-free bagels, muffins, and sweet treats from Wildflours and Bam Bam gluten free bakeries. </div>
                    <div class="tab-pane fade" id="list-banana" role="tabpanel" aria-labelledby="list-banana-list" style="color: white;">We do: Sit. Stay. Enjoy. That’s it. We don’t care who you vote for, pray to, or sleep with. We don’t even care if you’re talking on your cell phone while ordering, just as long as we get the gist of what you’d like. Nor do we advocate for any political or religious cause. We support numerous organizations and causes in the greater Brunswick area by donating goods and services throughout the year, but we do not advocate on behalf of any particular group or cause. We limit our bulletin board to non-profit events, music, film, lectures, circuses, etc. And we never allow any person or group to interfere with a customer’s enjoyment of our shop. This is your place and we do all we can to make it a safe, comfortable, and relaxed space for you and your friends. </div>
                    <div class="tab-pane fade" id="list-apple" role="tabpanel" aria-labelledby="list-apple-list" style="color: white;">We offer Wi-Fi to all of our customers free of charge. Each customer is provided with our wireless Internet password on his or her receipt. We spend a considerable amount of resources insuring that our wireless is easily accessible and reliable to all of our customers. </div>
                  </div>
                </div>
              </div>
            </form>

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
            <p style="color: black; margin-bottom: -100%;">For great coffee experience delivered at your home</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 col-md-5 mb-5 mb-md-5">
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter" style="color: black;"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook" style="color: black;"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram" style="color: black;"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-youtube" style="color: black;"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-pinterest" style="color: black;"></span></a></li>
            <li class="ftco-animate"><input type="text" placeholder="Email Address" style="margin-left: 130%; padding: 10px; width: 120%;"></li>
            <li class="ftco-animate"><input type="submit" value="Subscribe" class="btn btn-primary py-3 px-4" style="margin-left: 284%; margin-top: -2%"></li>
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
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Kaffa Bunn Cafe. All rights reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

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

</body>

</html>