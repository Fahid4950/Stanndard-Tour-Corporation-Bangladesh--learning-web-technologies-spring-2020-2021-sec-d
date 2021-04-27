<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require 'db.php';
$select = "SELECT * FROM events WHERE status=1";
$select_result = mysqli_query($db_connect,$select);



 ?>





  <?php

  require '../dashbord_part/header.php';


   ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 m-auto ">
        <div class="card">
<div class="card-header  text-primary">
<h3> Events Trash</h3>
</div>

<div class="card-body">
  <table class="table">
    <tr>
      <th>Event Name</th>
      <th>Duration</th>
      <th>Tour Area</th>
      <th>Food Package</th>
      <th>Price</th>
      <th>Undo</th>
      <th>Delete</th>
    </tr>


    <?php foreach ($select_result as  $events):  ?>
      <tr>
        <td><?php echo  $events['eventname'] ?></td>

        <td><?php echo $events['duration'] ?></td>

        <td><?php echo $events['tourarea'] ?></td>

        <td><?php echo $events['package'] ?></td>

        <td><?php echo $events['price'] ?>
        </td>

        <td>
            <a href="events-status.php?id=<?php echo $events['id'] ?>" class="btn btn-success">Undo</a>


            <a href="delete-events.php?id=<?php echo $events['id'] ?>" class="btn btn-danger">Delete</a>
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
require '../dashbord_part/footer.php';
 ?>
