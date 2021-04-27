<?php
require '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id=$id";
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
    <h5 class="card-header bg-primary">Update User Information</h5>
    <div class="card-body">

      <form class="" action="register-post.php" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text"name="fname" class="form-control" value="<?=$after_assoc['name']?>">
        </div>

          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text" name="fusername"class="form-control" value="<?=$after_assoc['username']?>">
            </div>


      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email"name="email" class="form-control" value="<?=$after_assoc['email']?>">

      </div>


      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password"name="password" class="form-control" value="<?=$after_assoc['password']?>">
      </div>
<br>
      <div class="form-group">
          <label for="exampleInputEmail1">Gender</label>
            &nbsp; &nbsp; &nbsp;
          <label for="male">
          <input type="radio" name="gender" id='male'value="male" <?=($after_assoc['gender']=='male'?'checked':'')?> > Male
             </label>
            &nbsp; &nbsp; &nbsp;
          <label for="female">
              <input type="radio" name="gender"id='female' value="female" <?=($after_assoc['gender']=='female'?'checked':'')?> > Female
          </label>
          &nbsp; &nbsp; &nbsp;
          <label for="other">
              <input type="radio" name="gender"id='other' value="other" <?=($after_assoc['gender']=='other'?'checked':'')?> > Other
          </label>
      </div>
      <br>




</div>
      <br>


      <br>


      <!-- <?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-success" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>

    <?php } ?> -->

    <br>
      <button type="submit" class="btn btn-primary">Submit</button>

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
