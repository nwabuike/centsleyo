<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CENSTLEYO</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700" rel="stylesheet" type="text/css">
<!-- Styles -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/icons.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel=" stylesheet" type="text/css" href="css/yellow.css" title="yellow" />
<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="js/jquery-2.2.2.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/testimonials.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src='js/jquery.isotope.min.js'></script>
<script src="js/bootstrap.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/styleswitcher.js"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
<script src="js/jquery.downCount.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script>
$(window).load(function(){
  $(".countries").flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: false,	
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
	
  $(".footer_carousel").flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
	
	
});
</script>
</head>
<body>
<div class="theme-layout">
				<div id="top-bar">
					<div class="container">
						<ul>
							<li>
								<i class="icon-home"></i>
								No. 19 Nnobi Road, Nnewi, Anambra State, Nigeria.
							</li>
							<li>
								<i class="icon-phone"></i>
								08104278862, 08069409225, 08136063399.
							</li>
							<li>
								<i class="icon-envelope"></i>
								Censtleyo1@gmail.com
                                / info@censtleyo.org
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
							<a href="#" title=""><img src="images/logo.png" alt="Logo"  width="60" height="60"/><h1><i>CENSTLEYO</i></h1></a>
						</div><!-- Logo -->
						<a class="header-btn" href="#" title="" style="margin-top: 15px;">DONATE NOW</a>
						<nav class="menu">
								<ul id="menu-navigation">
									<li style="cursor: pointer;"><a href="./index.php">Home</a>
									</li>
									<li   class="active"><a href="./about.php">About-Us</a>			
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
				</header><!--header-->
				<div class="responsive-header">	
					<div class="responsive-topbar">		
						<div class="responsive-topbar-info">
							<ul>
								<li><i class="fa fa-home"></i> Go to Home</li>
								<li><i class="fa fa-phone"></i> 08104278862, 08069409225, 08136063399.</li>
								<li><i class="fa fa-envelope"></i>  Censtleyo1@gmail.com
									/info@censtleyo.org</li>
							</ul>
							<div class="container">
								<div class="responsive-socialbtns">
									<ul>
										
										<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
						
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="responsive-logomenu">
						<div class="container"> 
							<a href="index.php" title=""><img src="images/logo.png" alt="Logo" width="60" height="60"><h1 style="color: #e3c60a;"><i>CENSTLEYO</i></h1></a>
							<span class="menu-btn"><i class="fa fa-th-list"></i></span>
						</div>
					</div>
					<div class="responsive-menu">
							<span class="close-btn"><i class="fa fa-close"></i></span>
							<ul>
								<li class="has-dropdown"><a href="./index.php" title="">Home</a>
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
                </div><!--Responsive header-->
