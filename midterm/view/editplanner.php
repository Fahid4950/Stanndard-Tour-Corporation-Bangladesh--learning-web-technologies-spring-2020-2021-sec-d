<?php
	session_start();
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
?>
<html>
<head>
 <title>Name Input</title>
 <style>
body {
  background-color: black;
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
<form method="post" action="../controller/editplannercheck.php"> 
<?php 
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

<tr height="200px">
<td width="33%" >
<li></li>
<hr width="90%">

<?php include'header.php';?>
</td>
<td>
				<h3>
						event name <input type="text" id="fname" name="planner" size="50"><br><br>
						<input type="date" name="date">(dd/mm/yyyy)<br><br>
					<input type="submit" name="submit" value="submit">
				</h3> 
				<h2></h2>
			</td>
</tr>
</form>
</table>   
</body>   
</html>