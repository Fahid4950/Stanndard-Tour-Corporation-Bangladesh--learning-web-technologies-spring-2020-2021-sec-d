<html>
<head>
</head> 
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
<tr height="200px">
<td width="33%" >
<li></li>
<hr width="90%">
<?php include'header.php';?>
</td>
<td>
				<h3>
						WELCOME TO THE MAP SECTION HERE IS MAP
						<iframe src=
	"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703692693!2d90.27923991057244!3d23.780573258035957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1614883192244!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
				<qw/h3> 
			</td>
</tr>



 
</form>
</table>   
</body>   
</html>