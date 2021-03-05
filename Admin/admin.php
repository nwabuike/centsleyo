<?php include('./session_controller.php'); ?>
 	
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Censtleyo Admin Panel" />
	<meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="shortcut icon" href="img/favicon.ico" />
	<title>Censtleyo Admin Dashboard</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

	<!-- Common CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />
	<link rel="stylesheet" href="css/main.css" />

	<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
	<!-- Chartist css -->
	<link href="vendor/chartist/css/chartist.min.css" rel="stylesheet" />
	<link href="vendor/chartist/css/chartist-custom.css" rel="stylesheet" />

</head>

<body>

	<!-- Loading starts -->
	<div class="loading-wrapper">
		<div class="loading"></div>
	</div>
	<!-- Loading ends -->

	<!-- BEGIN .app-wrap -->
	<div class="app-wrap">
		<!-- BEGIN .app-heading -->
		<header class="app-header">
			<div class="container-fluid">
				<div class="row ">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8">
						<a href="index-2.html" class="logo">
							<img src="../images/logo.png" alt="Unify Admin Dashboard">
						</a>
						<a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
							<i class="icon-sort"></i>
						</a>
						<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
							<i class="icon-chevron-thin-left"></i>
						</a>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-4">
						<ul class="header-actions">
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-notifications_none"></i>
									<span class="count-label"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
									<ul class="imp-notify">
										<li>
											<div class="icon">W</div>
											<div class="details">
												<p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
											</div>
										</li>
										<li>
											<div class="icon">J</div>
											<div class="details">
												<p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
											</div>
										</li>
										<li>
											<div class="icon secondary">R</div>
											<div class="details">
												<p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!
												</p>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-person_outline"></i>
									<span class="count-label red"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
									<ul class="stats-widget">
										<li>
											<h4>$37895</h4>
											<p>Revenue <span>+2%</span></p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
													<span class="sr-only">87% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<h4>4,897</h4>
											<p>Downloads <span>+39%</span></p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
													<span class="sr-only">65% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<h4>2,219</h4>
											<p>Uploads <span class="text-secondary">-7%</span></p>
											<div class="progress">
												<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
													<span class="sr-only">42% Complete (success)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<img class="avatar" src="img/admin2.jpg" alt="User Thumb">
									<i class="icon-chevron-small-down"></i>
								</a>
								<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
									<ul class="user-settings-list">
										<li>
											<a href="pofile.html">
												<div class="icon">
													<i class="icon-account_circle"></i>
												</div>
												<p>Profile</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="icon red">
													<i class="icon-cog3"></i>
												</div>
												<p>Settings</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="icon yellow">
													<i class="icon-schedule"></i>
												</div>
												<p>Activity</p>
											</a>
										</li>
									</ul>
									<div class="logout-btn">
										<a href="../admin_login.php?logout='1'" class="btn btn-primary">logout</a>

									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- END: .app-heading -->
		<!-- BEGIN .app-container -->
		<div class="app-container">
			<!-- BEGIN .app-side -->
			<aside class="app-side" id="app-side">
				<!-- BEGIN .side-content -->
				<div class="side-content ">
					<!-- BEGIN .user-profile -->
					<div class="user-profile">
						
						<img src="img/admin2.jpg" class="profile-thumb" alt="User Thumb">
						<h6 class="profile-name"><?php echo $_SESSION['user']['fullname']; ?></h6>
						<ul class="profile-actions">
							<li>
								<a href="#">
									<i class="icon-social-skype"></i>
									<span class="count-label red"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-social-twitter"></i>
								</a>
							</li>
							<li>
								<a href="login.html">
									<i class="icon-export"></i>
								</a>
							</li>
						</ul>

					</div>
					<!-- END .user-profile -->
					<!-- BEGIN .side-nav -->
					<nav class="side-nav">
						<!-- BEGIN: side-nav-content -->
						<ul class="unifyMenu" id="unifyMenu">
							<li class="active selected">
								<a href="#">
									<span class="has-icon">
										<i class="icon-laptop_windows"></i>
									</span>
									<span class="nav-title">Dashboards</span>
								</a>
							</li>
							<li>
								<a href="./members.php" >
									<span class="has-icon">
										<i class="icon-tabs-outline"></i>
									</span>
									<span class="nav-title">Members</span>
								</a>
							</li>
							<li>
								<a href="./Dues.php">
									<span class="has-icon">
										<i class="icon-chat_bubble_outline"></i>
									</span>
									<span class="nav-title">Dues</span>
								</a>
							</li>
							<li>
								<ul>
									<li>
										<a href='notifications.html'>Notifications</a>
									</li>


								</ul>
							</li>
							<li>
								<a href="./donation.php">
									<span class="has-icon">
										<i class="icon-border_outer"></i>
									</span>
									<span class="nav-title">Donations</span>
								</a>
							</li>
							<li>
								<a href="blog.php" class="has-arrow" aria-expanded="false">
									<span class="has-icon">
										<i class="icon-border_all"></i>
									</span>
									<span class="nav-title">Blog Upload</span>
								</a>
								<ul aria-expanded="false" class="collapse in">
										<li>
											<a href='blog.php'>Blog</a>
										</li>
										<li>
											<a href='blogfunctions/create_post.php'>Create Post</a>
										</li>
										<li>
											<a href='blogfunctions/create_user.php'>Create User</a>
										</li>
										<li>
											<a href='blogfunctions/topic.php'>Topics</a>
										</li>
										<li>
											<a href='blogfunctions/posts.php' >Post</a>
										</li>
									</ul>
							</li>
						</ul>
						<!-- END: side-nav-content -->
					</nav>
					<!-- END: .side-nav -->
				</div>
				<!-- END: .side-content -->
			</aside>
			<!-- END: .app-side -->

			<!-- BEGIN .app-main -->
			<div class="app-main">
				<!-- BEGIN .main-heading -->
				<header class="main-heading">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
								<div class="page-icon">
									<i class="icon-laptop_windows"></i>
								</div>
								<div class="page-title">
									<h5>Dashboard</h5>
									<h6 class="sub-heading">Welcome to Censtleyo Admin</h6>
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- END: .main-heading -->
				<!-- BEGIN .main-content -->
				<div class="main-content">
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="stats-widget">
										<div class="stats-widget-header">
											<i class="icon-facebook"></i>
										</div>
										<div class="stats-widget-body">
											<!-- Row start -->
											<ul class="row no-gutters">
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h6 class="title">Facebook</h6>
												</li>
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h4 class="total">5,600</h4>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="stats-widget">
										<div class="stats-widget-header">
											<i class="icon-twitter"></i>
										</div>
										<div class="stats-widget-body">
											<!-- Row start -->
											<ul class="row no-gutters">
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h6 class="title">Twitter</h6>
												</li>
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h4 class="total">3,500</h4>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="stats-widget">
										<a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Followers">47</a>
										<div class="stats-widget-header">
											<i class="icon-googleplus"></i>
										</div>
										<div class="stats-widget-body">
											<!-- Row start -->
											<ul class="row no-gutters">
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h6 class="title">Google</h6>
												</li>
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h4 class="total">2,800</h4>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="stats-widget">
										<a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Posts">12</a>
										<div class="stats-widget-header">
											<i class="icon-rss"></i>
										</div>
										<div class="stats-widget-body">
											<!-- Row start -->
											<ul class="row no-gutters">
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h6 class="title">Blog</h6>
												</li>
												<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
													<h4 class="total">7,000</h4>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">Overview<a href="widgets.html" class="link">More examples</a>
								</div>
								<div class="card-body">
									<!-- Row start -->
									<div class="row gutters">
										<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
											<h6 class="card-title mt-0">Visitors</h6>
											<div class="chartist custom-one">
												<div class="line-chart"></div>
											</div>
											<div class="download-details">
												<p>21<sup>%</sup> more visitors than last month</p>
											</div>
										</div>
										<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
											<div class="monthly-avg">
												<h6>Monthly Average</h6>
												<div class="avg-block">
													<h4 class="avg-total text-secondary">9500</h4>
													<h6 class="avg-label">
														Visitors
													</h6>
												</div>
												<div class="avg-block">
													<h4 class="avg-total text-primary">$510<sup>k</sup></h4>
													<h6 class="avg-label">
														Sales
													</h6>
												</div>
											</div>
										</div>
										<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
											<h6 class="card-title mt-0">Sales</h6>
											<div class="chartist custom-two">
												<div class="line-chart2"></div>
											</div>
											<div class="download-details">
												<p>15<sup>%</sup> more sales than last month</p>
											</div>
										</div>
									</div>
									<!-- Row end -->
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<div class="card-header">Events</div>
								<div class="card-body p-0">
									<div class="events">
										<div class="all-events clearfix">
											<div id="today-date"></div>
											<a href="#" class="btn btn-sm">9 Events</a>
										</div>
										<ul class="event-list">
											<li>
												<a href="#">
													<div class="event-status-icon">
														<img src="img/checked.svg" alt="checked" class="completed" />
													</div>
													<div class="event-info">
														<span class="event-time">8:45</span>
														<p class="event-desc text-truncate">Coffee with Hayashi</p>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="event-status-icon">
														<img src="img/not-checked.svg" alt="Not checked" class="completed" />
													</div>
													<div class="event-info">
														<span class="event-time">10:30</span>
														<p class="event-desc text-truncate">Product meeting with dev
															team</p>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<div class="card-header">Income</div>
								<div class="card-body p-0">
									<div class="row gutters">
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col">
											<div class="income-stats">
												<h4 class="total">1465k</h4>
												<p class="income-title"><span class="income-label"></span>Overall Income
												</p>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
											<div class="income-stats">
												<h4 class="total">1049k</h4>
												<p class="income-title"><span class="income-label secondary">
													</span>Overall Expenses</p>
											</div>
										</div>
									</div>
									<div class="chartist custom-two">
										<div class="income-area-chart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
				</div>
				<!-- END: .main-content -->
			</div>
			<!-- END: .app-main -->
		</div>
		<!-- END: .app-container -->
		<!-- BEGIN .main-footer -->
		<footer class="main-footer fixed-btm">
			Copyright Unify Admin 2019.
		</footer>
		<!-- END: .main-footer -->
	</div>
	<!-- END: .app-wrap -->

	<!-- jQuery first, then Tether, then other JS. -->
	<script src="js/jquery.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendor/unifyMenu/unifyMenu.js"></script>
	<script src="vendor/onoffcanvas/onoffcanvas.js"></script>
	<script src="js/moment.js"></script>

	<!-- Slimscroll JS -->
	<script src="vendor/slimscroll/slimscroll.min.js"></script>
	<script src="vendor/slimscroll/custom-scrollbar.js"></script>

	<!-- Chartist JS -->
	<script src="vendor/chartist/js/chartist.min.js"></script>
	<script src="vendor/chartist/js/chartist-tooltip.js"></script>
	<script src="vendor/chartist/js/custom/custom-line-chart.js"></script>
	<script src="vendor/chartist/js/custom/custom-line-chart1.js"></script>
	<script src="vendor/chartist/js/custom/custom-area-chart.js"></script>
	<script src="vendor/chartist/js/custom/donut-chart2.js"></script>
	<script src="vendor/chartist/js/custom/custom-line-chart4.js"></script>

	<!-- Common JS -->
	<script src="js/common.js"></script>
</body>

</html>