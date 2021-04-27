
<?php

require '../dashbord_part/header.php';


 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Add Rooms</h5>
    <div class="card-body">

      <form class="" action="addrooms-post.php" method="post" auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Room Name</label>
          <input type="text"name="rname"class="form-control" placeholder="Event Name" >
          <?php
          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
          </div>
              <?php
              }

               ?>

        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Room Quality</label>
          <input type="text"name="rquality"class="form-control" placeholder="Enter Duration" >
          <?php
          if(isset($_GET['u_err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['u_err']; ?>
</div>
              <?php
              }

               ?>

        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Room Type</label>
          <input type="text"name="rtype"class="form-control" placeholder="Enter Tour Area" >
          <?php
          if(isset($_GET['e_err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['e_err']; ?>
</div>
              <?php
              }

               ?>

        </div>

      



      <?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-success" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>

    <?php } ?>
</div>
</div>

      <button type="submit" class="btn btn-primary">Submit</button>

      </form>

  </div>

          </div>

        </div>

      </div>

      </div>
      </div>
    </section>




















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script >
  function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
} -->
<?php
require '../dashbord_part/footer.php';
 ?>
