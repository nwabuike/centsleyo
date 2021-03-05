<?php 
include('blogpage/DBConnection.php');
include("php/dashboard_controller.php");
include("blogpage/blogcall_function.php");
?>
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
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
	<link rel=" stylesheet" type="text/css" href="css/yellow.css" title="yellow" />
	<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->
	<!-- Scripts -->
	<script src="js/jquery-2.2.2.js" type="text/javascript"></script>
	<script src="js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
	<script src="js/perfect-scrollbar.js" type="text/javascript"></script>
	<script src='js/testimonials.js'></script>
	<script src='js/bootstrap.js'></script>
	<script src="js/html5lightbox.js"></script>
	<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
	<script src='js/styleswitcher.js'></script>
	<script src='js/script.js'></script>
	<script defer src="js/jquery.flexslider.js"></script>
	<script defer src="js/jquery.mousewheel.js"></script>


	<!-- Scripts For Layer Slider  -->
	<script src="layerslider/js/greensock.js" type="text/javascript"></script>
	<!-- LayerSlider script files -->
	<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
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
			$('.stories-carousel').flexslider({
				animation: "slide",
				animationLoop: false,
				controlNav: false,
				maxItems: 1,
				pausePlay: false,
				mousewheel: false,
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
			$('.slideshow').flexslider({
				animation: "fade",
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
			$('.ongoing-projects').flexslider({
				animation: "slide",
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

		});
	</script>
</head><!-- Head -->

<body>
	<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success">
			<h3>
				<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>
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
		<header class="header2 sticky" style="margin-bottom:-50px;">
			<div class="container">
				<div class="logo">
					<a href="#" title=""><img src="images/logo.png" alt="Logo" width="40" height="40" />
						<h1><i>C</i>enstleyo </h1>
					</a>
				</div><!-- Logo -->
				<a class="header-btn" href="#" title="" style="margin-top: 15px; margin-right: -100px;">DONATE NOW</a>
				<nav class="menu">
					<ul id="menu-navigation">
						<li style="cursor: pointer;"><a href="./index.php">Home</a>
						</li>
						<li><a href="#about">About-Us</a>
						</li>
						<li><a href="./project.php">Project</a></li>
						<li><a href="./admin_login.php">Admin</a></li>
						<li><a href="./index.php">Contact-Us</a>
						</li>
						<li class="dropdown">
							<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
								<img src="<?php echo $_SESSION['user']['image']; ?>" class="img-circle" width="60px" height="60px">
								<?php if (isset($_SESSION['user'])) : ?>
									<strong><?php echo $_SESSION['user']['firstname']; ?></strong>

									<i class="icon-chevron-small-down"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="logout-btn">
										<a href="membership.php?logout='1'" class="btn btn-primary" style="width: 100%; text-align:center; background-color: #e3c60a;  color: white; ">Logout</a>
									</div>
								</div>
							<?php endif ?>
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
					<a href="index.php" title=""><img src="images/logo.png" alt="Logo" width="42" height="42" /></a>
					<span class="menu-btn"><i class="fa fa-th-list"></i></span>
				</div>
			</div>
			<div class="responsive-menu">
				<span class="close-btn"><i class="fa fa-close"></i></span>
				<ul>
					<li class="has-dropdown"><a href="./index.php" title="">Home</a>
					</li>
					<li class="has-dropdown"><a href="./project.php" title="">Project</a></li>
					<li class="has-dropdown"><a href="./index.php" title="">About-Us</a></li>
					<li class="has-dropdown"><a href="./admin_login.php" title="">Admin</a></li>

					<li class="has-dropdown"><a href="./index.php" title="">Contact-Us</a>
					</li>

				</ul>
			</div>
			<button class="responsive-donate">Donate Now</button>
		</div>

		<!--Responsive header-->
		<div class="top-image">
			<img src="images/single-page-top1.jpg" alt="" />
		</div><!-- Page Top Image -->

		<section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="sec-heading">
							<h2><strong>What We're Doing</strong> Right Now</h2>
						</div>
						<div class="ongoing-projects">
							<div class="row">
								<ul class="slides">
									<li>
										<div class="row">
											<div class="col-md-5">
												<div class="ongoing-project-img">
													<img src="images/project13.jpg" alt="" />
													<a class="html5lightbox" href="./videos/VID-20190715-WA0001.mp4" title=""><i class="icon-play"></i></a>
												</div>
											</div>
											<div class="col-md-7">
												<div class="ongoing-project-detail">
													<h3>We are unstoppable</h3>
													<p>
														We are making a headway for the benefit of the younger and yet to born generation and promise never to look back until it's achieved. In the fewer days, I will be sending you that of NTA coverage of this programme.</p>

												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-5">
												<div class="ongoing-project-img">
													<img src="images/project10.jpg" alt="" />
													<a class="html5lightbox" href="./videos/VID-20190715-WA0002.mp4" title=""><i class="icon-play"></i></a>
												</div>
											</div>
											<div class="col-md-7">
												<div class="ongoing-project-detail">
													<h3>We are the best</h3>
													<p>
														The picture writeup here shows the issue that was identified, the goals and objectives set by CENSTLEYO to remedy it. This is a project that will cut across 20 states of the country capturing the 6 geopolitical zones. This project will kick start by September 2019.</p>

												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<a class="header-btn" href="#" title="" style="margin-right: 500px;">DUES</a>
					</div>

					<div class="col-md-3">
						<div class="sec-heading">
							<h2><strong>Upcoming</strong> Events</h2>
						</div>
						<div class="upcoming-event">
							<img src="images/ongoing-project.jpeg" alt="" />
							<h5>Directors in-house Learning Programme </h5>
							<ul>
								<li><a href="#" title=""><i class="icon-twitter"></i>Twitter Updates</a></li>
								<li><a href="#" title=""><i class="icon-calendar"></i>July 26th-27th 2019</a></li>
								<li><a href="#" title=""><i class="icon-pencil"></i>BRAINSTORMING EXERCISE</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="" style="margin-bottom:30px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="sec-heading">
							<h2><strong>Our</strong> Able Directors</h2>
						</div><!-- Section Title -->
						<div class="row" style="text-align:center;">
							<div class="col-sm-3">
								<div class="">
									<img src="images/frMaurice.jpg" class="img-circle" width="270px" height="275px" />
									<h4>Rev. FR. Dr. Maurice Izunwa</h4>
									<span>Initiator</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Imah Felix.png" class="img-circle" width="270px" height="275px" />
									<h4>Imah Felix Emeka</h4>
									<span>Initiator</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Alhaji Abdullahi Bayero Director political development.jpg" class="img-circle" width="270px" height="275px" />
									<h4>Alhaji Abdullahi Bayero</h4>
									<span>Director political development</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Comrade.jpeg" class="img-circle" width="270px" height="275px" />
									<h4>Comrade. Obiagbasgu Nicholas A.</h4>
									<span>B.sc, CHO, Ond., Director of Medicals</span>
								</div>
							</div>

							<div class="row" style="text-align: center;">

								<div class="col-sm-3">
									<div class="">
										<img src="images/Dr Kingsley Ubaoji.jpeg" class="img-circle" width="270px" height="275px" />
										<h4>Dr Kingsley Ubaoji</h4>
										<span>Head of directors: A Biochemist, Phd. lecturer, Nnamdi Azikwe University.</span>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="">
										<img src="images/uche.jpg" class="img-circle" width="270px" height="275px" />
										<h4>Commodre Uche Madubuko</h4>
										<span>The Programme Director/Manager.</span>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="">
										<img src="images/Barr. Ngene.jpeg" class="img-circle" width="270px" height="275px" />
										<h4>Barr. Ngene Eunice</h4>
										<span>Director of Legals</span>
									</div>

								</div>
								<div class="col-sm-3">
									<div class="">
										<img src="images/Abah Martha.jpeg" class="img-circle" width="270px" height="275px" />
										<h4>Abah Martha Gabriel.</h4>
										<span>Morals</span>
									</div>
								</div>
								<!--1st row-->
							</div>
						</div>
						<div class="row" style="text-align: center;">
							<div class="col-sm-3">
								<div class="">
									<img src="images/Bawa Yusuf.jpg" class="img-circle" width="270px" height="275px" />
									<h4>Muhammad Bawa Yusuf</h4>
									<span>Nasarawa State university keffi. Department of Biochemistry and Molecular Biology. Directorate of talent development CENSTLEYO</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Uzor R. Miracle.jpg" class="img-circle" width="270px" height="275px" />
									<h4>Uzor R. Miracle</h4>
									<span>Director Of Communication</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Nwoku Chioma betty.png" class="img-circle" width="270px" height="275px" />
									<h4>Nwoku Chioma betty</h4>
									<span>Member</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Ezenwugo Anthony.png" class="img-circle" width="270px" height="275px" />
									<h4>Ezenwugo Anthony</h4>
									<span>Member</span>
								</div>

							</div>
						</div>
						<div class="row" style="text-align: center;">
							<div class="col-sm-3">
								<div class="">
									<img src="images/Bawa Yusuf.jpg" class="img-circle" width="270px" height="275px" />
									<h4>Muhammad Bawa Yusuf</h4>
									<span>Nasarawa State university keffi. Department of Biochemistry and Molecular Biology. Directorate of talent development CENSTLEYO</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Ezeodili Paschal.png" class="img-circle" width="270px" height="275px" />
									<h4>Ezeodili Paschal</h4>
									<span>Member</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Ezeamama Tonia.png" class="img-circle" width="270px" height="275px" />
									<h4>Ezeamama Tonia</h4>
									<span>Member</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Odoabuchi Emmanuel.png" class="img-circle" width="270px" height="275px" />
									<h4>Odoabuchi Emmanuel</h4>
									<span>Member</span>
								</div>

							</div>
						</div>
						<div class="row" style="text-align: center;">
							<div class="col-sm-3">
								<div class="">
									<img src="images/Ven Okeke.png" class="img-circle" width="270px" height="275px" />
									<h4>Ven Okeke</h4>
									<span>Member</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Okafor Johnbosco.png" class="img-circle" width="270px" height="275px" />
									<h4>Okafor Johnbosco</h4>
									<span>Member</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Nwankwo Emmanuel.png" class="img-circle" width="270px" height="275px" />
									<h4>Nwankwo Emmanuel</h4>
									<span>Member</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="">
									<img src="images/Chigozie NNebe.png" class="img-circle" width="270px" height="275px" />
									<h4>Chigozie NNebe</h4>
									<span>Member</span>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
                    <div class="row">
						<div class="well">
                         <h3>Write Your <Article>post</Article></h3>
						</div>
						<div class="col-md-12">
								<?php if (isset($user_id)) : ?>
								<form class="clearfix" action="membership.php" method="post" id="comment_form">
									<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
									<button class="btn btn-primary btn-sm pull-right" id="submit_post">Post</button>
								</form>
					</div>
					
												<?php endif ?>
					<div class="col-md-9">				
			<h2 sub-head><?php echo $post['title'] ?></h2>
			<p><?php echo $post['body']; ?></p>
			<div class=" ">
				<!-- if user is not signed in, tell them to sign in. If signed in, present them with comment form -->
				<?php if (isset($user_id)) : ?>
					<form class="clearfix" action="membership.php" method="post" id="comment_form">
						<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
						<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
					</form>


			
					</div>
			</div>
		</div>
	</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="comments">
							<!-- Display total number of comments on this post  -->
							<h3 class="sub-head"><?php echo count($comments) ?>Comment(s)</h3>
							<hr>
							<ul>
								<li>
									<?php if (isset($comments)) : ?>
										<!-- Display comments -->
										<?php foreach ($comments as $comment) : ?>
											<!-- comment -->
											<div class="comment">
												<img src="<?php echo $_SESSION['user']['image']; ?>" width="60px" height="60px" alt="" class="profile_pic">
												<a class="reply" href="#" data-id="<?php echo $comment['id']; ?>">reply</a>
												<h5 class="comment-name"><?php echo getUsernameById($comment['user_id']) ?></h5>
												<div class="comment-details">
													<span><?php echo getUsernameById($comment['user_id']) ?></span>
													<i><?php echo date("F j, Y ", strtotime($comment["created_at"])); ?></i>
													<p><?php echo $comment['body']; ?></p>

													<div>
														<!-- reply form -->
														<form action="membership.php" class="reply_form " id="comment_reply_form_<?php echo $comment['id'] ?>" data-id="<?php echo $comment['id']; ?>" style="display:none;">
															<textarea class="form-control" name="reply_text" id="reply_text" cols="30" rows="2"></textarea>
															<button class="btn btn-primary btn-xs pull-right submit-reply">Submit reply</button>
														</form>
													<?php endforeach ?>
												<?php endif ?>
											</div>
										</div>
										<!-- // comment -->
									</div>
								</li>
							</ul>
						</div>
					<?php else : ?>
						<h2>Be the first to comment on this post</h2>
					<?php endif ?>
					<div class="comment">
						<!-- GET ALL REPLIES -->
						<?php $replies = getRepliesByCommentId($comment['id']) ?>
						<div class="replies_wrapper_<?php echo $comment['id']; ?>">
							<?php if (isset($replies)) : ?>
								<?php foreach ($replies as $reply) : ?>

								<?php endforeach ?>
							<?php endif ?>
						</div>
					</div>


				</div>

			</div>
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
				<p>Copyright Ã‚Â© 2019 Censtleyo. <span>All rights reserved.</span> </p>


			</div>
		</div>
		<script>
			$(".reply").click(function() {
				$(".reply_form").toggle();
			});
		</script>
</body>

</html>