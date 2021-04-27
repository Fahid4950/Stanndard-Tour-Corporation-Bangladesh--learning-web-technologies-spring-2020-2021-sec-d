<html>
<head>
<title>Edit Profile</title>
</head>
<body>
 <style>
body {
  background-color: lightblue;
}
h3 {
  color: green;
}
tr {
  color: red;
}
h3 {
  position: relative;
  left: 300px;
  top: px;
}
</style>  
<?php session_start();
if($_SESSION["valid"] != true){
    header("location: home.html");
}
?>
<table border="1" width="100%" cellspacing="0">
<form method = "post" action ="">

<tr height="100px" >
     <td align="left" >
       
<td align="right">
<?php include'high.php';?>
</td>
</tr>






<tr height="200px">
<td colspan="2" align="center">

<?php include'featurprofile.php';?>
<br>
</td>

<td colspan="2" align="center">
<form method = "post" action ="">



</form>
</body>
</html>