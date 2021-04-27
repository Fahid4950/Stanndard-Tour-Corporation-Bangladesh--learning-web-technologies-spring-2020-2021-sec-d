<?php

require 'db.php';
// $hostname = 'localhost';
// $hostuser = 'root';
// $hostpass = '';
// $dbname = 'tour';

// $db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);



    $givereview = $_POST['greview'];
    $discribe = $_POST['discribe'];
    
    

    
      $insert = "INSERT INTO reviews(givereview,discribe) VALUES('$givereview','$discribe')";

      // $insert = "INSERT INTO users(name,username,email,password,gender,dob) VALUES('$name','$username' ,'$email','$password','$gender',$dob)";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Thank you for your review';

    header('location:allreview.php?success='.$success);


 

 ?>
