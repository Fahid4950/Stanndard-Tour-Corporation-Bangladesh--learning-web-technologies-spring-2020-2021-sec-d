<!--
<?php
// session_start();
 ?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>



    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">


    <h5 class="card-header bg-success text-white">Login Form</h5>
    <div class="card-body">

      <form class="" action="login-postallupdate.php"onsubmit="return validationlogin()" method="post" auto_complete="off">



          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>


            <input type="text" name="fusername" id="fusername"class="form-control" placeholder="Enter Your UserName" >

              <span id="usernameok" class="text-danger font-weight-bold"> </span>


            </div>




      <div class="form-group position-relative">
        <label for="exampleInputPassword1" class="form-label"> Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password">

          <span id="passwordok" class="text-danger font-weight-bold"> </span>


</div>


      <button type="submit" class="btn btn-success">Login</button>

      </form>


          </div>
        </div>
      </div>
</div>

    </section>



<script>
function validationlogin()
{
  var fusername = document.getElementById('fusername').value;
  var password = document.getElementById('password').value;



  if(fusername == ""){
    document.getElementById('usernameok').innerHTML =" ** Please fill the username field";
    return false;
  }
  if(password == ""){
    document.getElementById('passwordok').innerHTML =" ** Please fill the password field";
    return false;
  }
}

</script>
















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
