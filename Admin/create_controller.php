<?php
session_start();
	// variable declaration
	$fullname = "";
	$email    = "";
	$errors = array(); 

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fullname = esc($_POST['fullname']);
		$email = esc($_POST['email']);
		$password_1 = esc($_POST['password_1']);
		$password_2 = esc($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($fullname)) {  array_push($errors, "Uhmm...We gonna need your fullname"); }
		if (empty($email)) { array_push($errors, "Oops.. Email is missing"); }
		if (empty($password_1)) { array_push($errors, "uh-oh you forgot the password"); }
		if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");}

		// Ensure that no user is registered twice. 
		// the email and fullnames should be unique
		$user_check_query = "SELECT * FROM users WHERE fullname='$fullname' 
								OR email='$email' LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if ($user) { // if user exists
			if ($user['fullname'] === $fullname) {
			  array_push($errors, "fullname already exists");
			}
			if ($user['email'] === $email) {
			  array_push($errors, "Email already exists");
			}
		}
		$path = mysqli_real_escape_string($db, '../images/uploads/'.$_FILES['image']['name']);
	copy($_FILES['image']['tmp_name'], $path);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (fullname, email, password, created_at, updated_at) 
					  VALUES('$fullname', '$email', '$password', now(), now())";
			mysqli_query($conn, $query);

			// get id of created user
			$reg_user_id = mysqli_insert_id($conn); 

			// put logged in user into session array
			$_SESSION['user'] = getUserById($reg_user_id);

			// if user is admin, redirect to admin area
			if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
				$_SESSION['message'] = "You are now logged in";
				// redirect to admin area
				header('location: ' . BASE_URL . 'admin/dashboard.php');
				exit(0);
			} else {
				$_SESSION['message'] = "You are now logged in";
				// redirect to public area
				header('location: ../index.php');				
				exit(0);
			}
		}
	}
// escape value from form
function esc(String $value)
{	
	// bring the global db connect object into function
	global $conn;

	$val = trim($value); // remove empty space sorrounding string
	$val = mysqli_real_escape_string($conn, $value);

	return $val;
}
// Get user info from user id
function getUserById($id)
{
	global $conn;
	$sql = "SELECT * FROM user WHERE id=$id LIMIT 1";

	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);

	// returns user in an array format: 
	// ['id'=>1 'fullname' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
	return $user; 
}
?>