<?php
session_start();
include('config.php');
$email    = "";
$errors = array(); 

// LOG USER IN
if (isset($_POST['login_btn'])) {
	$email = esc($_POST['email']);
	$password = esc($_POST['pass']);
	
	if (empty($email)) { array_push($errors, "Email required"); }
	if (empty($password)) { array_push($errors, "Password required"); }
	if (empty($errors)) {
	
		$sql = "SELECT * FROM user WHERE email='$email' and password='$password' LIMIT 1";
	
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) {
			// get id of created user
			// $reg_user_id = mysqli_fetch_assoc($result)['id']; 
			// put logged in user into session array
			$_SESSION['user'] = mysqli_fetch_assoc($result);

			// if user is admin, redirect to admin area
			if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
				$_SESSION['message'] = "You are now logged in";
				//die(json_encode($_SESSION['user']));
				// redirect to admin area
				header("location: ./admin/admin.php");
				exit(0);
			} else {
				$_SESSION['message'] = "You are now logged in";
				// redirect to public area
				header('location: ../index.php');				
				exit(0);
			}
		} else {
			array_push($errors, 'Wrong credentials');
		}
	}
}
// escape value from form
function esc(String $value)
{	
	// bring the global db dbect object into function
	global $db;

	$val = trim($value); // remove empty space sorrounding string
	$val = mysqli_real_escape_string($db, $value);

	return $val;
}
// Get user info from user id
function getUserById($id)
{
	global $db;
	$sql = "SELECT * FROM user WHERE id=$id LIMIT 1";

	$result = mysqli_query($db, $sql);
	$user = mysqli_fetch_assoc($result);
	
	return $user; 
} 
?>