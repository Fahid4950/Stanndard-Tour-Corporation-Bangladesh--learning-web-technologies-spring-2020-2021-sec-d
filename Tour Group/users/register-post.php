<?php

require '../db.php';

// if(isset($_post['submit']))
// {
//   if($_POST['fusername'] == "")
//   {
//     $username_error['fusername']= "Thik nai";
//     header('location:register.php?success='.$success);
//
//   }
// }


    $name = $_POST['fname'];
    $username = $_POST['fusername'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    //$dob = $_POST['year'] . '/' . $_POST['month'] . '/' . $_POST['day'];

    //$dob = $_POST['dob'];
    //$type = $_POST['type'];
    date_default_timezone_set('Asia/Dhaka');
    $created_at = date('Y-m-d h:i:s');



    // if ($data['password'] !== $data['password_confirm']) {
    //    die('Password and Confirm password should match!');
    // }






      $insert = "INSERT INTO users(name,username,email,password,gender,created_at) VALUES('$name','$username' ,'$email','$password','$gender','$created_at')";

      // $insert = "INSERT INTO users(name,username,email,password,gender,dob) VALUES('$name','$username' ,'$email','$password','$gender',$dob)";

      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Registration Successfull!!!';

       header('location:register.php?success='.$success);









 ?>
