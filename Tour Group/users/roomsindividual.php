<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require '../db.php';


$id = $_GET['id'];
$select = "SELECT * FROM rooms WHERE id = $id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);


 ?>





   <?php

   require '../dashbord_part/header.php';


    ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto ">
        <div class="card">
<div class="card-header  text-primary">
<h3>Individual Room Information</h3>
</div>

<div class="card-body">
  <table class="table">

    <tr>
      <td>Room Name</td>
      <td><?php echo $after_assoc['roomname'] ?></td>
    </tr>
    <tr>
      <td>Room Quality</td>
      <td><?php echo $after_assoc['roomquality'] ?></td>
    </tr>
    <tr>
      <td>Room Type</td>
      <td><?php echo $after_assoc['roomtype'] ?></td>
    </tr>


  </table>

</div>
</div>
</div>
</div>
</div>
</section>



  <?php

  require '../dashbord_part/footer.php';


   ?>
