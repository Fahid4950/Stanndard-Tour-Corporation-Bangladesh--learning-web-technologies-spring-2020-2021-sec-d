<?php session_start();
if($_SESSION["valid"] != true){
    header("location: home.html");
}
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
<form method="post" action="../controller/submit.php" name="myform" onsubmit="return validate()"> 
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
						<input type="text" id="fname" name="report" size="100"><br>
						<p id="cpp"></p>
					<input type="submit" name="submit" value="submit" class="button">
					<a href="reviewdata.php">Records</a>
					<a href='reviewsearch.php' > Search</a>
				
			</td>
</tr>
</form>
</table>   
</body>   
</html>