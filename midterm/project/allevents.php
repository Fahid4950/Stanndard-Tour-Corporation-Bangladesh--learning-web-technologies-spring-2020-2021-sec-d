




<?php

require 'db.php';
$select = "SELECT * FROM events WHERE status=0";
$select_result = mysqli_query($db_connect,$select);



 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>All Events</title>
  </head>
  <body>

<style>

body {
  background-image: url('Image/img8.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>







<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 m-auto ">
        <div class="card">
<div class="card-header  text-primary">
<h3> All Events Information   <a class="float-right btn btn-warning" href="logout.php"> Logout</a> </h3>
</div>

<div class="card-body">
  <table class="table">
    <tr>
      <!-- <th>ID</th> -->
      <th>Event Name</th>
      <th>Duration</th>
      <th>Tour Area</th>
      <th>Food Package</th>
      <th>Price</th>
      <th>Action</th>

    </tr>


    <?php foreach ($select_result as  $events) { ?>
      <tr>
       <td><?php echo $events['eventname'] ?></td>

        <td><?php echo $events['duration'] ?></td>

        <td><?php echo $events['tourarea'] ?></td>

        <td><?php echo $events['package'] ?></td>

        <td><?php echo $events['price'] ?></td>
        <td>



            <a href="events-post.php?id=<?php echo $events['id'] ?>" class="btn btn-primary">Confirm</a>
        </td>

      </tr>
<?php } ?>


  </table>

</div>
</div>
</div>
</div>
</div>
</section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
