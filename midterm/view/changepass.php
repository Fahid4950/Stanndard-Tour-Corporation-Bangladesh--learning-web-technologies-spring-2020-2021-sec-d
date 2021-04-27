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
let cp=document.getElementById('cp').value;
if(cp=='')
{
	document.getElementById('currentpass').innerHTML="enter current password";
	return false;
}
let np=document.getElementById('np').value;
if(np=='')
{
	document.getElementById('newpass').innerHTML="enter new password";
	return false;
}
else if(np.length<8)
{
	document.getElementById('newpass').innerHTML="Enter 8 character";
	return false;
}

let rnp=document.getElementById('rnp').value;
if(rnp=='')
{
	document.getElementById('rnewpass').innerHTML="enter retype new password";
	return false;
}
else if(rnp!=np)
{
	document.getElementById('rnewpass').innerHTML="retype name and new password doesnt match";
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
				<h4> </h4>
				<hr width="90%">
				<?php include'featurprofile.php';?>
			</td>
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="../controller/changepasscheck.php" name="myform" onsubmit="return vvvalidate()">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD</b></legend>
						<table>
							<tr>
								<td> Current Password: </td>
								<td>
									<input type="password" name="cPassword" id="cp">
									<p id="currentpass"></p>
								</td>
							</tr>

							<tr>
								<td>
									New Password:
								</td>
								<td>
									<input type="password" name="nPassword" id="np">
									<p id="newpass"></p>
								</td>
							</tr>

							<tr>
								<td>
									Retype New Password:
								</td>
								<td>
									<input type="password" name="rnPassword" id="rnp">
									<p id="rnewpass"></p>
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