<?php


session_start();
$hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'tour';



$db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);

$username =$_POST['fusername'];
$password =$_POST['password'];



$select = "SELECT COUNT(*) AS login FROM users WHERE username='$username' and password='$password'";
$select_result= mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);



if($after_assoc['login']==1)
{
   $_SESSION['login_Success'] = "Congrats , Login Enter.!!!";
    header('location:inter.php');

}
else {



  $_SESSION['login_Error'] = "Sorry,wrong Information";
  header('location:home.html');
}

 ?>
