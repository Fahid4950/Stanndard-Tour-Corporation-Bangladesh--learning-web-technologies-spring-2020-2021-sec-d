<?php
// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }

require '../db.php';
$select = "SELECT * FROM users WHERE status=0";
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
<h3> All Users Information   <a class="float-right btn btn-danger" href="logout.php"> Logout</a> </h3>
</div>

<div class="card-body">
  <table class="table">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Created At </th>
      <th>View</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>


    <?php foreach ($select_result as  $users) { ?>
      <tr>
        <td><?php echo $users['id'] ?></td>

        <td><?php echo $users['name'] ?></td>

        <td><?php echo $users['email'] ?></td>

        <td><?php echo $users['gender'] ?></td>

        <td><?php echo $users['created_at'] ?></td>
        <td>
            <a href="individual.php?id=<?php echo $users['id'] ?>" class="btn btn-info">View</a>
        </td>
        <td>
            <a href="edit-user.php?id=<?php echo $users['id'] ?>" class="btn btn-success">Update</a>
        </td>
        <td>
            <a href="user-status.php?id=<?php echo $users['id'] ?>" class="btn btn-danger">Delete</a>
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
