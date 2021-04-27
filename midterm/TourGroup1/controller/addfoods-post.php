<?php

require '../db.php';




      $foodname = $_POST['fname'];
        $fooditem = $_POST['fitem'];
          $foodtype = $_POST['ftype'];




    // if(empty($roomname))
    // {
    //
    //   $err ="Enter Roomname";
    //   header('location:addrooms.php?err='.$err);
    //
    // }
    //
    // else if (empty($roomquality))
    //  {
    //    $u_err ="Enter Room Quality";
    //    header('location:addrooms.php?u_err='.$u_err);
    // }
    // else if (empty($roomtype))
    //  {
    //    $e_err ="Enter Room Type";
    //    header('location:addrooms.php?e_err='.$e_err);
    // }
    //
    //
    //
    //
    //
    //
    // else {
      $insert = "INSERT INTO foods(foodname,fooditem,foodtype) VALUES('$foodname','$fooditem' ,'$foodtype')";



      $insert_result = mysqli_query($db_connect,$insert);
      $success = 'Registration Successfull!!!';

       header('location:/midterm/TourGroup/view/addfoodsallupdate.php?success='.$success);

    // }




 ?>
