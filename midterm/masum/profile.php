<!-- <html>
<head>
 <title>Name Input</title>
</head>
<body>
<table border="1" width="100%" cellspacing="0">

<tr height="100px">
<td align="left">

<td align="right">
logged in <a href="profile.php"><?php print_r($_COOKIE['name'])?> | </a>
<a href="logout.php">log_out</a>
</td>
</tr>

<tr height="200px">
<td width="33%" >
<li>Account</li>
<hr width="90%">
<ul>
<li><a href="inter.php">Home </a><br>
<li><a href="logout.php">log_out</a><br>
</ul>
</td>
<td>
				<h3>
						Name: <?php print_r($_COOKIE['name']) ?><br>
						EMAIL: <?php print_r($_COOKIE['email']) ?><br>
            

				</h3>
			</td>
</tr>

</form>
</table>
</body>
</html>
 -->
 <?php

//require '../db.php';
 $hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'tour';

 

$db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);


$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id = $id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);


 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Individual User Information</title>
  </head>
  <body>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto ">
        <div class="card">
<div class="card-header  text-primary">
<h3>Individual User  Information</h3>
</div>

<div class="card-body">
  <table class="table">

    <tr>
      <td>Name</td>
      <td><?php echo $after_assoc['name'] ?></td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td><?php echo $after_assoc['email'] ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $after_assoc['gender'] ?></td>
    </tr>
    <tr>
      <td>Created Time</td>
      <td><?php echo $after_assoc['created_at'] ?></td>
    </tr>
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