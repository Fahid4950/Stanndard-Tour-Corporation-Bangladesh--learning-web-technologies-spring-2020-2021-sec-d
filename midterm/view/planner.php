<html>
<head>
 <title>Name Input</title>
  <style>
body {
  background-color: lightblue;
}
h3 {
  color: black;
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
let nich=document.getElementById('date').value;
if(nich=='')
{
	document.getElementById('niche').innerHTML="have to enter something";
	return false;
}
}
</script>
</head> 
<body>  
<form method="post" action="../controller/plannercheck.php"name="myform" onsubmit="return validate()"> 
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
						event name <input type="text" id="fname" name="planner" size="50"><br><br>
						<p id="cpp"></p>
						<input type="date" name="date" id="date">(dd/mm/yyyy)(date)<br><br>
						<p id="niche"></p>
					<input type="submit" name="submit" value="submit">
					<a href='plannerdata.php' > Data</a>
					<a href='plannersearch.php' > Search</a>
				</h3> 
				<h2></h2>
			</td>
</tr>
</form>
</table>   
</body>   
</html>