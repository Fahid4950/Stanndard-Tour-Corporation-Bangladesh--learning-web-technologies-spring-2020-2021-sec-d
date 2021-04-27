<?php

require 'db.php';



    $eventname = $_POST['ename'];
      $duration = $_POST['eduration'];
        $tourarea = $_POST['earea'];
          $package = $_POST['epackage'];
            $price = $_POST['eprice'];




    if(empty($eventname))
    {

      $err ="Where is your eventname?";
      header('location:addevents.php?err='.$err);

    }

    else if (empty($duration))
     {
       $u_err ="How much Duration time?";
       header('location:addevents.php?u_err='.$u_err);
    }
    else if (empty($tourarea))
     {
       $e_err ="Where is tour area?";
       header('location:addevents.php?e_err='.$e_err);
    }

    else if (empty($package))
     {
       $el_err ="What is in package?";
       header('location:addevents.php?el_err='.$el_err);
    }

    else if (empty($price))
     {
       $ell_err ="Price Please!!!";
       header('location:addevents.php?ell_err='.$ell_err);
    }




    else {
      $insert = "INSERT INTO events(eventname,duration,tourarea,package,price) VALUES('$eventname','$duration' ,'$tourarea','$package','$price')";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Registration Successfull!!!';

       header('location:addevents.php?success='.$success);

    }




 ?>
