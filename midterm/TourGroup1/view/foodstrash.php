<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require '../db.php';
$select = "SELECT * FROM foods WHERE status=1";
$select_result = mysqli_query($db_connect,$select);



 ?>





  <?php

  require 'dashbord_part/header.php';


   ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 m-auto ">
        <div class="card">
<div class="card-header  text-primary">
<h3> Food Trash <a class="float-right btn btn-danger" href="allfoods.php"> Back</a></h3>
</div>

<div class="card-body">
  <table class="table">
    <tr>
      <th>Food Name</th>
      <th>Food Item</th>
      <th>Food Type</th>
      <th>Undo</th>
      <th>Delete</th>
    </tr>


    <?php foreach ($select_result as  $foods):  ?>
      <tr>
        <!-- <td><?php echo  $foods['id'] ?></td> -->
        <td><?php echo  $foods['foodname'] ?></td>

        <td><?php echo $foods['fooditem'] ?></td>

        <td><?php echo $foods['foodtype'] ?></td>
      </td>

        <td>
            <a href="foods-status.php?id=<?php echo $foods['id'] ?>" class="btn btn-success">Undo</a>

          </td>
          <td>
            <a href="/midterm/TourGroup/controller/delete-foods.php?id=<?php echo $foods['id'] ?>" class="btn btn-danger">Delete</a>
      </td>

      </tr>

<?php endforeach; ?>

<?php if($select_result ->num_rows== 0) {?>
  <tr>
    <td colspan="6" class="text-center">No Data Available</td>
  </tr>
<?php } ?>
  </table>

</div>
</div>
</div>
</div>
</div>
</section>
<?php
require 'dashbord_part/footer.php';
 ?>
