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



   
      $insert = "INSERT INTO users(name,username,email,password,gender,day,month,year) VALUES('$name','$username' ,'$email','$password','$gender','$day','$month','$year')";

      // $insert = "INSERT INTO users(name,username,email,password,gender,dob) VALUES('$name','$username' ,'$email','$password','$gender',$dob)";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Registration Successfully done';

       header('location:registerallupdate.php?success='.$success);
       
      

    










 ?>
