<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	 <style>
body {
  background-color: lightblue;
}
h3 {
  color: green;
}
tr {
  color: black;
}
h3 {
  position: relative;
  left: 300px;
  top: px;
}
</style> 
	<script type ="text/javascript">
function validate()
{
let cn=document.getElementById('cn').value;
if(cn=='')
{
	document.getElementById('current').innerHTML="enter current name";
	return false;
}
let nn=document.getElementById('nn').value;
if(nn=='')
{
	document.getElementById('new').innerHTML="enter new name";
	return false;
}
else if(cn==nn)
{
	document.getElementById('new').innerHTML="current name and new name match";
	return false;
}

let rn=document.getElementById('rn').value;
if(rn=='')
{
	document.getElementById('rnew').innerHTML="enter retype new name";
	return false;
}
else if(rn!=nn)
{
	document.getElementById('new').innerHTML="retype name and new name doesnt match";
	return false;
}
}	
</script>	
</head>
<body>
<?php session_start();
if($_SESSION["valid"] != true){
    header("location: home.html");
}
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<?php include'high.php';?>
			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> </h4>
				<hr width="90%">
				<ul>
					<?php include'featurprofile.php';?>
				</ul>
			</td>
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="../controller/changeuncheck.php"name="myform" onsubmit="return validate()">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD </b></legend>
						<table>
							<tr>
								<td> Current Name </td>
								<td>
									<input type="text" name="cn" id="cn">
									<p id="current"></p>
								</td>
							</tr>

							<tr>
								<td>
									New Name:
								</td>
								<td>
									<input type="text" name="nn" id="nn">
									<p id="new"></p>
								</td>
							</tr>

							<tr>
								<td>
									Retype New Name:
								</td>
								<td>
									<input type="text" name="rn" id="rn">
									<p id="rnew"></p>
								</td>
							</tr>
						</table>
				</fieldset>
					<hr width="80%">
					<input type="submit" name="Submit" value="Submit">
				</fieldset>
				</form>
				<br> 
			</td>
		</tr>
		
		</tr>
	</table>
</body>
</html>