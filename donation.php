<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Censtleyo</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700"
        rel="stylesheet" type="text/css">
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
        $(document).ready(function (e) {
            $("#contactform").on('submit', (function (e) {
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $("#contactform").show();
                $.ajax({
                    url: "./php/conactmail.php",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        "name": $('input[name="name"]').val(),
                        "email": $('input[name="email"]').val(),
                        "phone": $('input[name="phone"]').val(),
                        "comments": $('textarea[name="comments"]').val(),
                        "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                    },
                    success: function (response) {
                        $("#mail-status").show();
                        $('#loader-icon').hide();
                        if (response.type == "error") {
                            $('#send-message').show();
                            $("#mail-status").attr("class", "error");
                        } else if (response.type == "message") {
                            $('#send-message').hide();
                            $("#mail-status").attr("class", "success");
                        }
                        $("#mail-status").html(response.text);
                    },
                    error: function () { }
                });
            }));
        });
    </script>
      <script>
            var firstName = "";
            var lastName = "";
            var email = "";
            var dType = "";
            var receipt = "";
            var anon = "";
            var list = "";
            var amt = "";
    
            $('.set-amount').autoGrow(0);
    
            /*
                if(isiPad || jQuery.browser.mobile){
                    $('#team').hide()
                    $('.team-mobile').show();	
                }else{
                    $('#team').show()
                    $('.team-mobile').hide();
                }
            */
    
            //Set & Highlight Donation Amount
            $(".button").click(function () {
                $(".button").removeClass("selected");
                $(this).addClass("selected");
    
                $(this).find("input").focus();
            });
    
            //Grow the donation box if they type more than 4 numbers
            $(".set-amount").keyup(function () {
    
                if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                    this.value = this.value.replace(/[^0-9\.]/g, '');
                }
    
            });
    
    
            $("input").on("change", function () {
                // $(".donation-box").css("height", "500px");
    
                firstName = $("#firstName").val();
                lastName = $("#lastName").val();
                email = $("#email").val();
    
                if ($("#one-time").prop("checked")) {
                    dType = "One-Time";
                }
                if ($("#monthly").prop("checked")) {
                    dType = "Monthly";
                }
    
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
                    <input type="text" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';"
                        onblur="if(this.value=='')this.value=this.defaultValue;" class="search-input">
                </div>
            </div>
        </div>
        <header class=" sticky">
            <div class="container">
                <div class="logo">
                    <a href="#" title=""><img src="images/logo.png" alt="Logo" width="60" height="60" />
                        <h1><i>CENSTLEYO</i></h1>
                    </a>
                </div><!-- Logo -->
                <a class="header-btn" href="donation.php" title="" style="margin-top: 15px;">DONATE NOW</a>
                <nav class="menu">
                    <ul id="menu-navigation">
                        <li style="cursor: pointer;"><a href="./index.php">Home</a>
                        </li>
                        <li><a href="./about.php">About-Us</a>
                        </li>
                        <li><a href="#">Programme</a>
                            <ul class="mega-menu">
                                <li><a href="./programme1.php">Abuja</a></li>
                                <li><a href="./programm2.php">Kaduna</a></li>
                                <li><a href="./programme3.php">Youth Development Anambra</a></li>
                                <li><a href="./programm4.php">Brainstorming</a></li>
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
                    <a href="index.php" title=""><img src="images/logo.png" alt="Logo" width="42" height="42">
                        <h1 style="color: #e3c60a;"><i>CENSTLEYO</i></h1>
                    </a>
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
                            <li><a href="./programme1.php">Abuja</a></li>
                            <li><a href="./programm2.php">Kaduna</a></li>
                            <li><a href="./programme3.php">Youth Development Anambra</a></li>
                            <li><a href="./programm4.php">Brainstorming</a></li>
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
                    <li class="has-dropdown"><a href="./login.php" title="">Blog</a></li>
                    <li class="has-dropdown"><a href="./contact.php" title="">Contact-Us</a>
                    </li>

                </ul>
            </div>
            <button class="responsive-donate">Donate Now</button>
        </div>
        <!--Responsive header-->
        <div class="top-image">
            <img src="images/single-page-top3.jpg" alt="" />
        </div><!-- Page Top Image -->
        <section class="inner-page" id="regform" >
            <div class="container">
                <div class="page-title">
                    <h1>Donate <span>Us</span></h1>
                </div>
                <!--Page Title-->
            </div>
                <section id="regform"  style="margin-top:-70px;">
                <div class="container">

                    <div class="col-md-offset-3 col-xs-8 col-lg-8 col-xlg-8 col-8">

                        <div class="donation-all"  style="margin-top:140px;">

                            <div class="dona-box">
                                <div class="title">Donation Information</div>

                                <div class="fields">
                                    <input type="text" id="firstName" placeholder="First Name"> </input>
                                    <input type="text" id="lastName" placeholder="Last Name"> </input>
                                    <input type="text" id="email" placeholder="Email"> </input>
                                </div>

                                <div class="amt">
                                    <div class="btn" style="width: 100px; margin-bottom: 5px;">&#8358;1300</div>
                                    <div class="btn" style="width: 100px; margin-bottom: 5px">&#8358;1500</div>
                                    <div class="btn" style="width: 100px; margin-bottom: 5px">&#8358;1000</div>
                                    <div class="btn" style="width: 100px; margin-bottom: 5px">&#8358;<input type="text"
                                            class="set-amount" maxlength="12" placeholder=""> </input></div>
                                </div>

                                <div class="switch">
                                    <input type="radio" class="switch-input" name="view" value="One-Time" id="one-time"
                                        checked="">
                                    <label for="one-time" class="switch-label switch-label-off">One-Time</label>
                                    <input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
                                    <label for="monthly" class="switch-label switch-label-on">Monthly</label>
                                    <span class="switch-selection"></span>
                                </div>

                                <div class="check">
                                    <input type="checkbox" id="receipt" class="checkbox" />
                                    <label for="receipt">Email Me A Receipt</label>
                                    <br />
                                    <input type="checkbox" id="anon" class="checkbox" />
                                    <label for="anon">Give Anonymously</label>
                                    <br />
                                    <input type="checkbox" id="list" class="checkbox" />
                                    <label for="list">Add Me To Email List</label>
                                </div>

                                <div class="confirm">

                                </div>

                                <div class="donate-me"><i class="fa fa-credit-card"></i> Donate Now</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        </section>
    </div>
    <footer class="style2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget-title style2">
                        <h4><strong>Keep in <span>Touch</span></strong></h4>
                    </div>
                    <div class="footer-about">
                        <p>Center for Strategic Leadership and Youth Orientation (CENSTLEYO) is an authorized and
                            registered Non-Governmental Organization (NGO) formed in October 2014. The establishment of
                            this group was necessitated primarily by a clarion call for extrication, eradication and
                            extermination of corruption in our society.</p>
                        <ul class="address">
                            <li><i class="fa fa-map-marker" style="color: #e3c60a;"></i> No 19 Nnobi Road, Nnewi,
                                Anambra State, Nigeria</li>
                            <li><i class="fa fa-phone" style="color: #e3c60a;"></i>08033157695, 08032090838, 08036972695
                            </li>
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
                <li><a href="./index.php">Home</a>
                </li>
                <li><a href="./about.php">About-Us</a>
                </li>
                <li><a href="./project.php">programme</a></li>
                <li><a href="./login.php">Blog</a></li>
                <li><a href="./contact.php">Contact-Us</a>
                </li>
            </ul>
        </div>
    </div><!-- Bottom Footer Strip -->
</body>

</html>