<html>
<head>
 <title></title>
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
  color: blue;
}
h1 {
  position: relative;
  left: 350px;
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

<tr height="600px">
<td width="20%" >

<hr width="90%">

<?php include'header.php';?>



</td>
<td>
				<h1>
						Welcome to Tour Guide
				</h1> 
								<h2></h2>
<img src="guide.jpg" alt="Girl in a jacket" width="1200" height="500">

			</td>
</tr>



 
</form>
</table>   
</body>   
</html>