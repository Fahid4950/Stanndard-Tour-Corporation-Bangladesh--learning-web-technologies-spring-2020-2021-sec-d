<?php
require '../db.php';

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




<?php
require '../dashbord_part/header.php';

 ?>

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


<?php
require '../dashbord_part/footer.php';
 ?>
