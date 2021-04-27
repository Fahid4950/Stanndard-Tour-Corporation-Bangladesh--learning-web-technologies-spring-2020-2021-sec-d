<!-- <html>
<head>
 <title>Name Input</title>
</head>
<body>
<table border="1" width="70%" cellspacing="0">

<tr height="100px">
<td align="left">

<td align="right">

<a href="logout.php">log_out</a>
</td>
</tr>

<tr height="300px">
<td width="40%" >
<li>Account</li>
<hr width="90%">
<ul>
<li><a href="inter.php">Home </a><br>
<li><a href="logout.php">log_out</a><br>
</ul>
</td>
<td>
				
			</td>
</tr>

</form>
</table>
</body>
</html>
 -->
 <?php

// require '../db.php';
 $hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'tour';
 
$db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);
$select = "SELECT * FROM users";
$select_result = mysqli_query($db_connect,$select);



 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>My profile</title>
  </head>
  <body>
<style>
body {background-color: powderblue;}

</style>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 m-auto ">
        <div class="card">
<div class="card-header  text-primary">
<h3>My  Information</h3>
</div>

<div class="card-body">
  <table class="table">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>DOB</th>
      
    </tr>


    <?php foreach ($select_result as  $users) { ?>
      <tr>
        <td><?php echo $users['id'] ?></td>

        <td><?php echo $users['name'] ?></td>

        <td><?php echo $users['email'] ?></td>

        <td><?php echo $users['gender'] ?></td>
<!-- 
        <td><?php echo $users['Dath of Birth'] ?></td> -->

      
      </tr>
<?php } ?>

<?php if($select_result ->num_rows== 0) {?>
  <tr>
    <td colspan="6" class="text-center">No Data Available</td>
  </tr>
<?php } ?>
  </table>

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
