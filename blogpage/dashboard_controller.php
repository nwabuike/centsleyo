<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    $_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	} else {
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	$_SESSION['success']  = "You are now logged out";
	unset($_SESSION['user']);
	header("location: login.php");
}
// Set logged in user id: This is just a simulation of user login. We haven't implemented user log in
// But we will assume that when a user logs in, 
// they are assigned an id in the session variable to identify them across pages
