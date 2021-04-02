<?php
	
	if (isset($_POST['Submit']))
	{
		$name=$_POST['nn'];
		$pass=$_COOKIE['pass'];
		$rPass=$_COOKIE['pass'];
		$email=$_COOKIE['email'];
		$gender=$_COOKIE['gender'];
		$dob=$_COOKIE['dob'];
		if($_POST['cn']===$_POST['nn'])
		{
			echo"New & old name is same";
			setcookie('name',$name,time()+3600,'/');
		}
		else if($_POST['nn']!=$_POST['rn'])
		{
			echo"New & retype new name is not same";
			setcookie('name',$name,time()+3600,'/');
		}
		else{
		$userValidationInfo = [
										 'user' => $name,
										 'pass' => $pass,
										 'rPass' => $rPass,
										 'email' => $email,
										  'gender'=>$gender,
										   'dob'=>$dob,
				      				  ];
				$allData = json_encode($userValidationInfo);
				$userData = fopen("userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
				setcookie('name',$name,time()+3600,'/');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
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
				<form method="POST" action="">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD </b></legend>
						<table>
							<tr>
								<td> Current Name </td>
								<td>
									<input type="text" name="cn">
								</td>
							</tr>

							<tr>
								<td>
									New Name:
								</td>
								<td>
									<input type="text" name="nn">
								</td>
							</tr>

							<tr>
								<td>
									Retype New Name:
								</td>
								<td>
									<input type="text" name="rn" >
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
		<tr height = "50px">
			<td colspan="3">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>