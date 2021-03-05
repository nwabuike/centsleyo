<?php
include('DBConnection.php');


$user_id = 1;


// Receives a user id and returns the username
function getUsernameById($id)
{
	global $db;
	$result = mysqli_query($db, "SELECT fullname FROM users WHERE id=" . $id . " LIMIT 1");
	// return the username
	return mysqli_fetch_assoc($result)['fullname'];
}

// Receives a comment id and returns the username
function getRepliesByCommentId($id)
{
	global $db;
	$result = mysqli_query($db, "SELECT * FROM replies WHERE comment_id=$id");
	$replies = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $replies;
}
// Receives a post id and returns the total number of comments on that post
function getCommentsCountByPostId($post_id)
{
	global $db;
	$result = mysqli_query($db, "SELECT COUNT(*) AS total FROM comments");
	$data = mysqli_fetch_assoc($result);
	return $data['total'];
}

// If the user clicked submit on comment form...
if (isset($_POST['comment_posted'])) {

	global $db;
	// grab the comment that was submitted through Ajax call
	$comment_text = $_POST['comment_text'];
	// insert comment into database
	$post_id = $_POST['post_id'];
	$sql = "INSERT INTO comments (post_id, user_id, body, created_at, updated_at) VALUES ($post_id , " . $user_id . ", '$comment_text', now(), now())";
	$result = mysqli_query($db, $sql) or die(mysqli_error($db));
	// Query same comment from database to send back to be displayed
	$inserted_id = $db->insert_id;
	$res = mysqli_query($db, "SELECT * FROM comments WHERE id=$inserted_id") or die(mysqli_error($db));
	$inserted_comment = mysqli_fetch_assoc($res);
	// if insert was successful, get that same comment from the database and return it
	if ($result) {
		$comment = "<div class='comment'>
					<img src='' alt='' class='profile_pic'>
						<h5 class='comment-name'>" . getUsernameById($inserted_comment['user_id']) . "</h5>
						<i><span class='comment-date'>" . date('F j, Y ', strtotime($inserted_comment['created_at'])) . "</span></i>
						<p>" . $inserted_comment['body'] . "</p>
						<a class='reply-btn' href='#' data-id='" . $inserted_comment['id'] . "'>reply</a>
					<!-- reply form -->
					<form action='post_details.php' class='reply_form clearfix' id='comment_reply_form_" . $inserted_comment['id'] . "' data-id='" . $inserted_comment['id'] . "'>
						<textarea class='form-control' name='reply_text' id='reply_text' cols='30' rows='2'></textarea>
						<button class='btn btn-primary btn-xs pull-right submit-reply'>Submit reply</button>
					</form>
				</div>";
		$comment_info = array(
			'comment' => $comment,
			'comments_count' => getCommentsCountByPostId(1)
		);
		echo json_encode($comment_info);
		exit();
	} else {
		echo "error";
		exit();
	}
}
// If the user clicked submit on reply form...
if (isset($_POST['reply_posted'])) {
	global $db;
	// grab the reply that was submitted through Ajax call
	$reply_text = $_POST['reply_text'];
	$comment_id = $_POST['comment_id'];
	// insert reply into database
	$sql = "INSERT INTO replies (user_id, comment_id, body, created_at, updated_at) VALUES (" . $user_id . ", $comment_id, '$reply_text', now(), null)";
	$result = mysqli_query($db, $sql);
	$inserted_id = $db->insert_id;
	$res = mysqli_query($db, "SELECT * FROM replies WHERE id=$inserted_id");
	$inserted_reply = mysqli_fetch_assoc($res);
	// if insert was successful, get that same reply from the database and return it
	if ($result) {
		$reply = "<div class='comment'>
					<img src='' alt='' class='profile_pic'>
						<h5 class='comment-name'>" . getUsernameById($inserted_reply['user_id']) . "</h5>
						<i><span class='comment-date'>" . date('F j, Y ', strtotime($inserted_reply['created_at'])) . "</span></i>
						<p>" . $inserted_reply['body'] . "</p>
						<a class='reply-btn' href='#'>reply</a>
					</div>
				</div>";
		echo $reply;
		exit();
	} else {
		echo "error";
		exit();
	}
} //...
// If the user clicked submit on comment form...
if (isset($_POST['comment_posted'])) {
	global $db;
	// grab the comment that was submitted through Ajax call
	$comment_text = $_POST['comment_text'];
	// insert comment into database
	$sql = "INSERT INTO comments (post_id, user_id, body, created_at, updated_at) VALUES (1, " . $user_id . ", '$comment_text', now(), null)";
	$result = mysqli_query($db, $sql);
	// Query same comment from database to send back to be displayed
	$inserted_id = $db->insert_id;
	$res = mysqli_query($db, "SELECT * FROM comments WHERE id=$inserted_id");
	$inserted_comment = mysqli_fetch_assoc($res);
	// if insert was successful, get that same comment from the database and return it
	if ($result) {
		$comment = "<div class='comment'>
					<img src='' alt='' class='profile_pic'>
					<div class='comment-details'>
						<h5 class='comment-name'>" . getUsernameById($inserted_comment['user_id']) . "</h5>
						<i><span class='comment-date'>" . date('F j, Y ', strtotime($inserted_comment['created_at'])) . "</span></i>
						<p>" . $inserted_comment['body'] . "</p>
						<a class='reply-btn' href='#' data-id='" . $inserted_comment['id'] . "'>reply</a>
					</div>
					<!-- reply form -->
					<form action='' class='reply_form clearfix' id='comment_reply_form_" . $inserted_comment['id'] . "' data-id='" . $inserted_comment['id'] . "'>
						<textarea class='form-control' name='reply_text' id='reply_text' cols='30' rows='2'></textarea>
						<button class='btn btn-primary btn-xs pull-right submit-reply'>Submit reply</button>
					</form>
				</div>";
		$comment_info = array(
			'comment' => $comment,
			'comments_count' => getCommentsCountByPostId(1)
		);
		echo json_encode($comment_info);
		exit();
	} else {
		echo "error";
		exit();
	}
}
// If the user clicked submit on reply form...
if (isset($_POST['reply_posted'])) {
	global $db;
	// grab the reply that was submitted through Ajax call
	$reply_text = $_POST['reply_text'];
	$comment_id = $_POST['comment_id'];
	// insert reply into database
	$sql = "INSERT INTO replies (user_id, comment_id, body, created_at, updated_at) VALUES (" . $user_id . ", $comment_id, '$reply_text', now(), null)";
	$result = mysqli_query($db, $sql);
	$inserted_id = $db->insert_id;
	$res = mysqli_query($db, "SELECT * FROM replies WHERE id=$inserted_id");
	$inserted_reply = mysqli_fetch_assoc($res);
	// if insert was successful, get that same reply from the database and return it
	if ($result) {
		$reply = "<div class='comment'>
					<img src='profile.png' alt='' class='profile_pic'>
					<div class='comment-details'>
						<h5 class='comment-name'>" . getUsernameById($inserted_reply['user_id']) . "</h5>
					<i>	<span class='comment-date'>" . date('F j, Y ', strtotime($inserted_reply['created_at'])) . "</span></i>
						<p>" . $inserted_reply['body'] . "</p>
						<a class='reply-btn' href='#'>reply</a>
					</div>
				</div>";
		echo $reply;
		exit();
	} else {
		echo "error";
		exit();
	}
}
