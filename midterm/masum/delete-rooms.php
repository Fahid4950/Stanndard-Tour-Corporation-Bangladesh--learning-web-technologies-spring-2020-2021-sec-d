<?php

session_start();

if(!isset($_SESSION['login_Success'] ))
{
    header('location:login.php');
}

require 'db.php';

$id=$_GET['id'];

$delete = "DELETE FROM  rooms   WHERE id=$id";
$delete_result = mysqli_query($db_connect,$delete);

header('location:roomstrash.php');

 ?>
