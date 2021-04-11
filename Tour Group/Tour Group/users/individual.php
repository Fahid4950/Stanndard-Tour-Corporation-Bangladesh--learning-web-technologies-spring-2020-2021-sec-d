<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require '../db.php';


$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id = $id";
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
<h3>Individual User  Information</h3>
</div>

<div class="card-body">
  <table class="table">

    <tr>
      <td>Name</td>
      <td><?php echo $after_assoc['name'] ?></td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td><?php echo $after_assoc['email'] ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $after_assoc['gender'] ?></td>
    </tr>
    <tr>
      <td>Created Time</td>
      <td><?php echo $after_assoc['created_at'] ?></td>
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
