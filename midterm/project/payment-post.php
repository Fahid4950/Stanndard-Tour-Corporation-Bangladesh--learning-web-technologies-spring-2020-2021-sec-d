<?php

require 'db.php';
// $hostname = 'localhost';
// $hostuser = 'root';
// $hostpass = '';
// $dbname = 'tour';

// $db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);



    $accountname = $_POST['aname'];
    $accountnumber = $_POST['anumber'];
    $amount = $_POST['amount'];
    $password = $_POST['password'];

    //$dob = $_POST['year'] . '/' . $_POST['month'] . '/' . $_POST['day'];

    //$dob = $_POST['dob'];


    //
    // if(empty($accountname))
    // {
    //
    //   $err ="Fill up properly";
    //   header('location:allpayment.php?err='.$err);
    //
    // }
    //
    //
    // else if (empty($accountnumber))
    //  {
    //    $u_err ="Fill up properly";
    //    header('location:allpayment.php?u_err='.$u_err);
    // }
    //
    //
    //
    //
    // else if (empty($amount))
    //  {
    //    $e_err ="Fill up properly";
    //    header('location:allpayment.php?e_err='.$e_err);
    // }
    //
    //
    //
    //
    // else if (empty($password))
    //  {
    //    $p_err ="Please write password!!!?";
    //    header('location:allpayment.php?p_err='.$p_err);
    // }
    //
    //
    //
    //
    //
    //
    //
    //
    //
    //
    // else {
      $insert = "INSERT INTO payments(accountname,accountnumber,amount) VALUES('$accountname','$accountnumber' ,'$amount')";

      // $insert = "INSERT INTO users(name,username,email,password,gender,dob) VALUES('$name','$username' ,'$email','$password','$gender',$dob)";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Thank you for your payment';

    header('location:allpaymentallupdate.php?success='.$success);

    //
    // }










 ?>
