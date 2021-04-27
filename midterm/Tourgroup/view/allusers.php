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

 require 'dashbord_part/header.php';


  ?>

<script type="text/javascript" src="script.js"></script>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 m-auto ">
        <div class="card">
<div class="card-header  text-secondary">
<h3>  <h1 id="myh1">All User Search</h1>
  <h3>By Username</h3>
<input type="text" name="" id="name" onkeyup="ajax()" />
<input type="button" name="" value="click" onclick="ajax()">

<div id="result"></div> <a class="float-right btn btn-danger" href="/../midterm/view/home.html"> Logout</a> </h3>
</div>

<div class="card-body">
  <table class="table">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Username</th>
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

        <td><?php echo $users['username'] ?></td>

        <td><?php echo $users['email'] ?></td>

        <td><?php echo $users['gender'] ?></td>

        <td><?php echo $users['created_at'] ?></td>
        <td>
            <a href="individual.php?id=<?php echo $users['id'] ?>" class="btn btn-info">View</a>
        </td>
        <td>
            <a href="/../midterm/TourGroup/controller/edit-user.php?id=<?php echo $users['id'] ?>" class="btn btn-success">Update</a>
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
require 'dashbord_part/footer.php';
 ?>
