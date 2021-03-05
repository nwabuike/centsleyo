<?php
// connect to database
$db = mysqli_connect("localhost", "root", "", "censtleyo");

if (!$db) {
    die("Error connecting to database: " . mysqli_connect_error());
}
?>