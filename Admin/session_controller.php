<?php
session_start(); //Start the session
if (!isset($_SESSION['fullname'])) {
    $_SESSION['msg'] = "You must log in first";
	header('location: ../admin_login.php');
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
        unset($_SESSION['user']);
        header("location: ../Admin_login.php");
    }

?>