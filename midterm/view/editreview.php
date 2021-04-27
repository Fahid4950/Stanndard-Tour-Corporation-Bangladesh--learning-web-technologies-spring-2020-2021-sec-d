<?php
	session_start();
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
?>
<html>
<head>
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
<script type ="text/javascript">
function validate()
{
let sub=document.getElementById('fname').value;
if(sub=='')
{
	document.getElementById('cpp').innerHTML="have to enter something";
	return false;
}
}
</script>
</head> 
<body>  
<form method="post" action="../controller/editreviewcheck.php" name="myform" onsubmit="return validate()"> 
<table border="1" width="100%" cellspacing="0">

<tr height="100px">    
<td align="right">
<a href="index.php">Home | </a>
<a href="logout.php">log_out | </a>
<a href="registration.html">Registration</a>
</td>
</tr>
<tr height="200px">

<td>
				
						REPORT
						<input type="text" id="fname" name="report" size="150"><br>
						<p id="cpp"></p>
					<input type="submit" name="submit" value="submit">
				
			</td>
</tr>
 
</form>
</table>   
</body>   
</html>