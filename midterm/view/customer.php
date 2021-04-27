<html>
<head>
 <title>Name Input</title>
 <style>
body {
  background-color: lightblue;
}
h3 {
  color: lightblue;
}
tr {
  color: black;
}
h3 {
  position: relative;
  left: 300px;
  top: px;
}
.button
{
	background-color: lightblue;
    font-size: 13px;
    color:green;
}
a:link {
  color: red;
  text-decoration: none;
}
</style> 
</head>
<body>
<?php session_start();
if($_SESSION["valid"] != true){
    header("location: home.html");
}
?>
<table border="1" width="100%" cellspacing="0">

<tr height="100px">
<td align="left">
<td align="right">
<?php include'high.php';?>

</td>
</tr>

<tr height="350px">
<td width="33%" >
<li></li>
<hr width="90%">
<?php include'header.php';?>
</td>
<td>
				<h3>
          <table>
<?php

require_once('../model/emaildb.php');
require_once('../model/cusfunction.php');

$result = cus();

if (mysqli_num_rows($result) > 0) {
	echo "<table border = 1 cellspacing = 0>
			<tr>
			<td>serial</td>
				<td>Name</td>
				<td>Phone</td>
			</tr>";
  while($row = mysqli_fetch_assoc($result)) {
	  echo "<tr>
	  <td>{$row["id"]}</td>
	   <td>{$row["name"]}</td>
	   <td>{$row["phone"]}</td>

	  <td>  <a href='../controller/deletecus.php?id={$row["id"]}'> Delete </a> </td>
				</tr>";
  }
  
} else {
  echo "0 results";
}


?>

</table>
<a href='searchcus.php' > Search for customer</a>

				</h3>
			</td>
</tr>

</form>
</table>
</body>
</html>
