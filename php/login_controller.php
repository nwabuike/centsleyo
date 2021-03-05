<?php
session_start();
include('DBConnection.php');
$errors = array();
// LOG USER IN

if (isset($_POST['login_btn'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['pass']);

	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";

		$results = mysqli_query($db, $query);
		$user  = mysqli_fetch_assoc($results);
		
		if (mysqli_num_rows($results) == 1) {

			$_SESSION['fullname'] = $user['fullname'];
			$_SESSION['email'] = $user['email'];
			
			$_SESSION['image'] = $user['image'];

			$_SESSION['success'] = "You are now logged in";

			header('location: ../Blog.php');
		} else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
// return user array from their id
function getUserById($id)
{
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}
// escape string
function display_error()
{
	global $errors;

	if (count($errors) > 0) {
		echo '<div class="error">';
		foreach ($errors as $error) {
			echo $error . '<br>';
		}
		echo '</div>';
	}
}

