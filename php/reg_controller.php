<?php
session_start();
include('DBConnection.php');
// connect to database
$email    = "";
$fullname = "";
$nationality = "";
$password_1 = "";
$Dateofbirth = "";
$Phonenumber = "";
$Occupation = "";
$Address = "";
$gender = "";
$img = "";
$errors   = array();
// variable declaration


// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register()
{
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $fullname, $email, $nationality, $Dateofbirth, $Phonenumber, $Occupation, $Address, $gender, $email, $path;

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
	$fullname    =  e($_POST['fullname']);
	$nationality       =  e($_POST['nationlity']);
	$Dateofbirth    =  e($_POST['dbirth']);
	$Phonenumber = e($_POST['phonenumber']);
	$Occupation  =  e($_POST['occupation']);
	$Address   =   e($_POST['address']);
	$gender     =  $_POST['mradio'];
	$email       =  e($_POST['email']);
	$path     =  $_FILES['image'];
	$password_1  =  e($_POST['password']);
	$password_2  =  e($_POST['conpassword']);
	$errors   = array();
	// form validation: ensure that the form is correctly filled
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
	if ($_FILES['image']['size'] > 200000) {
		$errors = "Image size should not be greated than 200Kb";
	}

	//path were our avatar image will be stored
	$path = mysqli_real_escape_string($db, '../images/uploads/' . $_FILES['image']['name']);
	copy($_FILES['image']['tmp_name'], $path);

	// register user if there are no errors in the form
	
	if (count($errors) == 0) {
		 //encrypt the password before saving in the database
		$query = "INSERT INTO users (fullname,nationality, password, occupation, address,phonenumber,dateo_birth,gender,email,image,created_at,upadate_at) 
            VALUES('$fullname', '$nationality', '$password_1','$Occupation','$Address','$Phonenumber','$Dateofbirth','$gender','$email','$path', now(), now())";
		mysqli_query($db, $query) or die(mysqli_error($db));
		
		// get id of the created user
		$logged_in_user_id = mysqli_insert_id($db);

		$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
		$_SESSION['success']  = "You are now logged in";
		header('location: ../blog.php');
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
function e($val)
{
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

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
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	} else {
		return false;
	}
}
