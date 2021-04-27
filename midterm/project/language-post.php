<?php

require 'db.php';
// $hostname = 'localhost';
// $hostuser = 'root';
// $hostpass = '';
// $dbname = 'tour';

// $db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);



    $language = $_POST['language'];
    
    //$dob = $_POST['year'] . '/' . $_POST['month'] . '/' . $_POST['day'];

    //$dob = $_POST['dob'];



    // if(empty($promocode))
    // {

    //   $err ="Fill up properly";
    //   header('location:alldiscount.php?err='.$err);

    // }


   




    
      $insert = "INSERT INTO languages(language) VALUES('$language')";

      // $insert = "INSERT INTO users(name,username,email,password,gender,dob) VALUES('$name','$username' ,'$email','$password','$gender',$dob)";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Thank you for select you language';

    
    
header('location:alllanguage.php?success='.$success);

    










 ?>
