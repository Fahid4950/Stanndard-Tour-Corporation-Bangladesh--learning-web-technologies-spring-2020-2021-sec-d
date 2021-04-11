
<?php

require '../dashbord_part/header.php';


 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Registration Form</h5>
    <div class="card-body">

      <form class="" action="register-post.php" method="post" auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text"name="fname"class="form-control" placeholder="Enter Your Name" >
          <?php
          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>

          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <span><?php if(isset($username_error['fusfusername']))
            { echo $username_error['fusername'];
            } ?></span>
            <input type="text" name="fusername"class="form-control" placeholder="Enter Your UserName" >

            <?php
            if(isset($_GET['u_err'])){ ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['u_err']; ?>
  </div>
                <?php
                }

                 ?>



            </div>


      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text"name="email" class="form-control" placeholder="Enter Your Email Address"  >

        <?php
        if(isset($_GET['e_err'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['e_err']; ?>
</div>
            <?php
            }

             ?>

             <?php
             if(isset($_GET['email_err'])){ ?>
             <div class="alert alert-danger" role="alert">
                 <?php echo $_GET['email_err']; ?>
           </div>
                 <?php
                 }

                  ?>


      </div>


      <div class="form-group position-relative">
        <label for="exampleInputPassword1" class="form-label"> Password</label>
        <input type="password" id="myInput" name="password" class="form-control" placeholder="Enter Your Password">

        <button  class="btn btn-info" type="button"  onclick="myFunction()">Show<i class="fa fa-eye"></i></button>

        <?php
        if(isset($_GET['p_err'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['p_err']; ?>
</div>
            <?php
            }

             ?>

             <?php
             if(isset($_GET['rp_err'])){ ?>
             <div class="alert alert-danger" role="alert">
                 <?php echo $_GET['rp_err']; ?>
     </div>
                 <?php
                 }

                  ?>
      </div>





      <div class="form-group">
  <label for="exampleInputPassword1" class="form-label"> Re Password</label>
  <input type="password"name="repassword" class="form-control" placeholder="Enter Your Password Again"  >

  <?php
  if(isset($_GET['re_err'])){ ?>
  <div class="alert alert-danger" role="alert">
      <?php echo $_GET['re_err']; ?>
</div>
      <?php
      }

       ?>

       <?php
       if(isset($_GET['ree_err'])){ ?>
       <div class="alert alert-danger" role="alert">
           <?php echo $_GET['ree_err']; ?>
</div>
           <?php
           }

            ?>
</div>






<br>
      <div class="form-group">
          <label for="exampleInputEmail1">Gender</label>
            &nbsp; &nbsp; &nbsp;
          <label for="male">
          <input type="radio" name="gender" id='male'value='male'  > Male
             </label>
            &nbsp; &nbsp; &nbsp;
          <label for="female">
              <input type="radio" name="gender"id='female' value='female'  > Female
          </label>
          &nbsp; &nbsp; &nbsp;
        <label for="other">
            <input type="radio" name="gender"id='other' value='other'  > Other
        </label>
      </div>
      <br>







<div class="form-group row">
<label for="example-date-input" class="col-2 col-form-label">Date Of Birth</label>
<div class="col-10">
<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
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
