<?php

session_start();

if(!isset($_SESSION['login_Success'] ))
{
    header('location:login.php');
}


require '../db.php';
$id = $_POST['id'];
$name = $_POST['fname'];
$username = $_POST['fusername'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];


$update = "UPDATE  users SET name='$name',username='$username',email='$email',password='$password',gender='$gender' WHERE id=$id";
$update_result = mysqli_query($db_connect,$update);
$after_assoc = mysqli_fetch_assoc($update_result);

header('location:/../midterm/TourGroup/view/allusers.php');
 ?>
