<?php
include('blogpage/DBConnection.php');
include("blogpage/dashboard_controller.php");
include('blogpage/blogcall_function.php');

if (isset($_GET['post-slug'])) {
    $post = getPost($_GET['post-slug']);
} else {
    $post_all = getAllPost();
}
$topics = getAllTopics();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isset($_GET['post-slug']) ? $_GET['title'] : 'Blog' ?> | Censtleyo</title>
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
    <script src="layerslider/js/greensock.js" type="text/javascript"></script>
    <!-- Scripts For Layer Slider  -->

    <script src="../../themes.webinane.com/lifeline/layerslider/JQuery/jquery-easing-1.3.html" type="text/javascript"></script>
    <script src="../../themes.webinane.com/lifeline/layerslider/JQuery/jquery-transit-modified.html" type="text/javascript"></script>
    <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <!-- Document Ready Functions -->
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

</head>

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
                    <a href="#" title=""><img src="images/logo.png" alt="Logo" width="60" height="60" />
                        <h1><i>CENSTLEYO</i></h1>
                    </a>
                </div><!-- Logo -->
                <a class="header-btn" href="Blog.php?logout='1'" title="" style="margin-top: 15px; margin -left:-20px;">Logout</a>
                <nav class="menu">
                    <ul id="menu-navigation">
                        <li style="cursor: pointer;"><a href="index.html">Home</a>
                        </li>
                        <li><a href="about.php">About-Us</a>
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
                                        <li><a href="404page.php" title="">Head Of project</a></li>
                                        <li><a href="404page.php" title="">Co-ordinators</a></li>
                                        <li><a href="404page.php" title="">Institutions</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">School Programme</a>
                                    <ul class="drop-right">
                                        <li><a href="404page.php" title="">H.O.P</a></li>
                                        <li><a href="404page.php" title="">Scope</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact-Us</a>
                        </li>
                        <li class="active"><a href="#">Blog</a>
                    </ul>
                </nav><!-- Menu -->
                <li class="dropdown" style="margin-top: auto !important; float:right; margin-right:-790px;">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                        <a href="<?php echo $_SESSION['image']; ?>" class="html5lightbox" title=""><img src="<?php echo $_SESSION['image']; ?>" class="img-circle" width="60px" height="60px"></a>

                        <i class="icon-chevron-small-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                        <div class="logout-btn">
                            <a href="Blog.php?logout='1'" class="btn btn-primary" style="width: 50%; text-align:center; background-color: #e3c60a;  color: white; ">Logout</a>
                        </div>
                    </div>

                </li>
            </div>
        </header>
        <!--header-->
        <div class="responsive-header">
            <div class="responsive-topbar">
                <div class="responsive-topbar-info">
                    <ul>
                        <li><i class="fa fa-home"></i> Go to Home</li>
                        <li><i class="fa fa-phone"></i> 08104278862, 08069409225, 08136063399.</li>
                        <li><i class="fa fa-envelope"></i> Censtleyo1@gmail.com
                            / info@censtleyo.org</li>
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
                    <a href="index.html" title=""><img src="images/logo.png" alt="Logo" width="42" height="42">
                        <h1 style="color: #e3c60a;"><i>CENSTLEYO</i></h1>
                    </a>
                    <span class="menu-btn"><i class="fa fa-th-list"></i></span>
                </div>
                <li class="dropdown" style="margin-top: auto !important; float:right; margin-right:-790px;">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                        <img src="<?php echo $_SESSION['user']['image']; ?>" class="img-circle" width="60px" height="60px">

                        <i class="icon-chevron-small-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                        <div class="logout-btn">
                            <a href="Blog.php?logout='1'" class="btn btn-primary" style="width: 50%; text-align:center; background-color: #e3c60a;  color: white; ">Logout</a>
                        </div>
                    </div>

                </li>
            </div>

            <div class="responsive-menu">
                <span class="close-btn"><i class="fa fa-close"></i></span>
                <ul>
                    <li class="has-dropdown"><a href="index.html" title="">Home</a>
                    </li>
                    <li class="has-dropdown"><a href="about.php" title="">About-Us</a></li>
                    <li class="has-dropdown"><a href="#" title="">Programme</a>
                        <ul>
                            <li><a href="programme1.php">Programme 1</a></li>
                            <li><a href="programm2.php">Programme 2</a></li>
                            <li><a href="programme3.php">Programme 3</a></li>
                            <li><a href="programm4.php">Programme 4</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="#" title="">Project</a>
                        <ul>
                            <li class="has-dropdown"><a href="campusfellowship.php">Campus Fellowship</a>
                                <ul class="drop-right">
                                    <li><a href="404page.php" title="">Head Of project</a></li>
                                    <li><a href="404page.php" title="">Co-ordinators</a></li>
                                    <li><a href="404page.php" title="">Institutions</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">School Programme</a>
                                <ul class="drop-right">
                                    <li><a href="404page.php" title="">H.O.P</a></li>
                                    <li><a href="404page.php" title="">Scope</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="login.php" title="">Blog</a></li>
                    <li class="has-dropdown"><a href="contact.php" title="">Contact-Us</a>
                    </li>

                </ul>
            </div>
            <button class="responsive-donate">Donate Now</button>
        </div>
        <!--Responsive header-->
        <div id="layerslider-container-fw">
            <div id="layerslider" style="width: 100%; height: 450px; margin: 0px auto; ">
                <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
                    <img src="images/sliders2.jpg" class="ls-bg" alt="Slide background">
                </div><!-- Slide1 -->
                <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
                    <img src="images/slider1.jpg" class="ls-bg" alt="Slide background">
                </div><!-- Slide1 -->
                <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
                    <img src="images/slider3.jpg" class="ls-bg" alt="Slide background">
                </div><!-- Slide1 -->
            </div>
        </div><!-- Layer Slider -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
            </h3>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endif ?>
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
        <section class="inner-page">
            <div class="container">
                <div class="sec-heading">
                    <h2><strong>Latest</strong> Blog</h2>
                </div><!-- Section Title -->
                <div class="row">

                    <div class="left-content col-md-9">

                        <div class="blog-post">

                            <?php if (isset($_GET['post-slug'])) : ?>

                            <?php if ($post['published'] == 0) : ?>
                            <h2 class="post-title">Sorry... This post has not been published</h2>
                            <?php else : ?>
                            <h2><a href="<?php echo 'blogpage/filter_post.php?topic=' . $post['topic']['id'] ?>" title=""><?php echo $post['title']; ?></a></h2>
                            <a class="blog-post-img" href="<?php echo 'blogpage/filter_post.php?topic=' . $post['topic']['id'] ?>" title=""><img src="<?php echo  '../Admin/img/uploads/' . $post['image']; ?>" alt="" /></a>
                            <div class="blog-post-details">
                                <ul class="post-meta">
                                    <li><a href="#" title=""><i class="icon-calendar-empty"></i><span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span> </a></li>
                                    <li><a href="#" title=""><i class="icon-share-alt"></i>Home / Blog</a></li>
                                    <li><a href="#" title=""><i class="icon-map-marker"></i>In Nigeria Africa</a></li>
                                </ul>
                                <div class="post-desc">
                                    <p><?php echo html_entity_decode(substr($post['body'], 0, 100)); ?>
                                        <a href="<?php echo 'blogpage/filter_post.php?topic=' . $post['topic']['id'] ?>">Read More..</a>
                                    </p>

                                </div>

                            </div>

                            <?php endif ?>

                            <?php else : ?>
                            <div class="blog-post">

                            <?php foreach($post_all as $postall) : ?>
                            <h2><a href="<?php echo 'blogpage/filter_post.php?topic=' . $post['topic']['id'] ?>" title=""><?php echo $postall['title']; ?></a></h2>
                            <a class="blog-post-img" href="<?php echo 'blogpage/filter_post.php?topic=' . $post['topic']['id'] ?>" title=""><img src="<?php echo  '../Admin/img/uploads/' . $postall['image']; ?>" width="70px" height="520px"  alt="" /></a>
                            <div class="blog-post-details">
                                <ul class="post-meta">
                                    <li><a href="#" title=""><i class="icon-calendar-empty"></i><span><?php echo date("F j, Y ", strtotime($postall["created_at"])); ?></span> </a></li>
                                    <li><a href="#" title=""><i class="icon-share-alt"></i>Home / Blog</a></li>
                                    <li><a href="#" title=""><i class="icon-map-marker"></i>In Nigeria Africa</a></li>
                                </ul>
                                <div class="post-desc">
                                    <p><?php echo html_entity_decode(substr($postall['body'], 0, 100)); ?>
                                        <a href="<?php echo 'blogpage/filter_post.php?topic=' . $post ['topic']['id'] ?>">Read More..</a>
                                    </p>

                                </div>

                            </div>
                            <?php endforeach ?>
                            <?php endif ?>
                        </div><!-- Blog Post With Image -->

                        
                        </div><!-- Blog Post With Image -->
                    </div>

                    <div class="sidebar col-md-3 pull-right">
                        <div class="sidebar-widget">
                            <div class="sidebar-search">
                                <input class="search" type="text" placeholder="Enter Search Item" />
                                <input class="search-button" type="submit" value="" />
                            </div>

                        </div><!-- Sidebar Search -->
                        <div class="sidebar-widget">
                            <div class="sidebar-title">
                                <h4>Popular <span>Posts</span></h4>
                            </div>
                            <?php foreach ($topics as $topic_Id) : ?>
                            <div class="popular-post">

                                <img src="<?php echo  '../Admin/img/uploads/' . $post['image']; ?>" alt="" />
                                <div class="popular-post-title">

                                    <h6><a href="<?php echo 'blogpage/filter_post.php?topic=' . $post['topic']['id'] ?>" title=""><?php echo $topic_Id['name']; ?></a></h6>
                                    <span>May 3,2013 / 02 comments</span>
                                </div>
                            </div>
                            <?php endforeach ?>

                        </div><!-- Popular Posts -->



                    </div><!-- Sidebar -->
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
                <p>Copyright &copy; <?php echo date("Y"); ?> censtleyo. <span>All rights reserved.</span> </p>
                <ul>
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="about.php">About-Us</a>
                    </li>
                    <li><a href="project.php">programme</a></li>
                    <li><a href="login.php">Blog</a></li>
                    <li><a href="contact.php">Contact-Us</a>
                    </li>
                </ul>
            </div>
        </div><!-- Bottom Footer Strip -->
</body>

</html>