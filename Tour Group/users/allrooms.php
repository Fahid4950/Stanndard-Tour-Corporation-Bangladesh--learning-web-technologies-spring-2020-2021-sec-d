<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require '../db.php';
$select = "SELECT * FROM rooms WHERE status=0";
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
<h3> All Rooms Information   <a class="float-right btn btn-danger" href="logout.php"> Logout</a> </h3>
</div>

<div class="card-body">
  <table class="table">
    <tr>
      <!-- <th>ID</th> -->
      <th>Room Name</th>
      <th>Room Quality</th>
      <th>Room Type</th>
      <th>View</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>


    <?php foreach ($select_result as  $rooms) { ?>
      <tr>
        <td><?php echo $rooms['roomname'] ?></td>

        <td><?php echo $rooms['roomquality'] ?></td>

        <td><?php echo $rooms['roomtype'] ?></td>


        <td>



            <a href="roomsindividual.php?id=<?php echo $rooms['id'] ?>" class="btn btn-info">View</a>
        </td>
        <td>
            <a href="edit-rooms.php?id=<?php echo $rooms['id'] ?>" class="btn btn-success">Update</a>
        </td>
        <td>
            <a href="rooms-status.php?id=<?php echo $rooms['id'] ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
<?php } ?>

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
