<?php

require '../db.php';



    $name = $_POST['fname'];
    $username = $_POST['fusername'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $gender = $_POST['gender'];
    $day =$_POST['day'];
    $month =$_POST['month'];
    $year =$_POST['year'];
    $type =$_POST['type'];

    // setcookie("username",$username,time() + 3600,'/');
    //   setcookie("password",$password,time() + 3600,'/');

    date_default_timezone_set('Asia/Dhaka');
    $created_at = date('Y-m-d h:i:s');

    if(empty($name))
    {

      $err ="Where is your name?";
      header('location:register.php?err='.$err);

    }

    else if (empty($username))
     {
       $u_err ="Where is your User Name?";
       header('location:register.php?u_err='.$u_err);
    }
    else if (empty($email))
     {
       $e_err ="Where is your User Name?";
       header('location:register.php?e_err='.$e_err);
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
     $email_err ="Email formate is not okay.";
     header('location:register.php?email_err='.$email_err);
    }

    else if (empty($password))
     {
       $p_err ="Please write password!!!?";
       header('location:register.php?p_err='.$p_err);
    }

    else if (strlen($_POST["password"]) <= '8')
     {
       $rp_err ="Your password should be 8 cherector!!!?";
       header('location:register.php?rp_err='.$rp_err);
}
//
//
//
// else if(ctype_lower($_POST['password']))
// {
//   $rlop_err ="Your password should be lower case!!!?";
//   header('location:register.php?rlop_err='.$rlop_err);
// }
//
// else if(ctype_alpha($_POST['password']))
// {
//   $rep_err ="Your password should be number!!!?";
//   header('location:register.php?rep_err='.$rep_err);
// }
//
// // else if(ctype_upper($_POST['password']))
// // {
// //   $rup_err ="Your password should be uppercase!!!?";
// //   header('location:register.php?rup_err='.$rup_err);
// // }
//
// else if(ctype_lower($_POST['password']))
// {
//   $rlp_err ="Your password should be lowercase!!!?";
//   header('location:register.php?rlp_err='.$rlp_err);
// }
//    else if (empty($repassword))
//     {
//       $re_err ="Please write password again!!!?";
//       header('location:register.php?re_err='.$re_err);
//    }
//
//    else if($password != $repassword)
//    {
//   $ree_err ="Your password doesn't match .Write again.";
//   header('location:register.php?ree_err='.$ree_err);
// }
//
//
//
//
//
//     else {
      $insert = "INSERT INTO users(name,username,email,password,gender,day,month,year,type,created_at) VALUES('$name','$username' ,'$email','$password','$gender','$day','$month','$year','$type','$created_at')";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Registration Successfull!!!';

       header('location:/../midterm/TourGroup/view/registerallupdate.php?success='.$success);

    // }










 ?>
