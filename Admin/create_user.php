<?php include('./create_controller.php') ?>
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
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="../css/icons.css" rel="stylesheet" type="text/css" />
	<link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../css/yellow.css" title="yellow" />
	<link href="../css/responsive.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
	<link href="../css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
	<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->
	<!-- Scripts -->
	<script src="../js/jquery-2.2.2.js" type="text/javascript"></script>
	<script src="../js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
	<script src="../js/perfect-scrollbar.js" type="text/javascript"></script>
	<script src="../js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="../js/testimonials.js"></script>
	<script src="../js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
	<script src="../js/script.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/html5lightbox.js"></script>
	<script src="../js/styleswitcher.js"></script>
	<script type="text/javascript" src="../js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
	<script defer src="../js/jquery.flexslider.js"></script>
	<script defer src="../js/jquery.mousewheel.js"></script>
	<script src="../js/jquery.downCount.js"></script>
	<!-- Scripts For Layer Slider  -->
	<script src="../layerslider/js/greensock.js" type="text/javascript"></script>
	<!-- LayerSlider script files -->
	<script src="../layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="../layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.countdown').downCount({
				/* ==== Month / Date / Year ===*/
				date: '10/17/2017 12:00:00',
				offset: +10
			});
			$('.countdown.time2').downCount({
				/* ==== Month / Date / Year ===*/
				date: '07/90/2019 12:00:00',
				offset: +10
			});
			jQuery("#layerslider").layerSlider({
				responsive: true,
				responsiveUnder: 1280,
				layersContainer: 1170,
				skin: 'fullwidth',
				hoverPrevNext: true,
				skinsPath: 'layerslider/skins/'
			});
		});
	</script>

	<script>
		$(window).load(function() {
			$('.causes-carousel').flexslider({
				animation: "slide",
				animationLoop: false,
				controlNav: false,
				pausePlay: false,
				mousewheel: false,
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});

			$('.footer_carousel').flexslider({
				animation: "slide",
				animationLoop: false,
				slideShow: false,
				controlNav: true,
				maxItems: 1,
				pausePlay: false,
				mousewheel: false,
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
			$('.sponsors-carousel').flexslider({
				animation: "fade",
				animationLoop: false,
				slideShow: false,
				controlNav: false,
				maxItems: 1,
				pausePlay: false,
				mousewheel: false,
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});

			$('.featured-caro').owlCarousel({
				autoplay: true,
				autoplayTimeout: 2500,
				smartSpeed: 2000,
				autoplayHoverPause: true,
				loop: true,
				dots: false,
				nav: false,
				margin: 0,
				mouseDrag: true,
				items: 1,
				autoHeight: true,
				responsive: {
					1200: {
						items: 1
					},
					980: {
						items: 1
					},
					768: {
						items: 1
					},
					480: {
						items: 1
					},
					0: {
						items: 1
					}
				}
			});



		});
	</script>

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
					<a href="#" title=""><img src="../images/logo.png" alt="Logo" width="40" height="40" />
						<h1><i>C</i>enstleyo </h1>
					</a>
				</div><!-- Logo -->
				<a class="header-btn" href="#" title="" style="margin-top: 15px;">DONATE NOW</a>
				<nav class="menu">
					<ul id="menu-navigation">
						<li style="cursor: pointer;"><a href="../index.php">Home</a>
						</li>
						<li><a href="#about">About-Us</a>
						</li>
						<li><a href="../index.php">Project</a>
						<li><a href="../index.php">Admin</a>
						<li><a href="../index.php">Contact-Us</a>
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
					<a href="index.php" title=""><img src="../images/logo.png" alt="Logo" width="42" height="42" /></a>
					<span class="menu-btn"><i class="fa fa-th-list"></i></span>
				</div>
			</div>
			<div class="responsive-menu">
				<span class="close-btn"><i class="fa fa-close"></i></span>
				<ul>
					<li class="has-dropdown"><a href="#home" title="">Home</a>
					</li>
					<li class="has-dropdown"><a href="#project" title="">Project</a></li>
					<li class="has-dropdown"><a href="#about" title="">About-Us</a></li>
					<li class="has-dropdown"><a href="#" title="">Admin</a></li>
					<li class="has-dropdown"><a href="#contact" title="">Contact-Us</a>
					</li>

				</ul>
			</div>
			<button class="responsive-donate">Donate Now</button>
		</div>
		<!--Responsive header-->
		<div class="top-image">
			<img src="../images/single-page-top1.jpg" alt="" />
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
					<form class="form-horizontal" role="form" name="register" method="post" action="./create_controller.php" enctype="multipart/form-data">
						<h2>Registration</h2>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<?php if (count($errors) > 0) : ?>
						<div class="message error validation_errors">
							<?php foreach ($errors as $error) : ?>
							<p><?php echo $error ?></p>
							<?php endforeach ?>
						</div>
						<?php endif ?>
						<div class="form-group">
							<label for="lastName" class="col-sm-3 control-label">Full Name</label>
							<div class="col-sm-9">
								<input type="text" id="lastName" name="fullname" value="<?php echo $fullname; ?>" required placeholder="fullname Name" class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">Email* </label>
							<div class="col-sm-9">
								<input type="email" id="email" required value="<?php echo $email; ?>" placeholder="Email" class="form-control" name="email">
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
						<div class="form-group">
							<label for="image" class="col-sm-3 control-label">Image* </label>
							<div class="col-sm-9">
								<input type="file" id="images" required name="image" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">User type</label>
							<div class="col-sm-4">
								<select name="user_type" id="user_type">
									<option value=""> Select User Type</option>
									<option value="admin" name="admin">Admin</option>
									<option value="user" name="user">User</option>
								</select>
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
								<span><img src="../images/daynight_1x.png" alt="" class="img-responsive" /></span>
								<div class="recent-campain-detail">
									<h5><a href="#" title="">Gone to Nigeria in Africa</a></h5>
									<span>6 months ago</span>
								</div>
							</div>
							<div class="recent-campain-post">
								<span><img src="../images/ghana.jpg" alt="" class="img-responsive" /></span>
								<div class="recent-campain-detail">
									<h5><a href="#" title="">Gone to ghana in Africa</a></h5>
									<span>6 months ago</span>
								</div>
							</div>
							<div class="recent-campain-post">
								<span><img src="../images/cameroon.jpg" alt="" class="img-responsive" /></span>
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
							<a href="#" title=""><img src="../images/Agu Charles.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Obiagbosogu Nicholas.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Odoabuchi Emmanuel.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Chigozie NNebe.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Ezeamama Tonia.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Nwoku Chioma betty.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Okafor Johnbosco.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Ezenwugo Anthony.png" alt="" /></a>
							<a href="#" title=""><img src="../images/Ezeodili Paschal.png" alt="" /></a>
						</div>
					</div><!-- Flickr Widget -->
				</div>
			</div>
		</footer><!-- Footer -->
		<div class="footer-bottom style2">
			<div class="container">
				<p>Copyright Â© 2019 Global News. <span>All rights reserved.</span> </p>
				<ul>
					<li><a href="index.php" title="">HOME</a></li>
					<li><a href="about.html" title="">ABOUT</a></li>
					<li><a href="elements.html" title="">ELEMENTS</a></li>
					<li><a href="blog-with-sidebar.html" title="">BLOG</a></li>
					<li><a href="events.html" title="">EVENTS</a></li>
					<li><a href="contact.html" title="">CONTACT</a></li>
				</ul>

			</div>
		</div><!-- Bottom Footer Strip -->
		<script>
			$(function() {
				$.validator.setDefaults({
					highlight: function(element) {
						$(element)
							.closest('.form-group')
							.addClass('has-error')
					},
					unhighlight: function(element) {
						$(element)
							.closest('.form-group')
							.removeClass('has-error')
					}
				});

				$.validate({
						rules: {
							password: "required",
							birthDate: "required",
							address: {
								required: true,
								number: true
							},
							occupaton: {
								required: true,
								number: true
							},
							email: {
								required: true,
								email: true
							}
						},
						messages: {
							email: {
								required: true,
								email: true
							}
						},
						password: {
							required: " Please enter password"
						},
						birthDate: {
							required: " Please enter birthdate"
						},
						email: {
							required: ' Please enter email',
							email: ' Please enter valid email'
						},
						address: {
							required: " Please enter your address",
							address: " Only numbers and text allowed"
						},
						occupation: {
							required: " Please enter your occupation",

						},
					}

				});
			});
		</script>
</body>

</html>