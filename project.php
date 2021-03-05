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
	<link rel="stylesheet" type="text/css" href="css/sea-green.css" title="sea-green" />
	<link rel="alternate stylesheet" type="text/css" href="css/brown.css" title="brown" />
	<link rel="alternate stylesheet" type="text/css" href="css/bright-red.css" title="bright-red" />
	<link rel="alternate stylesheet" type="text/css" href="css/yellow.css" title="yellow" />
	<link rel="alternate stylesheet" type="text/css" href="css/green.css" title="green" />
	<link rel="alternate stylesheet" type="text/css" href="css/hunter-green.css" title="hunter-green" />
	<link rel="alternate stylesheet" type="text/css" href="css/light-pink.css" title="light-pink" />
	<link rel="alternate stylesheet" type="text/css" href="css/orange.css" title="orange" />
	<link rel="alternate stylesheet" type="text/css" href="css/pink.css" title="pink" />
	<link rel="alternate stylesheet" type="text/css" href="css/red.css" title="red" />
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
		<div class="photography-nav">
			<ul>
				<li><a href="./index.php" class="smooth" title=""><span>Home</span></a></li>
				<li><a href="./index.php" class="smooth" title=""><span>About-Us</span></a></li>
				<li><a href="./index.php" class="smooth" title=""><span>Contact Us<span></a></li>
			</ul>
		</div>
		<header class="header2 sticky">
			<div class="container">
				<div class="logo">
					<a href="#" title=""><img src="images/logo.png" alt="Logo" width="40" height="40" />
						<h1><i>C</i>enstleyo </h1>
					</a>
				</div><!-- Logo -->
				<a class="header-btn" href="#" title="" style="margin-top: 15px;">DONATE NOW</a>
				<nav class="menu">
					<ul id="menu-navigation">
						<li style="cursor: pointer;"><a href="./index.php">Home</a>
						</li>
						<li><a href="./index.php">About-Us</a>
						</li>
						<li><a href="./project.php">Project</a>
						<li><a href="./login.php">Membership page</a>
						<li><a href="./index.php">Contact-Us</a>
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
					<li class="has-dropdown"><a href="./login.php" title="">Membership</a></li>

					<li class="has-dropdown"><a href="./index.php" title="">Contact-Us</a>
					</li>

				</ul>
			</div>
			<button class="responsive-donate">Donate Now</button>
		</div>
		<!--Responsive header-->
		<div id="layerslider-container-fw">
			<div id="layerslider" style="width: 100%; height: 530px; margin: 0px auto; ">

				<div class="ls-slide" data-ls="transition2d:53; timeshift:-1000;">
					<img src="images/slider1.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide1" style="top: 203px; left:248px; background: url(images/slider1-img2.png) no-repeat scroll 0 0 / auto 100% transparent; font-family:roboto; font-size:34px; font-weight:bold; color:#4c4c4c; line-height:56px; padding:0 60px 0 60px; ; border-radius:3px;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1000;easingin:easeOutQuad;fadein:false;rotatein:-10;offsetxout:0;durationout:1500;">
						<i>SAVE</i> <span>ENVIRONMENT</span></h3>
					<span class="ls-l slide1" style="top: 270px; left:248px; font-family:roboto; font-size:24px; font-weight:600; color:#000; padding:10px 20px 10px 50px; background:rgba(255,255,255,0.9); border-radius:4px 0 0px 4px; border-left:2px solid #93b631; position:relative; line-height:22px; float:left;" data-ls="offsetxin:0;offsetyin:top;durationin:1000;easingin:easeOutQuad;fadein:false;rotatein:10;offsetxout:0;durationout:1500;">BE
						READY TO WORK <i>WITH US</i></span>
					<p class="ls-l slide1" style="top: 330px; left:248px; font-family:roboto; font-size:13px; color:#fefefe;" data-ls="delayin:1000; scalein:4; durationin : 1000;">Good governance and Development</p>
				</div><!-- Slide1 -->
				<div class="ls-slide" data-ls="transition2d:12;timeshift:-1000;">
					<img src="images/slider2.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide3" style="top:196px; left:100px; font-family: roboto; color: #FFFFFF; line-height:22px; font-size:32px; background:rgba(0,0,0,0.85); padding:18px 30px; border-radius:3px;" data-ls="offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationin:1500; durationout:800; showuntil:2000; fadeout:false;">
						HELP <i>US</i> TO HELP OTHERS</h3>

					<h4 class="ls-l slide3" style="top:265px; left:100px; background:rgba(152,212,96,0.85); font-family: roboto; color: #FFFFFF; font-size:28px; line-height:26px; padding:10px 20px; border-radius:3px;" data-ls="offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationin:1500; durationout:800; delayin:500; showuntil:2500;fadeout:false;">
						MOTIVATION <span>INSPIRATION</span></h4>

					<h5 class="ls-l slide3" style="top:319px; left:100px; background:rgba(255,255,255,0.85); color:#595858; font-family:roboto; font-size:24px; line-height: 20px; padding:10px 20px; border-radius:3px;" data-ls="offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationin:1500; durationout:800; delayin:1000; showuntil:3000;fadeout:false;">
						CREATIVE <span>IDEAS</span></h5>
				</div><!-- Slide2 -->

				<div class="ls-slide" data-ls="transition2d:35;timeshift:-1000;">
					<img src="images/slider3.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l" style="top: 160px; left:160px; font-family:roboto; font-size:72px; font-weight:bold; color:#fff; line-height:60px; text-align:center;" data-ls="offsetxin:0;offsetyin:top;durationin:1500;delayin:1000;easingin:easeInOutQuart;fadein:false;scalexin:0;scaleyin:0;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;">
						I WANNA SAY <span>SOMETHING</span></h3>

					<span class="ls-l slide3-subtitle" style="top: 248px; left:160px; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1200;easingin:easeInOutQuart;fadein:false;scalexin:0;scaleyin:0;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;">Please
						Feel My <i style="font-style:normal; color:#373737;">Tension</i></span>
					<span class="ls-l slide3-subtitle2" style="top: 248px; left:750px; background:rgba(0,0,0,0.8); padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1300;easingin:easeInOutQuart;fadein:false;scalexin:0;scaleyin:0;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;">We
						<i style="font-style:normal;">Need</i> Your Help</span>
				</div><!-- Slide3 -->

				<div class="ls-slide" data-ls="transition3d:75;timeshift:-1000;">
					<img src="images/slider4.jpg" class="ls-bg" alt="Slide background">

					<h3 class="ls-l slide4" style="top:180px; left:150px; background:rgba(0,0,0,0.9); font-family:roboto; font-size:36px; font-weight:bold; color:#fefefe; padding:20px 60px 20px; border-radius:4px;" data-ls="offsetxin:bottom;durationin:2000;delayin:1000;easingin:easeInOutQuart;fadein:true;scalexin:0;scaleyin:0;offsetxout:left;durationout:1400;fadeout:true;">
						SAVE THE <i>WORLD</i></h3>
					<span class="ls-l slide4-subtitle" style="top:280px; left:215px;border-radius: 4px 4px 0 0; color: #FFFFFF;font-family: open sans;font-size: 13px;font-weight: bold; padding: 5px 10px;" data-ls="offsetxin:bottom;durationin:2000;delayin:1500;easingin:easeInOutQuart;fadein:true;scalexin:0;scaleyin:0;offsetxout:left;durationout:1400;fadeout:true;">Want
						To Know Why And How We Do It?</span>

					<h4 class="ls-l" style="top:315px; left:120px; color:#030303; font-family:source sans pro; font-size:20px; font-weight:700;" data-ls="offsetxin:bottom;durationin:2000;delayin:2000;easingin:easeInOutQuart;fadein:true;scalexin:0;scaleyin:0;offsetxout:left;durationout:1400;fadeout:true;">
						OUR CHARITY HELPS THOSE PEOPLE WHO HAVE NO HOPE</h4>

					<p class="ls-l" style="top:350px; left:20px; font-family:roboto; font-size:14px; color:#030303;" data-ls="offsetxin:bottom;durationin:2000;delayin:2000;easingin:easeInOutQuart;fadein:true;scalexin:0;scaleyin:0;offsetxout:left;durationout:1400;fadeout:true;">
						CENSTLEYO is committed to generation of young people with greater vision, innovation and focus. In this way, we harness, refocus and explore their potentials as the renewable energy of the society at large.
					</p>
				</div><!-- Slide4 -->
				<div class="ls-slide" data-ls="transition2d:63;timeshift:-1000;">
					<img src="images/slider5.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide5" style="top:80px; left:670px; font-family:open sans; font-size:36px; font-weight:700; color:#FFF;" data-ls="offsetxin:0;offsetyin:top;durationin:750;delayin:1000;easingin:easeOutQuart;fadein:false;offsetxout:right;durationout:1000;easingout:easeInQuart;fadeout:false;">
						Supporting <span>889</span> People</h3>
					<i class="ls-l slide5" style="top:130px; left:760px; font-family:open sans; font-size:20px; color:#FFF;" data-ls="offsetxin:0;offsetyin:top;durationin:750;delayin:500;easingin:easeOutQuart;fadein:false;offsetxout:right;durationout:1000;easingout:easeInQuart;fadeout:false;">fundraising
						& charity...</i>
					<h4 class="ls-l slide5-title" style="top:160px; left:560px; font-family:open sans; font-size:70px; font-weight:700; color:#FFF; line-height:55px; padding:50px 80px 80px; background:url(images/slider5-bg.png) no-repeat scroll 0 0 / 100% 100% transparent;" data-ls="offsetxin:0;offsetyin:0;durationin:1000;delayin:1400;easingin:easeOutQuart;fadein:false;easingout:easeInQuart;rotatexin:-90deg;">
						OPEN <span>H</span>EART</h4>
					<span class="ls-l" style="top:280px; left:710px; font-family:open sans; font-size:18px; font-weight:400; color:#FFF; letter-spacing:3px;" data-ls="offsetxin:0;offsetyin:0;durationin:1000;delayin:1700;easingin:easeOutQuart;fadein:false;easingout:easeInQuart;rotatexin:-90deg;">DONATE
						FOR NEEDY PEOPLE</span>
					<a class="ls-l slide-donate" style="top:350px; left:770px; font-family:open sans; font-size:12px; font-weight:400; color:#FFF; padding:10px 20px; border-radius:3px;" data-ls="offsetxin:0;offsetyin:700;durationin:1000;delayin:2000;easingin:easeOutQuart;fadein:false;easingout:easeInQuart;rotatexin:-90deg;" href="#" title=""><i class="icon-heart"></i> DONATE NOW</a>
				</div><!-- Slide5 -->
				<div class="ls-slide" data-ls="transition2d:63;timeshift:-1000;">
					<img src="images/slider6.jpg" class="ls-bg" alt="Slide background">
					<div class="ls-l slide-icon" style="top:70px; left:50%;" data-ls="scalexin:0;scaleyin:0;durationin:1000;delayin:400;easingin:easeOutQuart;fadein:false;easingout:easeInQuart;rotatein:-800deg;">
						<img src="images/slide6-icon.png" alt="" /></div>
					<h3 class="ls-l" style="top:190px; left:50%; color:#FFF; font-family:open sans; font-size:60px; font-weight:300;" data-ls="durationin:1500; delayin:1000; easingin:easeOutQuart; fadein:false; easingout:easeInQuart; rotatexin:-90deg;">
						LET'S BUILD <span style="font-weight:700;">THE WORLD.</span></h3>
					<p class="ls-l" style="top:290px; left:50%; line-height:30px; color:#FFF; font-family:noto sans; font-size:14px; text-align:center;" data-ls="durationin:1500; delayin:1500; easingin:easeOutQuart; fadein:false; easingout:easeInQuart; rotatexin:-90deg;">
						The picture writeup here shows the issue that was identified, the goals and objectives set by CENSTLEYO to remedy it. This is a project that will cut across 20 states of the country capturing the 6 geopolitical zones. This project will kick start by September 2019.
						<br />Join us in this task by supporting morally, financially and otherwise to get this mission accomplished</p>
					<div class="ls-l slide-donate2" style="top:370px; left:50%; font-family:open sans; font-size:12px; font-weight:400; color:#FFF; padding:10px 20px; border-radius:3px;" data-ls="durationin:1500; delayin:2000; easingin:easeOutQuart; fadein:false; easingout:easeInQuart; rotatexin:-90deg;">
						<a href="#" title=""><i class="icon-heart"></i> DONATE NOW</a></div>
				</div>

			</div>
		</div><!-- Layer Slider -->
		<section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="sec-heading">
							<h2><strong>Our</strong> Welfare Projects</h2>
						</div><!-- Section Title -->
						<div class="our-project-box">
							<div class="row">
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-5">
											<div class="icon-box">
												<i class="icon-cloud"></i>
												<div class="need">
													<p>NEED <span>&#8358;5,550,20</span></p>
													<a href="#" title="">Donate</a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="project-detail">
												<a>MOTIVATION / INSPIRATION</a>
												<p>Let us think of what we can do for our nation, not what our nation we do for us.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-5">
											<div class="icon-box">
												<i class="icon-asterisk"></i>
												<div class="need">
													<p>NEED <span>&#8358;5,550,20</span></p>
													<a href="#" title="">Donate</a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="project-detail">
												<a>Helping the Needy</a>
												<p> we have the strength to transform the society.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-5">
											<div class="icon-box">
												<i class="icon-sun"></i>
												<div class="need">
													<p>NEED <span>&#8358;5,550,20</span></p>
													<a href="#" title="">Donate</a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="project-detail">
												<a> Societal <span>Justice & Human Wellbeing</span></a>
												<p>Justice, good governance and a corrupt free society has always been our ideal values.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-5">
											<div class="icon-box">
												<i class="icon-truck"></i>
												<div class="need">
													<p>NEED <span>&#8358;5,550,20</span></p>
													<a href="#" title="">Donate</a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="project-detail">
												<a>HUMAN <span>Dignity & Morals</span></a>
												<p>CENSTLEYO gives you a communal platform that enhances human dignity and upholds human morality.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-5">
											<div class="icon-box">
												<i class="icon-leaf"></i>
												<div class="need">
													<p>NEED <span>&#8358;5,550,20</span></p>
													<a href="#" title="">Donate</a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="project-detail">
												<a>Education <span> & Leadership</span></a>
												<p>With CENSTLEYO, we believe that education and leadership is the tool needed to face the challenges of transforming our society.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-5">
											<div class="icon-box">
												<i class="icon-bar-chart"></i>
												<div class="need">
													<p>NEED <span>&#8358;115,550,20</span></p>
													<a href="#" title="">Donate</a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="project-detail">
												<a>Youth Empowerment / Job Creation</a>
												<p>The most important skill you need to succeed in life is the ability to generate wealth.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- Projects -->

					</div><!-- Projects -->

					<div class="col-md-3">
						<div class="donate-us">
							<h3>Give Your Donations</h3>
							<span><i class="icon-phone"></i> (234) 08032090838</span>
							<div class="collected">
								<p>Collected Donations</p>
								<span><strong>&#8358;</strong> 117,089,7!</span>
							</div>
							<div class="d-now">
								<a href="" class="donate-btn" title="">Donate Now</a>
							</div>
						</div><!-- Donate Us Box -->
						<div class="video">
							<img src="images/project18.jpg" alt="" />
							<span>Supporting a day center</span>
							<span class="play-video"><a class="html5lightbox" href="./videos/VID-20190715-WA0002.mp4" title="This Is our Project Video"><i class="icon-play"></i></a></span>
						</div><!-- Video -->
					</div>
				</div>
			</div>
		</section>
		<section class="block remove-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="welcome-box">
							<h2>WELCOME TO <strong>CENSTLEYO</strong> CENTER FOR STRATEGIC LEADERSHIP AND YOUTHS
								ORIENTATION.</h2>
							<p>
								BRIEF REPORT OF CENSTLEYO DIRECTORS MEETING IN KADUNA
								The meeting took place at Gamji Royal Guest House No. 24 Isa Kaita Road Unguwar Sarki
								Kaduna.
								On 5<sup>th</sup> July, 2019 and it started at 10:00 pm</p>
							<a href="./document/DOC-20190722-WA0001.pdf" target="_blank" title="" class="btn btn-primary">Read More...</a><span>Monthly Report</span>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Welcome Message -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Greetings from CENSTLEYO</h2>
						<p>
							Kindly watch on AIT and NTA, the dialogue session with the duty bearers and Youth groups in
							Abuja last Friday.</p>
						<p>
							This is an exclusive session that seeks to further strengthen relationship between the duty
							bearers and Youth groups in the design and implementation of specific programmes and
							policies that will guide youth development.
						</p>
						<p>
							<strong>#REFORM THE YOUTHS AND SOCIETY TRANSFORMATION AGENDA is CENSTLEYO's</strong> clarion
							call to duty on all its directorates to set and sustain strategy for enhancing the Youth
							development led initiatives and to strive to ensure that all the gaps, possible risks and
							challenges are timely identified and mitigated to achieve set goals.
						</p>
						<p>
							Our categories of actions are clear indication of our profound efforts towards creation of a
							new generation of young people with greater vision, innovation and focus to actualize the
							Sustainable Development Goals, SDGs agenda the government.
						</p>
						<p>
							We are getting to somewhere.
						</p>
						<p>
							The picture writeup here shows the issue that was identified, the goals and objectives set
							by CENSTLEYO to remedy it. This is a project that will cut across 20 states of the country
							capturing the 6 geopolitical zones. This project will kick start by September 2019.
						</p>
						<p>
							Join us in this task by supporting morally, financially and otherwise to get this mission
							accomplished.
						</p>
						<p>
							We are making a headway for the benefit of the younger and yet to born generation and
							promise never to look back until it's achieved. In the fewer days, I will be sending you
							that of NTA coverage of this programme.
						</p>
						<p>
							Accept our best regards and all the very best.
						</p>
						<p>
							We are CENSTLEYO, we have the strength to transform the society.

						</p>
						<p>
							Imah Felix Emeka,
							<em>Founder</em>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section style="margin-bottom: 30px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="gallery-content tab-content" id="myTabContent">
							<div id="events" class="tab-pane fade active in">

								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth1.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>

									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth2.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>

									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth3.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>

									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth4.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth5.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth6.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth7.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth8.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/youth9.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
							</div>
						</div>
					</div>
		</section>
		<section style="margin-bottom: 30px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="well" style="text-align: center;">
							<h2>Our journey to Kaduna</h2>
						</div>
						<p>
							You can also include how we journey from different part of Nigeria to meet at Abuja where we took Train to kaduna and also returned back to Abuja before dispersing</p>
						<div class="gallery-content tab-content" id="myTabContent">
							<div id="events" class="tab-pane fade active in">

								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project30.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>

									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project31.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>

									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project28.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>

									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project29.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project26.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project27.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project25.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project24.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project23.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project35.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project36.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project37.png" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project38.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project39.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
								<div class="col-md-3">
									<div class="gallery-image">
										<img src="images/project22.jpg" alt="" width="270" height="173" />
										<span>CENSTLEYO / EVENTS</span>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<section style="margin-bottom: 30px;">
			<div class="container">
				<div class="row">
					<div class="well" style="text-align: center;">
						<h2>Our third Programme </h2>
					</div>
					<p>
						Continue to thank God with us for the successful day 1 programme of CENSTLEYO Directors in Abuja on LEARN THE TOOLS.
						<p>
							We are glad to tell you, that our Directors are refined broad based THINK TANK OF EMINENT PROFESSIONALS with great passion for social values. CENSTLEYO considered this multi national ethnic structure at a time like this when it specifically seek to standardise her structures to face the task of developing and transforming young people in general towards achieving their potentials,and contributing meaningfully to our nation building.
						</p>
						<p>
							The training continues today with a dialogue session with National Assembly Members, Top Business Executives, Civil Society Organisations, Media and Youth Leaders of Various groups in Anambra State on <strong> SUSTAINABLE YOUTH DEVELOPMENT AGENDA SETTINGS</strong>.
							Continue to support and pray for us to achieve greatness more than expected in our today's engagement with the duty bearers.
						</p>
						<p>
							Our resolve is never to disappoint you in anyway.
							Renewed thanks and all the very best.
							We are <strong> CENSTLEYO</strong>, We have the strength to transform the society.
						</p>
						
							<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project1.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>

										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project2.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>

										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project5.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>

										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project4.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project19.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project21.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project10.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project9.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project8.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project13.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project11.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project15.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project16.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project41.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project42.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project43.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="gallery-image">
											<img src="images/project44.jpg" alt="" width="270" height="173" />
											<span>CENSTLEYO / EVENTS</span>
										</div>

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
							<p>Center for Strategic Leadership and Youth Orientation (CENSTLEYO) is an authorized and
								registered Non-Governmental Organization (NGO) formed in October 2014. The establishment
								of this group was necessitated primarily by a clarion call for extrication, eradication
								and extermination of corruption in our society.</p>
							<ul class="address">
								<li><i class="fa fa-map-marker" style="color: #e3c60a;"></i> No 19 Nnobi Road, Nnewi,
									Anambra State, Nigeria</li>
								<li><i class="fa fa-phone" style="color: #e3c60a;"></i>08033157695, 08032090838,
									08036972695</li>
								<li><i class="fa fa-phone" style="color: #e3c60a;"></i>Contact for Online Banking:
									08033855388</li>
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
									<h5><a href="#" title="">Gone to Anambra in Nigeria</a></h5>
									<span>6 months ago</span>
								</div>
							</div>
							<div class="recent-campain-post">
								<span><img src="images/ghana.jpg" alt="" class="img-responsive" /></span>
								<div class="recent-campain-detail">
									<h5><a href="#" title="">Gone to Kanduna in Nigeria</a></h5>
									<span>6 months ago</span>
								</div>
							</div>
							<div class="recent-campain-post">
								<span><img src="images/cameroon.jpg" alt="" class="img-responsive" /></span>
								<div class="recent-campain-detail">
									<h5><a href="#" title="">Gone to Abuja in Nigeria</a></h5>
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
							<h4><strong>Members <span>Photos</span></strong></h4>
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
				<ul>

				</ul>

			</div>
		</div><!-- Bottom Footer Strip -->
		<script>
			$(function() {
				var $portfolio = $('#portfolio');
				$portfolio.isotope({
					masonry: {
						columnWidth: 10
					}
				});

				var $optionSets = $('#options .option-set'),
					$optionLinks = $optionSets.find('a');
				$optionLinks.click(function() {
					var $this = $(this);
					// don't proceed if already selected
					if ($this.hasClass('selected')) {
						return false;
					}
					var $optionSet = $this.parents('.option-set');
					$optionSet.find('.selected').removeClass('selected');
					$this.addClass('selected');
					var options = {},
						key = $optionSet.attr('data-option-key'),
						value = $this.attr('data-option-value');
					// parse 'false' as false boolean
					value = value === 'false' ? false : value;
					options[key] = value;
					if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
						// changes in layout modes need extra logic
						changeLayoutMode($this, options)
					} else {
						// otherwise, apply new options
						$portfolio.isotope(options);
					}

					return false;
				});
			});
		</script>
</body>

</html>