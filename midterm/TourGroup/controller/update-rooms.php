<?php

session_start();

if(!isset($_SESSION['login_Success'] ))
{
    header('location:login.php');
}


require '../db.php';
$id = $_POST['id'];



              $roomname = $_POST['rname'];
                $roomquality = $_POST['rquality'];
                  $roomtype = $_POST['rtype'];


$update = "UPDATE  rooms SET roomname='$roomname',roomquality='$roomquality',roomtype='$roomtype' WHERE id=$id";


$update_result = mysqli_query($db_connect,$update);
$after_assoc = mysqli_fetch_assoc($update_result);

header('location:/../midterm/TourGroup/view/allrooms.php');
 ?>