</div>
<div class="top-image">
	<img src="images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="inner-page">
	<div class="container">
		<div class="row">
			<div class="profile-page">
				<div class="col-md-6">
					<div class="tab-content profile-tabs-content" id="myTabContent">
						<div id="profile-pic1" class="tab-pane fade in active">
							<img src="images/Imah Felix.png" alt="" />
						</div>
						<div id="profile-pic2" class="tab-pane fade in">
							<img src="images/ceo.jpg" alt="" />
						</div>
						<div id="profile-pic3" class="tab-pane fade in">
							<img src="images/Imah Felix.png" alt="" />
						</div>
					</div>					
					
					
					<ul class="nav nav-tabs profile-tabs" id="myTab">
						<li class="active"><a data-toggle="tab" href="#profile-pic1"><img src="images/Imah Felix.png" alt="" /></a></li>
						<li><a data-toggle="tab" href="#profile-pic2"><img src="images/ceo.jpg" alt="" /></a></li>
						<li><a data-toggle="tab" href="#profile-pic3"><img src="images/Imah Felix.png" alt="" /></a></li>
					</ul>					
				</div>
				<div class="col-md-6">
					<h1><i class="icon-user"></i>Felix Imah Emeka</h1>
					<span class="designation">CHIEF EXECUTIVE OFFICER</span>
					<ul class="profile-info">
						<li>
							<span><i class="icon-lightbulb"></i>Experience:</span>
							<p>3 Years</p>
						</li>
						<li>
							<span><i class="icon-envelope"></i>Email:</span>
							<p>Info@censtleyo.org</p>
						</li>
						<li>
							<span><i class="icon-phone"></i>Phone:</span>
							<p>(+234) 8104278862</p>
						</li>
					</ul>
							<p><span class="cap coloured-invert">Mr.</span> Imah Felix Emeka, hails from Nkwuni, Isiama-Awlaw, in orji river L.G.A. of Enugu state. He is a business enterprenuer and the Chief Executive Officer(C.E.O) of <strong>"First class digital investment"</strong>, a company that deals with auto spare parts an d oversees other business.</p> 
							<p>He is a passionate enterprenuer and has keen interest in research and innovation, he is a studentb of public adminitration in Chukwuemeka Odumegwu Ojukwu University, Igbariam.</p>
					<p>He has attended several workshops and has acquired various business and managerial skill.</p>
					    <div class="benifits">
							<h3>He is currently holding the following offices:</h3>
							
							
							<ul>
								<li><i class="icon-check"></i>Vice president, catholic youth organization of nigeria (cyon), anambra state chapter.</li>
								<li><i class="icon-check"></i>Cheif consultant to catholic bishop of nnewi, most rev. Hilary odili okeke on youth affairs.</li>
								<li><i class="icon-check"></i>President general, youth wing of awlaw development union (a.d.u).</li>
								<li><i class="icon-check"></i>President, Catholic Youth organization of Nigieria (cyon) Nnewi diocese.</li>
							</ul>
							
							</div>
						</p>
						<p>Due to his passion for youthful innovation and inclusiveness in the scheme of things in the country, he founded the <strong>Center for Strategic Leadership and Youth Orietation (CENSTLEYO)</strong>, a non govdernmental organization (N.G.O) committed to enlighten, inform and inspire youths towards good leader4ship in order to create a new world where peace, unity, justice and equity shall reign.</p>
					
				</div>
			
				<div class="join-team">
					<div class="col-md-12">
						<h2>Want To Join Our Team?</h2>
						<p>Aenean eros erat, tincidunt vitae fringilla nec, fermentum et quam. Class aptent tac  torquent per con ubia nostra, per inceptos himen. Ut eleif end, nisi sed porta mollis, odio urna auctor tellus, eu semper neque erat vitae elit. Quisque sapien congue a, euismod rhoncus turpis. Integer aliquet tellus a neque elementum ornare. Nullam neque massa, sodales eu volutpat id, interdum ac nibh.</p>
						<a href="./login.php" title="">Join Our Team</a>
					</div>
				</div>
			</div>
		</div>	
	</div>	
		
	
</section>
<div class="container" style="margin-bottom: 30px;">
	<div class="col-md-3">
		<a class="btn" href="governingboard.php">Governing Board / Trustee</a>
	</div>
	  <div class="col-md-3">
		  <a class="btn" href="boardofdirector.php">Board of Directors</a>
	  </div>
		  <div class="col-md-3">
			  <a class="btn" href="admistartive.php">Adminstration / Secetariat</a>
		  </div>
	  </div>
</div>
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
                <p>Copyright &copy; <?php echo date("Y");?> censtleyo. <span>All rights reserved.</span> </p>
                    <ul>
                            <li><a href="./index.php">Home</a>
                            </li>
                            <li><a href="./about.php">About-Us</a>			
							</li>
							
                            <li><a href="./project.php">programme</a></li>
								<li><a href="./contact.php">Contact-Us</a>
									<li><a href="./login.php">Blog</a></li>
                            </li>
                        </ul>
            </div>
        </div><!-- Bottom Footer Strip -->
</body>
</html>