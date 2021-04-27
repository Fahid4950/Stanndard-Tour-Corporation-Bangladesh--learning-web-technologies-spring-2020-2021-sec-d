<?php

require '../db.php';




      $roomname = $_POST['rname'];
        $roomquality = $_POST['rquality'];
          $roomtype = $_POST['rtype'];




    if(empty($roomname))
    {

      $err ="Enter Roomname";
      header('location:/../midterm/TourGroup/view/addrooms.php?err='.$err);

    }

    else if (empty($roomquality))
     {
       $u_err ="Enter Room Quality";
       header('location:/../midterm/TourGroup/view/addrooms.php?u_err='.$u_err);
    }
    else if (empty($roomtype))
     {
       $e_err ="Enter Room Type";
       header('location:/../midterm/TourGroup/view/addrooms.php?e_err='.$e_err);
    }






    else {
      $insert = "INSERT INTO rooms(roomname,roomquality,roomtype) VALUES('$roomname','$roomquality' ,'$roomtype')";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Registration Successfull!!!';

       header('location:/../midterm/TourGroup/view/addroomsallupdate.php?success='.$success);

    }




 ?>
