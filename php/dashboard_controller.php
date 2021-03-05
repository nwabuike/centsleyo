<?php
session_start();
function isLoggedIn()
{
	if (isset($_SESSION['users'])) {
		$_GET($_SESSION['image']);
		return true;
	} else {
		header("location: login.php");
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

