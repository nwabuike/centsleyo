<?php include('./php/reg_controller.php');?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Censtleyo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="g'OZieCHUKWU">
	<meta name="description" content="" />
	<meta name="keywords" itemprop='keywords' content="">
	<!--End of Google SEO-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- for Facebook -->
	<meta property="og:url" content="http://www.censtleyo.org" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/icons.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/yellow.css" title="yellow" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
	<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
	<style type="text/css">
		input:required:invalid,
		input:focus:invalid {
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);
			background-position: right top;
			background-repeat: no-repeat;
			-moz-box-shadow: none;
		}

		input:required:valid {
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
			background-position: right top;
			background-repeat: no-repeat;
		}
		#frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
	</style>

</head><!-- Head -->

<body>
	<div class="theme-layout">
		<div id="top-bar">
			<div class="container">
				<ul>
					<li>
						<i class="icon-home"></i>
						No 19 Nnobi Road, Nnewi, Anambra State, Nigeria.
					</li>
					<li>
						<i class="icon-phone"></i>
						08033157695, 08032090838, 08036972695.
					</li>
					<li>
						<i class="icon-envelope"></i>
						censtleyo@yahoo.com
					</li>
				</ul>
				<div class="search-box">
					<input type="submit" value="" class="submit-button">
					<input type="text" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" class="search-input">
				</div>
			</div>
		</div>
		<header class="sticky">
			<div class="container">
				<div class="logo">
					<a href="#" title=""><img src="images/logo.png" alt="Logo" width="60" height="60" />
						<h1><i>CENSTLEYO</i></h1>
					</a>
				</div><!-- Logo -->
				<a class="header-btn" href="#" title="" style="margin-top: 15px;">DONATE NOW</a>
				<nav class="menu">
					<ul id="menu-navigation">
						<li style="cursor: pointer;"><a href="./index.html">Home</a>
						</li>
						<li class="active"><a href="./about.php">About-Us</a>
						</li>
						<li><a href="#">Programme</a>
							<ul class="mega-menu">
										<li><a href="programme1.php">Abuja</a></li>
										<li><a href="programm2.php">Kaduna</a></li>
										<li><a href="programme3.php">Youth Development Anambra</a></li>
										<li><a href="programm4.php">Brainstorming</a></li>
							</ul>
						</li>
						<li><a href="">Project</a>
							<ul class="mega-menu">
								<li><a href="campusfellowship.php">Campus Fellowship</a>
									<ul class="drop-right">
										<li><a href="./404page.php" title="">Head Of project</a></li>
										<li><a href="./404page.php" title="">Co-ordinators</a></li>
										<li><a href="./404page.php" title="">Institutions</a></li>
									</ul>
								</li>
								<li><a href="#">School Programme</a>
									<ul class="drop-right">
										<li><a href="./404page.php" title="">H.O.P</a></li>
										<li><a href="./404page.php" title="">Scope</a></li>

									</ul>
								</li>
							</ul>
						</li>
						<li><a href="./contact.php">Contact-Us</a>
						</li>
						<li><a href="./login.php">Blog</a>

						</li>
					</ul>
				</nav><!-- Menu -->
			</div>
		</header>
		<!--header-->
		<div class="responsive-header">
			<div class="responsive-topbar">
				<div class="responsive-topbar-info">
					<ul>
						<li><i class="fa fa-home"></i> Go to Home</li>
						<li><i class="fa fa-phone"></i> 08033157695, 08032090838, 08036972695</li>
						<li><i class="fa fa-envelope"></i> censtleyo@yahoo.com</li>
					</ul>
					<div class="container">
						<div class="responsive-socialbtns">
							<ul>
								<li><a href="#" title=""><i class="fa fa-rss"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="responsive-logomenu">
				<div class="container">
					<a href="index.html" title=""><img src="images/logo.png" alt="Logo" width="42" height="42" /></a>
					<span class="menu-btn"><i class="fa fa-th-list"></i></span>
				</div>
			</div>
			<div class="responsive-menu">
				<span class="close-btn"><i class="fa fa-close"></i></span>
				<ul>
					<li class="has-dropdown"><a href="./index.html" title="">Home</a>
					</li>
					<li class="has-dropdown"><a href="./about.php" title="">About-Us</a></li>
					<li class="has-dropdown"><a href="#" title="">Programme</a>
						<ul>
										<li><a href="programme1.php">Abuja</a></li>
										<li><a href="programm2.php">Kaduna</a></li>
										<li><a href="programme3.php">Youth Development Anambra</a></li>
										<li><a href="programm4.php">Brainstorming</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Project</a>
						<ul>
							<li class="has-dropdown"><a href="campusfellowship.php">Campus Fellowship</a>
								<ul class="drop-right">
									<li><a href="./404page.php" title="">Head Of project</a></li>
									<li><a href="./404page.php" title="">Co-ordinators</a></li>
									<li><a href="./404page.php" title="">Institutions</a></li>
								</ul>
							</li>
							<li class="has-dropdown"><a href="#">School Programme</a>
								<ul class="drop-right">
									<li><a href="./404page.php" title="">H.O.P</a></li>
									<li><a href="./404page.php" title="">Scope</a></li>

								</ul>
							</li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="./login.php" title="">Blog</a></li>
					<li class="has-dropdown"><a href="./contact.php" title="">Contact-Us</a>
					</li>

				</ul>
			</div>
			<button class="responsive-donate">Donate Now</button>
		</div>
		<!--Responsive header-->
		<div class="top-image">
			<img src="images/single-page-top1.jpg" alt="" />
		</div><!-- Page Top Image -->

		<section class="inner-page">
			<div class="container">
				<div class="page-title">
					<h1>Registration <span>Form</span></h1>
				</div>
				<!--Page Title-->
	</div>
			<section id="regform" style="margin-top:-70px;">
				<div class="container">
					<form class="form-horizontal" role="form" id="reg" name="register" method="post" action="./php/reg_controller.php" enctype="multipart/form-data">
					<?php echo display_error(); ?>
						<h2>Registration</h2>
						<div id="error_msg"></div>
						<div class="form-group">
							<label for="firstName" class="col-sm-3 control-label">Full Name* </label>
							<div class="col-sm-9">
								<input type="text" id="fullname" name="fullname" required placeholder="Full Name" class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group" id="frmCheckUsername">
							<label for="email" class="col-sm-3 control-label">Email* </label>
							<div class="col-sm-9">
								<input type="email" id="email" required value="" placeholder="Email" class="form-control" name="email"  onBlur="checkAvailability()"><span id="user-availability-status"></span>
								<p><img src="images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
							</div>
						</div>
						<div class="form-group" data-validate="cannot be empty">
							<label for="password" class="col-sm-3 control-label">Password*</label>
							<div class="col-sm-9">
								<input type="password" id="password" required name="password" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="form-group" data-validate="cannot be empty">
							<label for="password" class="col-sm-3 control-label">Confirm Password*</label>
							<div class="col-sm-9">
								<input type="password" id="password" name="conpassword" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="form-group" data-validate="cannot be empty">
							<label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
							<div class="col-sm-9">
								<input type="date" id="birthDate" required name="dbirth" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="phoneNumber" class="col-sm-3 control-label">Phone number* </label>
							<div class="col-sm-9">
								<input type="phoneNumber" required name="phonenumber" id="phoneNumber" placeholder="Phone number" class="form-control">
								<span class="help-block">Your phone number won't be disclosed anywhere </span>
							</div>
						</div>
						<div class="form-group">
							<label for="occupation" class="col-sm-3 control-label">Occupation* </label>
							<div class="col-sm-9">
								<input type="text" id="occupation" required name="occupation" placeholder="Please write your occupation" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="address" class="col-sm-3 control-label">Address* </label>
							<div class="col-sm-9">
								<input type="text" id="address" required name="address" placeholder="Please write your adress" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="image" class="col-sm-3 control-label">Image* </label>
							<div class="col-sm-9">
								<input type="file" id="images" required name="image" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="firstName" class="col-sm-3 control-label">Nationality* </label>
							<div class="col-sm-9">
								<input type="text" id="nationality" name="nationlity" required placeholder="Your nationality plz!" class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Gender</label>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-4">
										<label class="radio-inline">
											<input type="radio" name="mradio" id="femaleRadio" value="Female" checked required>Female
										</label>
									</div>
									<div class="col-sm-4">
										<label class="radio-inline">
											<input type="radio" name="mradio" id="maleRadio" value="Male" checked required>Male
										</label>
									</div>
								</div>
							</div>
						</div> <!-- /.form-group -->
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3">
								<blink><span class="help-block">*Required fields</span></blink>
							</div>
						</div>
						<button type="submit" value="Register" class="btn btn-primary btn-block" name="register_btn">Register</button>
						<div class="text-center p-t-136">
							<a class="txt2" href="./login.php">
								Login your Account
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
			</section>
		</section>
		<footer class="style2">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-widget-title style2">
							<h4><strong>Keep in <span>Touch</span></strong></h4>
						</div>
						<div class="footer-about">
							<p>Center for Strategic Leadership and Youth Orientation (CENSTLEYO) is an authorized and registered Non-Governmental Organization (NGO) formed in October 2014. The establishment of this group was necessitated primarily by a clarion call for extrication, eradication and extermination of corruption in our society.</p>
							<ul class="address">
								<li><i class="fa fa-map-marker" style="color: #e3c60a;"></i> No 19 Nnobi Road, Nnewi, Anambra State, Nigeria</li>
								<li><i class="fa fa-phone" style="color: #e3c60a;"></i>08033157695, 08032090838, 08036972695</li>
								<li><i class="fa fa-phone" style="color: #e3c60a;"></i>Contact for Online Banking: 08033855388</li>
								<li><i class="fa fa-envelope" style="color: #e3c60a;"></i> censtleyo@yahoo.com</li>
							</ul>
							<ul class="social-links">
								<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div><!-- About Widget -->
					<div class="col-md-3">
						<div class="footer-widget-title style2">
							<h4><strong>Recent <span>Campains</span></strong></h4>
						</div>
						<div class="recent-campains-sec">
							<div class="recent-campain-post">
								<span><img src="images/daynight_1x.png" alt="" class="img-responsive" /></span>
								<div class="recent-campain-detail">
									<h5><a href="#" title="">Gone to Nigeria in Africa</a></h5>
									<span>6 months ago</span>
								</div>
							</div>
							<div class="recent-campain-post">
								<span><img src="images/ghana.jpg" alt="" class="img-responsive" /></span>
								<div class="recent-campain-detail">
									<h5><a href="#" title="">Gone to ghana in Africa</a></h5>
									<span>6 months ago</span>
								</div>
							</div>
							<div class="recent-campain-post">
								<span><img src="images/cameroon.jpg" alt="" class="img-responsive" /></span>
								<div class="recent-campain-detail">
									<h5><a href="#" title="">Gone to cameroon in Africa</a></h5>
									<span>6 months ago</span>
								</div>
							</div>
						</div>
					</div><!-- Recent Campains Widget -->
					<div class="col-md-3">
						<div class="footer-widget-title style2">
							<h4><strong>Youth <span>Empowerment</span></strong></h4>
						</div>
						<div class="helping-hand-sec">
							<div class="helping-hand-post">
								<span>70%</span>
								<div class="helping-hand-detail">
									<h5><a href="#" title="">Mission Is Human Dignity</a></h5>
									<span>Our Goal ( 35,000 )</span>

								</div>
							</div>
							<div class="helping-hand-post">
								<span>70%</span>
								<div class="helping-hand-detail">
									<h5><a href="#" title="">Mission Is Education & Leadership</a></h5>
									<span>Our Goal ( 50,000 )</span>

								</div>
							</div>
							<div class="helping-hand-post">
								<span>70%</span>
								<div class="helping-hand-detail">
									<h5><a href="#" title="">Mission Is Youth Empowerment</a></h5>
									<span>Our Goal ( 70,000 )</span>

								</div>
							</div>
						</div>
					</div><!-- Helping Hand Widget -->
					<div class="col-md-3">
						<div class="footer-widget-title style2">
							<h4><strong>Flickr <span>Photos</span></strong></h4>
						</div>
						<div class="flickr-images">
							<a href="#" title=""><img src="images/Agu Charles.png" alt="" /></a>
							<a href="#" title=""><img src="images/Obiagbosogu Nicholas.png" alt="" /></a>
							<a href="#" title=""><img src="images/Odoabuchi Emmanuel.png" alt="" /></a>
							<a href="#" title=""><img src="images/Chigozie NNebe.png" alt="" /></a>
							<a href="#" title=""><img src="images/Ezeamama Tonia.png" alt="" /></a>
							<a href="#" title=""><img src="images/Nwoku Chioma betty.png" alt="" /></a>
							<a href="#" title=""><img src="images/Okafor Johnbosco.png" alt="" /></a>
							<a href="#" title=""><img src="images/Ezenwugo Anthony.png" alt="" /></a>
							<a href="#" title=""><img src="images/Ezeodili Paschal.png" alt="" /></a>
						</div>
					</div><!-- Flickr Widget -->
				</div>
			</div>
		</footer><!-- Footer -->
		<div class="footer-bottom style2">
			<div class="container">
				<p>Copyright <?php echo date("Y"); ?> Censtleyo. <span>All rights reserved.</span> </p>

			</div>
		</div><!-- Bottom Footer Strip -->
		<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->
		<!-- Scripts -->
		<script src="js/jquery-2.2.2.js" type="text/javascript"></script>
		<script src="js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
		<script src="js/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="js/script.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/html5lightbox.js"></script>
		<script src="js/styleswitcher.js"></script>
		<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
		<script defer src="js/jquery.mousewheel.js"></script>
		<script>
			function checkAvailability() {
				$("#loaderIcon").show();
				let email = $("#email").val();
				jQuery.ajax({
					url: "./php/check_email.php",
					type: "POST",
					data: 'email='+email+'&checkmail=true',
					
					cache: "false",
					dataType: "json",
					success: function(data) {
						if(data){
							if(data == 1){
								$("#user-availability-status").html('<span style="color: green">Email is not taken</span>');
							} else if(data == 2){
								$("#user-availability-status").html('<span style="color: red">Email is taken</span>');
							} else {
								$("#user-availability-status").html('<span style="color: red">Server Error. Try again later</span>');
							}
							
							$("#loaderIcon").hide();
						}
						
					},
					error: function() {}
				});
			}
		</script>
		
</body>

</html>