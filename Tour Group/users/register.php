<!-- <?php
if(isset($_post['form']))
{
  if($_POST['fusername'] == "")
  {
    $username_error['fusername']= "Thik nai";
  }
}
 ?> -->

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
    <h5 class="card-header bg-success">Registration Form</h5>
    <div class="card-body">

      <form class="" action="register-post.php" method="post" auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text"name="fname" class="form-control" >
        </div>

          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <span><?php if(isset($username_error['fusfusername']))
            { echo $username_error['fusername'];
            } ?></span>
            <input type="text" name="fusername"class="form-control" >
            </div>


      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email"name="email" class="form-control" >

      </div>


      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password"name="password" class="form-control" >
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
      </div>
      <br>







<div class="form-group row">
<label for="example-date-input" class="col-2 col-form-label">Date Of Birth</label>
<div class="col-10">
<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
</div>

<br>


      <?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-success" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>

    <?php } ?>

    <br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
