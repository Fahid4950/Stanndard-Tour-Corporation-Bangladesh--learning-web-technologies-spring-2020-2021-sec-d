<?php

session_start();
require 'db.php';

$username =$_POST['fusername'];
$password =$_POST['password'];

$select = "SELECT COUNT(*) AS login,name,email FROM users WHERE username='$username' and password='$password'";
$select_result= mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['login']==1)
{
   $_SESSION['login_Success'] = "Congrats , Login Enter.!!!";
   $_SESSION['name'] = $after_assoc['name'];
      $_SESSION['email'] = $after_assoc['email'];
    header('location:/project/inter.php');

}
else {

  $_SESSION['login_Error'] = "Invalid Username or Password.!!!";
  header('location:loginallupdate.php');
}

 ?>
