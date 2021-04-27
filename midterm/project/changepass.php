<?php

	if (isset($_POST['cPassword']) && $_POST['cPassword'] !== $_COOKIE['password']) { echo "Your entered Current Password is not correct! ";}
	elseif (isset($_POST['nPassword']) && $_POST['cPassword'] === $_POST['nPassword']) { echo "Your entered the old password as new password! ";}
	elseif (isset($_POST['rnPassword']) && $_POST['rnPassword'] !== $_POST['nPassword']) { echo "Please enter password carefully!";}
	elseif (isset($_POST['rnPassword']) && $_POST['rnPassword'] === $_POST['nPassword']) {setcookie('password',$_POST['nPassword'],time()+3600,'/');}
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
				<a href="home.php"> <img src="Image/p2.png" align="left"> </a>
				Logged in as <?php print_r($_COOKIE['name']) ?>
				&nbsp | &nbsp
				<a href="logout.php"> Logout</a>
				&nbsp
			</td>
		</tr>
		
		<tr height = "100px">
			<td width="40%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
					<li> <a href="inter.php"> Dashboard </a></li>
					<li> <a href="profile.php"> View Profile </a></li>
					<li> <a href="editProfile.html"> Edit Profile </a> </li>
					<li> <a href="changepp.php"> Change Profile Picture </a> </li>

					<li> <a href="logout.php" > Logout </a> </li>
				</ul>
			</td>
			
			<td colspan="2" align="center">
				<br>
				
				<form method="POST" action="">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD </b></legend>
						<table>
							<tr>
							
							
								<td> Current Password: </td>
								<td>
									<input type="password" name="cPassword">
								</td>
							</tr>


							<tr>
								<td>
									New Password:
								</td>
								<td>
									<input type="password" name="nPassword">
								</td>
							</tr>


							<tr>
								<td>
									Retype New Password:
								</td>
								<td>
								
									<input type="password" name="rnPassword" >
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
