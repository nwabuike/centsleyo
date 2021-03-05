<?php
session_start();
 include('./createblog_functions.php'); ?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Unify Admin Panel" />
	<meta name="keywords" content="Blogs,N.G.O, UPDATE, />
		<meta name=" author" content="Bootstrap Gallery" />
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<?php 
	// Get all admin users from DB
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
?>
	<title>Unify Admin Dashboard - Datatables</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

	<!-- Common CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../fonts/icomoon/icomoon.css" />
	<link rel="stylesheet" href="../css/main.css" />

	<!-- Data Tables -->
	<link rel="stylesheet" href="../vendor/datatables/dataTables.bs4.css" />
	<link rel="stylesheet" href="../vendor/datatables/dataTables.bs4-custom.css" />

</head>

<body>

	<!-- BEGIN .app-wrap -->
	<div class="app-wrap">
		<!-- BEGIN .app-heading -->
		<header class="app-header">
			<div class="container-fluid">
				<div class="row ">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8">
						<a href="../admin.php" class="logo">
							<img src="img/unify.png" alt="Unify Admin Dashboard">
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
												<div class="progress-bar" role="progressbar" aria-valuenow="87"
													aria-valuemin="0" aria-valuemax="100" style="width: 87%">
													<span class="sr-only">87% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<h4>4,897</h4>
											<p>Downloads <span>+39%</span></p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="65"
													aria-valuemin="0" aria-valuemax="100" style="width: 65%">
													<span class="sr-only">65% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<h4>2,219</h4>
											<p>Uploads <span class="text-secondary">-7%</span></p>
											<div class="progress">
												<div class="progress-bar bg-danger" role="progressbar"
													aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"
													style="width: 42%">
													<span class="sr-only">42% Complete (success)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
									aria-haspopup="true">
									<img class="avatar" src="../img/admin2.jpg" alt="User Thumb">
									<i class="icon-chevron-small-down"></i>
								</a>
								<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
									<ul class="user-settings-list">
										<li>
											<a href="#">
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
									<a href="../../admin_login.php?logout='1'" class="btn btn-primary">logout</a>
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
						<img src="../img/admin2.jpg" class="profile-thumb" alt="User Thumb">
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
								<a href="#">
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
							<li>
								<a href="../admin.php">
									<span class="has-icon">
										<i class="icon-laptop_windows"></i>
									</span>
									<span class="nav-title">Dashboards</span>
								</a>
							</li>
							<li>
								<a href="../members.php">
									<span class="has-icon">
										<i class="icon-tabs-outline"></i>
									</span>
									<span class="nav-title">Membership</span>
								</a>
							</li>
							<li>
								<a href="../Dues.php">
									<span class="has-icon">
										<i class="icon-chat_bubble_outline"></i>
									</span>
									<span class="nav-title">Dues</span>
								</a>
							</li>
							<li>
								<ul>
									<li>
										<a href='#'>Notifications</a>
									</li>


								</ul>
							</li>
							<li>
								<a href="../donation.php">
									<span class="has-icon">
										<i class="icon-border_outer"></i>
									</span>
									<span class="nav-title">Donations</span>
								</a>
							</li>
							<li class="active selected">

								<a href="../blog.php" class="has-arrow" aria-expanded="false">
									<span class="has-icon">
										<i class="icon-border_all"></i>
									</span>
									<span class="nav-title">Blog Upload</span>
								</a>
								<ul aria-expanded="false" class="collapse in">
										<li>
												<a href='../blog.php' >Blog</a>
											</li>
									<li>
										<a href='./create_post.php' >Create Post</a>
									</li>
									<li>
										<a href='./usersAdmin.php'>Create User</a>
									</li>
									<li>
										<a href='./topic.php' >Topics</a>
									</li>
									<li>
										<a href='./posts.php'>Post</a>
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
									<i class="icon-beaker"></i>
								</div>
								<div class="page-title">
									<h5>Create &amp; Edit Admin User</h5>
									<h6 class="sub-heading">Welcome to Censtleyo Admin</h6>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
								<div class="right-actions">
									<a href="#" class="btn btn-primary float-right" data-toggle="tooltip"
										data-placement="left" title="Download Reports">
										<i class="icon-download4"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- END: .main-heading -->
				<div class="main-content">
					<!-- Middle form - to create and edit  -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">Actions</div>
								<div class="card-body">
									<ul class="nav justify-content-center">

										<li class="nav-item">
											<a class="nav-link" href="./create_post.php">Create Posts</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="./posts.php">Manage Posts</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="./usersAdmin.php">Manage Users</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " href="./topic.php">Manage Topics</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="card">
							<form method="post" action="./usersAdmin.php">

								<!-- validation errors for the form -->
								<?php include(ROOT_PATH . './errors.php') ?>

								<!-- if editing user, the id is required to identify that user -->
								<?php if ($isEditingUser === true) : ?>
								<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
								<?php endif ?>
								<div class="form-group">
									<label for="isValid"></label>
									<input name="fullname" value="<?php echo $fullname; ?>" type="text"
										class="form-control is-valid" id="isValid" placeholder="Firstname">
								</div>
								<div class="form-group row gutters">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
									<div class="col-sm-9">
										<input name="email" type="email" class="form-control"
											value="<?php echo $email ?>" id="inputEmail3" placeholder="Email">
									</div>
								</div>
								<div class="form-group row gutters">
									<label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input type="password" name="password" class="form-control" id="inputPassword3"
											placeholder="Password">
									</div>
								</div>
								<div class="form-group row gutters">
									<label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input type="password" name="passwordConfirmation" class="form-control"
											id="inputPassword3" placeholder="Password confirmation">
									</div>
								</div>
								<div class="form-group">
									<label for="selectTwo">Example select</label>
									<select class="form-control" id="selectTwo" name="role">
										<option value="" selected disabled>Assign role</option>
										<?php foreach ($roles as $key => $role) : ?>
										<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
										<?php endforeach ?>
									</select>
								</div>
								<!-- if editing user, display the update button instead of create button -->
								<?php if ($isEditingUser === true) : ?>
								<button type="submit" class="btn btn-primary" name="update_admin">UPDATE</button>
								<?php else : ?>
								<button type="submit" class="btn btn-primary" name="create_admin">Save User</button>
								<?php endif ?>
							</form>
						</div>
					</div>
					<!-- // Middle form - to create and edit -->

					<!-- Display records from DB-->
					<!-- Display notification message -->
					<?php include(ROOT_PATH . './messages.php') ?>

					<?php if (empty($admins)) : ?>
					<h1>No admins in the database.</h1>
					<?php else : ?>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">Users in Database</div>
							<div class="card-body">
								<table class="table table-striped table-inverse m-0">
									<thead>
										<tr>
											<th>#</th>
											<th>FUll Name</th>
											<th>Email</th>
											<th>Role</th>
											<th colspan="2">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($admins as $key => $admin) : ?>
										<tr>
											<td><?php echo $key + 1; ?></td>
											<td>
												<?php echo $admin['fullname']; ?>
											</td>
											<td><?php echo $admin['email']; ?>
											</td>
											<td><?php echo $admin['role']; ?></td>
											<td>
												<a class="btn btn-primary"
													href="usersAdmin.php?edit-admin=<?php echo $admin['id'] ?>">Edit
												</a>
											</td>
											<td>
												<a class="btn btn-danger"
													href="usersAdmin.php?delete-admin=<?php echo $admin['id'] ?>">Delete
												</a>
											</td>
										</tr>
										<?php endforeach ?>
									</tbody>
								</table>
								<?php endif ?>
							</div>
						</div>
					</div>

					<!-- // Display records from DB -->
				</div>
				<!-- END: .main-content -->
			</div>
			<!-- END: .app-main -->
		</div>
		<!-- END: .app-container -->
		<!-- BEGIN .main-footer -->

		<footer class="main-footer fixed-btm">
			Copyright Unify Admin 2017.
		</footer>
		<!-- END: .main-footer -->
	</div>
	<!-- END: .app-wrap -->

	<!-- jQuery first, then Tether, then other JS. -->
	<script src="../js/jquery.js"></script>
	<script src="../js/tether.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../vendor/unifyMenu/unifyMenu.js"></script>
	<script src="../vendor/onoffcanvas/onoffcanvas.js"></script>
	<script src="../js/moment.js"></script>

	<!-- Data Tables -->
	<script src="../vendor/datatables/dataTables.min.js"></script>
	<script src="../vendor/datatables/dataTables.bootstrap.min.js"></script>

	<!-- Custom Data tables -->
	<script src="../vendor/datatables/custom/custom-datatables.js"></script>
	<script src="../vendor/datatables/custom/fixedHeader.js"></script>

	<!-- Common JS -->
	<script src="../js/common.js"></script>

</body>

</html>