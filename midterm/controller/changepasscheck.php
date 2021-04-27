<?php
	require_once('../model/editfunction.php');
	if (isset($_POST['Submit']))
	{
		require_once('../model/emaildb.php');
		$name=$_COOKIE['name'];
		$old=$_COOKIE['pass'];
		$pass=$_POST['nPassword'];
		$rPass=$_POST['rnPassword'];
		$email=$_COOKIE['email'];
		$gender=$_COOKIE['gender'];
		
		
		
		
		if($_POST['cPassword']!=$_COOKIE['pass'])
		{
			echo"Current password is not correct";
		}
		else if($_POST['rnPassword']!=$_POST['nPassword'])
		{
			echo"New & retype new password is not same";
		}
		else if($old===$pass)
		{
			echo"old and new password are same";
		}
		else if(strlen($pass)<8)
				{
					echo"You have to have atleast 8 digit of password";
				}
				
		else{
		$edit = array('password' => $pass,'name' => $name);
		if(editepass($edit))
			{
				header('location: ../view/profile.php');
			}
			else{
				echo"Fail to delete";
			}
		}
	}
?>