<html>
<head>
 <title>Name Input</title>
</head> 
<body>  
 <style>
body {
  background-color: lightblue;
}
h3 {
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

<tr height="100px">
     <td align="left">
      
<td align="right">
<?php include'high.php';?>
</td>
</tr>

<tr height="200px">
<td width="33%" >

<hr width="90%">


<?php include'header.php';?>


</td>

				<td>
				<h3>
						25°<br>
						CLOUDY<br>
						DHAKA<br>
						1st Jan
				</h3>
					<h3>
						35°<br>
						CLEAR<br>
						DHAKA<br>
						2nd Jan
				</h3>
					<h3>
						36°<br>
						CLEAR<br>
						DHAKA<br>
						3rd Jan
				</h3>
				<h3>
						36°<br>
						CLEAR<br>
						DHAKA<br>
						4th Jan
				</h3>
			</td>
</tr>


 
</form>
</table>   
</body>   
</html>