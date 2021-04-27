<?php

require 'db.php';
// $hostname = 'localhost';
// $hostuser = 'root';
// $hostpass = '';
// $dbname = 'tour';

// $db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);



    $name = $_POST['fname'];
    $username = $_POST['fusername'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $gender = $_POST['gender'];
    $day =$_POST['day'];
    $month =$_POST['month'];
$year =$_POST['year'];
    //$dob = $_POST['year'] . '/' . $_POST['month'] . '/' . $_POST['day'];

    //$dob = $_POST['dob'];

//
//     if(empty($name))
//     {
//
//       $err ="Where is your name?";
//       header('location:register.php?err='.$err);
//
//     }
//
//     else if (empty($username))
//      {
//        $u_err ="Where is your User Name?";
//        header('location:register.php?u_err='.$u_err);
//     }
//     else if (empty($email))
//      {
//        $e_err ="Where is your User Name?";
//        header('location:register.php?e_err='.$e_err);
//     }
//     else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
//     {
//      $email_err ="Email formate is not okay.";
//      header('location:register.php?email_err='.$email_err);
//     }
//
//     else if (empty($password))
//      {
//        $p_err ="Please write password!!!?";
//        header('location:register.php?p_err='.$p_err);
//     }
//
//     else if (strlen($_POST["password"]) <= '8')
//      {
//        $rp_err ="Your password should be 8 cherector!!!?";
//        header('location:register.php?rp_err='.$rp_err);
//
//    }
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
      $insert = "INSERT INTO users(name,username,email,password,gender,day,month,year) VALUES('$name','$username' ,'$email','$password','$gender','$day','$month','$year')";

      // $insert = "INSERT INTO users(name,username,email,password,gender,dob) VALUES('$name','$username' ,'$email','$password','$gender',$dob)";

      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Registration Successfull!!!';

      header('location:registerallupdate.php?success='.$success);

    // }










 ?>
