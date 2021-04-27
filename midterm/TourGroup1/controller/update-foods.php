<?php

session_start();

if(!isset($_SESSION['login_Success'] ))
{
    header('location:login.php');
}


require '../db.php';
$id = $_POST['id'];



$foodname = $_POST['fname'];
  $fooditem = $_POST['fitem'];
    $foodtype = $_POST['ftype'];


$update = "UPDATE  foods SET foodname='$foodname',fooditem='$fooditem',foodtype='$foodtype' WHERE id=$id";


$update_result = mysqli_query($db_connect,$update);
$after_assoc = mysqli_fetch_assoc($update_result);

header('location:/midterm/TourGroup/view/allfoods.php');
 ?>
