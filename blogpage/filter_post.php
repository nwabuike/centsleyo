<?php
include('DBConnection.php');
include('blogcall_function.php');
include("comment_reply.php");
// Get posts under a particular topic
if (isset($_GET['topic'])) {//if topicId show page
	$topic_id = $_GET['topic'];
	$posts = getPublishedPostsByTopic($topic_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Censtleyo</title>
	<link
		href="https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700"
		rel="stylesheet" type="text/css">
	<!-- Styles -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="../css/icons.css" rel="stylesheet" type="text/css" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" />
	<link href="../css/responsive.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../layerslider/css/layerslider.css" type="text/css">
	<link rel=" stylesheet" type="text/css" href="../css/yellow.css" title="yellow" />
	<link href="../css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
	<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->

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
					<input type="text" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';"
						onblur="if(this.value=='')this.value=this.defaultValue;" class="search-input">
				</div>
			</div>
		</div>
		<header class="sticky">
			<div class="container">
				<div class="logo">
					<a href="#" title=""><img src="../images/logo.png" alt="Logo" width="60" height="60" />
						<h1><i>CENSTLEYO</i></h1>
					</a>
				</div><!-- Logo -->
				<a class="header-btn" href="../Blog.php?logout='1'" title="" style="margin-top: 18px;">Logout</a>
				<nav class="menu">
					<ul id="menu-navigation">
						<li style="cursor: pointer;"><a href="../index.php">Home</a>
						</li>
						<li><a href="../about.php">About-Us</a>
						</li>
						<li><a href="#">Programme</a>
							<ul class="mega-menu">
								<li><a href="../programme1.php">Programme 1</a></li>
								<li><a href="../programm2.php">Programme 2</a></li>
								<li><a href="../programme3.php">Programme 3</a></li>
								<li><a href="../programm4.php">Programme 4</a></li>
							</ul>
						</li>
						<li><a href="">Project</a>
							<ul class="mega-menu">
								<li><a href="#">Campus Fellowship</a>
									<ul class="drop-right">
										<li><a href="../404page.php" title="">Head Of project</a></li>
										<li><a href="../404page.php" title="">Co-ordinators</a></li>
										<li><a href="../404page.php" title="">Institutions</a></li>
									</ul>
								</li>
								<li><a href="#">School Programme</a>
									<ul class="drop-right">
										<li><a href="../404page.php" title="">H.O.P</a></li>
										<li><a href="../404page.php" title="">Scope</a></li>

									</ul>
								</li>
							</ul>
						</li>
						<li><a href="../contact.php">Contact-Us</a>
						</li>
						<li class="active"><a href="#">Blog</a>

						</li>
					</ul>
				</nav><!-- Menu -->
				<li class="dropdown" style="margin-top: auto !important; float:right; margin-right:-750px;">
					<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
						<a href="<?php echo $_SESSION['image']; ?>" class="html5lightbox" title=""><img
								src="<?php echo $_SESSION['image']; ?>" class="img-circle" width="60px"
								height="60px"></a>

						<i class="icon-chevron-small-down"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
						<div class="logout-btn">
							<a href="Blog.php?logout='1'" class="btn btn-primary"
								style="width: 50%; text-align:center; background-color: #e3c60a;  color: white; ">Logout</a>
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
					<a href="../index.php" title=""><img src="../images/logo.png" alt="Logo" width="60" height="60">
						<h1 style="color: #e3c60a;"><i>CENSTLEYO</i></h1>
					</a>
					<span class="menu-btn"><i class="fa fa-th-list"></i></span>
				</div>
			</div>
			<div class="responsive-menu">
				<span class="close-btn"><i class="fa fa-close"></i></span>
				<ul>
					<li class="has-dropdown"><a href="../index.php" title="">Home</a>
					</li>
					<li class="has-dropdown"><a href="../about.php" title="">About-Us</a></li>
					<li class="has-dropdown"><a href="#" title="">Programme</a>
						<ul>
							<li><a href="../programme1.php">Programme 1</a></li>
							<li><a href="../programm2.php">Programme 2</a></li>
							<li><a href="../programme3.php">Programme 3</a></li>
							<li><a href="../programm4.php">Programme 4</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Project</a>
						<ul>
							<li class="has-dropdown"><a href="#">Campus Fellowship</a>
								<ul class="drop-right">
									<li><a href="../404page.php" title="">Head Of project</a></li>
									<li><a href="../404page.php" title="">Co-ordinators</a></li>
									<li><a href="../404page.php" title="">Institutions</a></li>
								</ul>
							</li>
							<li class="has-dropdown"><a href="#">School Programme</a>
								<ul class="drop-right">
									<li><a href="../404page.php" title="">H.O.P</a></li>
									<li><a href="../404page.php" title="">Scope</a></li>

								</ul>
							</li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="./login.php" title="">Blog</a></li>
					<li class="has-dropdown"><a href="../contact.php" title="">Contact-Us</a>
					</li>

				</ul>
			</div>
			<button class="responsive-donate">Donate Now</button>
		</div>
		<!--Responsive header-->
		<div class="top-image">
			<img src="../images/single-page-top3.jpg" alt="" />
		</div><!-- Page Top Image -->
		<section class="inner-page">
			<div class="container">
				<div class="page-title">
					<h1>Articles on <span><?php echo getTopicNameById($topic_id); ?></span></h1>
				</div><!-- Page Title -->
				<?php foreach ($posts as $post) : ?>
				<div class="blog-post">

					<h2><a href="" title=""><?php echo $post['title'] ?></a></h2>
					<a class="blog-post-img" href="<?php echo  '../Admin/img/uploads/' . $post['image']; ?>"
						title=""><img src="<?php echo  '../Admin/img/uploads/' . $post['image']; ?>" alt="" /></a>
					<div class="blog-post-details">
						<ul class="post-meta">
							<li><a href="#" title=""><i
										class="icon-calendar-empty"></i><span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								</a></li>
							<li><a href="#" title=""><i class="icon-share-alt"></i>Home / Blog</a></li>
							<li><a href="#" title=""><i class="icon-map-marker"></i>In Nigeria Africa</a></li>
						</ul>
						<div class="post-desc">
							<p><?php echo html_entity_decode($post['body']); ?></p>
						</div>
					</div>
				</div><!-- Blog Post With Image -->
				<?php endforeach ?>
				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-8 col-lg-8 col-8 col-md-offset-4">
								<?php if (isset($user_id)): ?>
								<form class="clearfix" action="filter_post.php" method="POST" id="comment_form">
									<h4>Post a comment:</h4>
									<textarea name="comment_text" id="comment_text" class="form-control" cols="30"
										rows="3"></textarea>
									<button type="submit" class="btn btn-primary btn-sm pull-right"
										id="submit_comment">Submit
										comment</button>

									<input type="hidden" id="post_id" value="<?php echo $_GET['topic']; ?>">
								</form>
								<?php else: ?>
								<div class="well" style="margin-top: 20px;">
									<h4 class="text-center"><a href="#">Sign in</a> to post a comment</h4>
								</div>
								<?php endif ?>
								<div class="comments">
									<h3 class="sub-head"><span id="comments_count"><?php echo count($comments) ?></span>
										Comment(s)
									</h3>
									<hr>
									<div id="comments-wrapper">
										<ul>
											<li>

												<?php if (isset($comments)) : ?>
												<!-- Display comments -->
												<?php foreach ($comments as $comment) : ?>
												<!-- comment -->
												<div class="comment">
													<img src="<?php echo $_SESSION['image']; ?>" alt="" />
													<a href="#" class="reply" title=""
														data-id="<?php echo $comment['id']; ?>">Reply</a>
													<h5 class="comment-name">
														<?php echo getUsernameById($comment['user_id']) ?></h5>
													<i><span
															class="comment-date"><?php echo date("F j, Y ", strtotime($comment["created_at"])); ?></span></i>
													<p><?php echo $comment['body']; ?>.</p>
													<!-- Comment -->
													<!-- reply form -->
													<form action="filter_post.php" class="reply_form clearfix"
														id="comment_reply_form_<?php echo $comment['id'] ?>"
														data-id="<?php echo $comment['id']; ?>">
														<textarea class="form-control" name="reply_text" id="reply_text"
															cols="30" rows="2"></textarea>
														<button
															class="btn btn-primary btn-xs pull-right submit-reply">Submit
															reply</button>
													</form>
													<ul>
														<li>
															<!-- GET ALL REPLIES -->
															<?php $replies = getRepliesByCommentId($comment['id']) ?>
															<div class="replies_wrapper_<?php echo $comment['id']; ?>">
																<?php if (isset($replies)) : ?>
																<?php foreach ($replies as $reply) : ?>
																<!-- reply -->
																<div class="comment">
																	<img src="<?php echo $_SESSION['image']; ?>"
																		alt="" />
																	<a href="#" class="reply" title="">Reply</a>
																	<h5 class="comment-name">
																		<?php echo getUsernameById($reply['user_id']) ?>
																	</h5>
																	<i><span
																			class="comment-date"><?php echo date("F j, Y ", strtotime($reply["created_at"])); ?></span></i>
																	<p><?php echo $reply['body']; ?>.</p>
																</div><!-- Reply -->
																<?php endforeach ?>
																<?php endif ?>
														</li>
													</ul>
												</div>
											</li>
										</ul>
										<?php endforeach ?>
										<?php else : ?>
										<h2>Be the first to comment on this post</h2>
										<?php endif ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</section>
	</div><h2 class="counter">
	<span class="animate-number appeared" data-value="1587" data-animation-duration="1500">1500</span>
	<span class="counter-postfix">+</span>
		</h2>
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
							of
							this group was necessitated primarily by a clarion call for extrication, eradication and
							extermination of corruption in our society.</p>
						<ul class="address">
							<li><i class="fa fa-map-marker" style="color: #e3c60a;"></i> No 19 Nnobi Road, Nnewi,
								Anambra State, Nigeria</li>
							<li><i class="fa fa-phone" style="color: #e3c60a;"></i>08033157695, 08032090838,
								08036972695
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
						<h4><strong>Members <span>Photos</span></strong></h4>
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
			<p>Copyright &copy; <?php echo date("Y"); ?> censtleyo. <span>All rights reserved.</span> </p>
			<ul>
				<li><a href="../index.php">Home</a>
				</li>
				<li><a href="../about.php">About-Us</a>
				</li>

				<li><a href="../project.php">programme</a></li>
				<li><a href="../contact.php">Contact-Us</a>
				<li><a href="../login.php">Blog</a></li>
				</li>
			</ul>
		</div>
	</div><!-- Bottom Footer Strip -->
	<!-- Scripts -->
	<script src="../js/jquery-2.2.2.js" type="text/javascript"></script>
	<script src="../js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
	<script src="../js/perfect-scrollbar.js" type="text/javascript"></script>
	<script src="../js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="../js/testimonials.js"></script>
	<script src="../js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
	<script src="../js/script.js"></script>
	<script src='../js/jquery.isotope.min.js'></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/html5lightbox.js"></script>
	<script src="../js/styleswitcher.js"></script>
	<script type="text/javascript" src="../js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
	<script defer src="../js/jquery.flexslider.js"></script>
	<script defer src="../js/jquery.mousewheel.js"></script>
	<script src="../js/jquery.downCount.js"></script>
	<script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>
	<script>
		$(".reply").click(function () {
			$(".reply_form").toggle();
		});
	</script>
	<script>
		$(document).ready(function () {
			// When user clicks on submit comment to add comment under post
			$(document).on('click', '#submit_comment', function (e) {
				e.preventDefault();
				var comment_text = $('#comment_text').val();
				var url = $('#comment_form').attr('action');
				// Stop executing if not value is entered
				if (comment_text === "") return;
				$.ajax({
					url: 'ajax_comment_reply.php',
					type: "POST",
					data: {
						comment_text: comment_text,
						comment_posted: 1,
						post_id: $('#post_id').val(),
					},
					success: function (data) {
						console.log('====================================');
						console.log(data);
						console.log('====================================');
						var response = JSON.parse(data);
						if (data === "error") {
							alert('There was an error adding comment. Please try again');
						} else {
							$('#comments-wrapper').prepend(response.comment)
							$('#comments_count').text(response.comments_count);
							$('#comment_text').val('');
						}
					},
					error: function (error) {
						console.log('====================================');
						console.log(error);
						console.log('====================================');
					}
				});
			});
			// When user clicks on submit reply to add reply under comment
			$(document).on('click', '.reply-btn', function (e) {
				e.preventDefault();
				// Get the comment id from the reply button's data-id attribute
				var comment_id = $(this).data('id');
				// show/hide the appropriate reply form (from the reply-btn (this), go to the parent element (comment-details)
				// and then its siblings which is a form element with id comment_reply_form_ + comment_id)
				$(this).parent().siblings('form#comment_reply_form_' + comment_id).toggle(500);
				$(document).on('click', '.submit-reply', function (e) {
					e.preventDefault();
					// elements
					var reply_textarea = $(this).siblings('textarea'); // reply textarea element
					var reply_text = $(this).siblings('textarea').val();
					var url = $(this).parent().attr('action');
					$.ajax({
						url: 'comment_reply.php',
						type: "POST",
						data: {
							comment_id: comment_id,
							reply_text: reply_text,
							reply_posted: 1
						},
						success: function (data) {
							if (data === "error") {
								alert('There was an error adding reply. Please try again');
							} else {
								$('.replies_wrapper_' + comment_id).append(data);
								reply_textarea.val('');
							}
						}
					});
				});
			});
		});
	</script>
</body>

</html>

<?php
	} else {//if not return to home page

	}
?>