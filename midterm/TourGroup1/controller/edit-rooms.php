<?php
require '../db.php';

// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }




$id = $_GET['id'];
$select = "SELECT * FROM rooms WHERE id=$id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);






 ?>




<?php
require 'dashbord_part/header.php';

 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto ">
            <div class="card">
    <h5 class="card-header bg-primary">Update Rooms Information</h5>
    <div class="card-body">

      <form class="" action="/../midterm/TourGroup/controller/update-rooms.php" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Room Name</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="rname" class="form-control" value="<?=$after_assoc['roomname']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Room Quality</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="rquality" class="form-control" value="<?=$after_assoc['roomquality']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Room Type</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

          <input type="text"name="rtype" class="form-control" value="<?=$after_assoc['roomtype']?>">
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
require 'dashbord_part/footer.php';
 ?>
