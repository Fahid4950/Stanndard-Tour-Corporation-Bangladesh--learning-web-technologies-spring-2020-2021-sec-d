
<?php
session_start();
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
          <div class="col-lg-6 m-auto ">
            <div class="card">

              <div class="">

               <?php

                  if(isset($_SESSION['login_Error'])){?>


                                           <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                             <strong><?=$_SESSION['login_Error'];?></strong>
                                             <button type="button" class="close"data-dismiss="alealert" aria-label="close">
                                               <span aria-hidden="true">&times;</span>
                                             </button>
                                           </div>




            <?php }

unset( $_SESSION['login_Error']);
             ?>


             </div>
    <h5 class="card-header bg-success text-white">Login Form</h5>
    <div class="card-body">

      <form class="" action="login-post.php" method="post" auto_complete="off">



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


      <!-- <div class="form-group">
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


      </div> -->


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










      <?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-success" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>

    <?php } ?>
</div>


      <button type="submit" class="btn btn-success">Login</button>

      </form>


          </div>
        </div>
      </div>
</div>

    </section>




















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script >
  function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
}

  </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
