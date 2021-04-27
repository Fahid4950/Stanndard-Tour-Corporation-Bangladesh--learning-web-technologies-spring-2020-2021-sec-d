

<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>Customer Language</title>
  </head>
  <body>
<style>

body {
  background-image: url('Image/img4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
<!-- </style>
<style>
body {background-color: powderblue;}

</style> -->


    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">


    <h5 class="card-header bg-info text-white"><b>Customers Language</b></h5>
    <div class="card-body">

      <form class="" action="language-post.php" method="post" auto_complete="off">

<div class="form-group row">
<label for="example-date-input" class="col-2 col-form-label"><b>Select your language</b></label>
<div class="col-10">
  <select size="1" name="language">
<option value="Bangla" label="Bangla">Bangla</option>
<option value="English" label="English">English</option>
<option value="Hindi" label="Hindi">Hindi</option>
<option value="Arabic" label="Arabic">Arabic</option>
<option value="Japanese" label="Japanese">Japanese</option>
<option value="Chinese" label="Chinese">Chinese</option>
<option value="Russian" label="Russian">Russian</option>

</select>



<?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-primary" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>
 
    <?php } ?>
<br>
<br>

<hr>
      <button type="submit" class="btn btn-warning"><b>Submit</b></button>
      <!-- <a href="login.php">login</a> -->
      
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
