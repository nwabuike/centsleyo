<?php
session_start();
include('config.php');
$email    = "";
$fullname = "";
$Password = "";
$Dateofbirth = "";
$Phonenumber = "";
$Occupation = "";
$Address = "";
$gender = "";
$img = "";
$nationality="";
$user_type = "";

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM users WHERE id=$id");
    $_SESSION['message'] = "Address deleted!";
    header('location: ../members.php');
    
}
function getMember($db, $id)
{
    $record = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
    if (count($record) == 1){
        return $record = mysqli_fetch_array($record);
    }
}
if (isset($_POST['update'])) {
}
    function update()
    {
        // call these variables with the global keyword to make them available in function
        global $db,  $fullname, $email, $Dateofbirth, $Phonenumber, $Occupation, $Address, $gender, $path, $nationality, $user_type;

        $id = $_POST['id'];
        $fullname    = $_POST['fullname'];
        $Dateofbirth    = $_POST['dbirth'];
        $Phonenumber = $_POST['phonenumber'];
        $Occupation  = $_POST['occupation'];
        $Address   =   $_POST['address'];
        $gender     =  $_POST['mradio'];
        $email       =  $_POST['email'];
        $$user_type   = $_POST['user_type'];
        $path     =  $_FILES['image'];
        $nationality =$_POST['nationality'];
        $path = mysqli_real_escape_string($db, '../images/uploads/' . $_FILES['image']['name']);
        copy($_FILES['image']['tmp_name'], $path);

        mysqli_query($db, "UPDATE users SET name='$fullname', 'admin','$Occupation','$Address','$Phonenumber', '$Dateofbirth','$gender','$email','$nationality','$path' WHERE id=$id");
        $_SESSION['message'] = "Address updated!";
        header('location: ../members.php');
        
    }

function getAllMembers($db)
{
    return mysqli_query($db, "SELECT * FROM users");
}
