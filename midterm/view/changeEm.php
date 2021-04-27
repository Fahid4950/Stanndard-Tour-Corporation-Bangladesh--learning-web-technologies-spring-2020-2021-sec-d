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
function vvvalidate()
{
let ce=document.getElementById('ce').value;
if(ce=='')
{
	document.getElementById('curemail').innerHTML="enter current email";
	return false;
}
let ne=document.getElementById('ne').value;
if(ne=='')
{
	document.getElementById('newem').innerHTML="enter new password";
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
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp  </h4>
				<hr width="90%">
				<?php include'featurprofile.php';?>
			</td>
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="../controller/changeEMcheck.php" name="myform" onsubmit="return vvvalidate()">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE Email </b></legend>
						<table>
							<tr>
								<td> Current Email </td>
								<td>
									<input type="email" name="ce" id="ce">
									<p id="curemail"></p>
								</td>
							</tr>

							<tr>
								<td>
									New Email
								</td>
								<td>
									<input type="email" name="ne" id="ne">
									<p id="newem"></p>
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
	</table>
</body>
</html>