<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require '../db.php';


$id = $_GET['id'];
$select = "SELECT * FROM events WHERE id = $id";
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
<h3>Individual Event Information</h3>
</div>

<div class="card-body">
  <table class="table">

    <tr>
      <td>Event Name</td>
      <td><?php echo $after_assoc['eventname'] ?></td>
    </tr>
    <tr>
      <td>Duration</td>
      <td><?php echo $after_assoc['duration'] ?></td>
    </tr>
    <tr>
      <td>Tour Area</td>
      <td><?php echo $after_assoc['tourarea'] ?></td>
    </tr>
    <tr>
      <td>Package</td>
      <td><?php echo $after_assoc['package'] ?></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><?php echo $after_assoc['price'] ?></td>
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
