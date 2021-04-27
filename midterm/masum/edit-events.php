<?php
require 'db.php';

// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }




$id = $_GET['id'];
$select = "SELECT * FROM events WHERE id=$id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);






 ?>




  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

      <title>Hello, world!</title>
    </head>
    <body>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto ">
            <div class="card">
    <h5 class="card-header bg-primary">Update Events Information</h5>
    <div class="card-body">

      <form class="" action="update-events.php" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Event Name</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="ename" class="form-control" value="<?=$after_assoc['eventname']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Duration</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="eduration" class="form-control" value="<?=$after_assoc['duration']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Tour Area</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="earea" class="form-control" value="<?=$after_assoc['tourarea']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Package</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="epackage" class="form-control" value="<?=$after_assoc['package']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Price</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="eprice" class="form-control" value="<?=$after_assoc['price']?>">
        </div>









</div>
      <br>


<!--

      <?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-success" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>

    <?php } ?> -->

    <br>
      <button type="submit" class="btn btn-primary">Update</button>

      </form>
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
