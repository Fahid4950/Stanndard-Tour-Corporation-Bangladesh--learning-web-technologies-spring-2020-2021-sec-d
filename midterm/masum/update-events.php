<?php

session_start();

if(!isset($_SESSION['login_Success'] ))
{
    header('location:login.php');
}


require 'db.php';
$id = $_POST['id'];
$eventname = $_POST['ename'];
  $duration = $_POST['eduration'];
    $tourarea = $_POST['earea'];
      $package = $_POST['epackage'];
        $price = $_POST['eprice'];


$update = "UPDATE  events SET eventname='$eventname',duration='$duration',tourarea='$tourarea',package='$package',price='$price' WHERE id=$id";


$update_result = mysqli_query($db_connect,$update);
//$after_assoc = mysqli_fetch_assoc($update_result);

header('location:allevents.php');
 ?>
