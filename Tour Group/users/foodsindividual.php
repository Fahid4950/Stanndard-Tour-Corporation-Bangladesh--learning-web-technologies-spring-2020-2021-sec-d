<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require '../db.php';


$id = $_GET['id'];
$select = "SELECT * FROM foods WHERE id = $id";
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
<h3>Individual Food Information</h3>
</div>

<div class="card-body">
  <table class="table">

    <tr>
      <td>Food Name</td>
      <td><?php echo $after_assoc['foodname'] ?></td>
    </tr>
    <tr>
      <td>Food Items</td>
      <td><?php echo $after_assoc['fooditem'] ?></td>
    </tr>
    <tr>
      <td>Food Type</td>
      <td><?php echo $after_assoc['foodtype'] ?></td>
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
