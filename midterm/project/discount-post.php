<?php

require 'db.php';
// $hostname = 'localhost';
// $hostuser = 'root';
// $hostpass = '';
// $dbname = 'tour';

// $db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);



    $promocode = $_POST['pcode'];
    
    //$dob = $_POST['year'] . '/' . $_POST['month'] . '/' . $_POST['day'];

    //$dob = $_POST['dob'];



    if(empty($promocode))
    {

      $err ="Fill up properly";
      header('location:alldiscount.php?err='.$err);

    }


   




    else {
      $insert = "INSERT INTO discounts(promocode) VALUES('$promocode')";

      // $insert = "INSERT INTO users(name,username,email,password,gender,dob) VALUES('$name','$username' ,'$email','$password','$gender',$dob)";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'You gets 20% discount,Thank you';

    
    
header('location:alldiscount.php?success='.$success);

    }










 ?>
