<?php
require '../db.php';

// session_start();
//
// if(!isset($_SESSION['login_Success'] ))
// {
//     header('location:login.php');
// }









$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id=$id";
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
    <h5 class="card-header bg-primary">Update User Information</h5>
    <div class="card-body">

      <form class="" action="/../midterm/TourGroup/controller/update-user.php" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="hidden"name="id" class="form-control" value="<?=$after_assoc['id']?>">

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

      <div class="form-group row">
      <label for="example-date-input" class="col-2 col-form-label">Date Of Birth</label>
      <div class="col-10">
      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
      </div>





</div>
      <br>




      <!-- <?php if(isset($_GET['success'])){ ?>
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
