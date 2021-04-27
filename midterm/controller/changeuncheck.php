<?php
	require_once('../model/editfunction.php');
	if (isset($_POST['Submit']))
	{
			require_once('../model/emaildb.php');
		$name=$_POST['nn'];
		$pass=$_COOKIE['pass'];
		$rPass=$_COOKIE['pass'];
		$email=$_COOKIE['email'];
		$gender=$_COOKIE['gender'];
		
		if($_POST['cn']===$_POST['nn'])
		{
			echo"New & old name is same";
		}
		else if($_POST['cn']!=$_COOKIE['name'])
		{
			echo"type your old name incorrect";
		}
		else if($_POST['nn']!=$_POST['rn'])
		{
			echo"New & retype new name is not same";
		}
				else if(strlen($name)<4)
				{
					echo "You have to have atleast 4 digit of Name";
				}
		else{
				$edit = array('email' => $email,'name' => $name);
		if(editename($edit))
			{
				header('location: ../view/profile.php');
			}
			else{
				echo"Fail to delete";
			}
		setcookie('name',$name,time()+3600,'/');
     }
	}
?>