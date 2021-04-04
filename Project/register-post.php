<?php

$hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'tour';

$db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);


$name = $_POST['fname'];
$username = $_POST['fusername'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = "INSERT INTO users(name,username,email,password) VALUES('$name','$username' ,'$email',$password)";

$insert_result = mysqli_query($db_connect,$insert);
header('location:inter.php');

 ?>
