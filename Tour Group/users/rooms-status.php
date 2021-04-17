<?php
session_start();

if(!isset($_SESSION['login_Success'] ))
{
    header('location:login.php');
}

require '../db.php';
$id = $_GET['id'];
$select_status = "SELECT * FROM rooms WHERE id=$id";
$select_status_result = mysqli_query($db_connect,$select_status);
$after_assoc = mysqli_fetch_assoc($select_status_result);


if($after_assoc['status']== 0)
{
  $change_status = "UPDATE rooms SET status=1 WHERE id=$id";
  $change_status_result = mysqli_query($db_connect,$change_status);
 header('location:allrooms.php');
}

else {
  $change_status ="UPDATE rooms SET status=0 WHERE id=$id ";
  $change_status_result = mysqli_query($db_connect,  $change_status);
  header('location:roomstrash.php');
}




 ?>
