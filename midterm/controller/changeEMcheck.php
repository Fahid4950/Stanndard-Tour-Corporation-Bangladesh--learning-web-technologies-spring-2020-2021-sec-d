<?php
require_once('../model/editfunction.php');
	if (isset($_POST['Submit']))
	{
		require_once('../model/emaildb.php');
		$name=$_COOKIE['name'];
		$pass=$_COOKIE['pass'];
		$rPass=$_COOKIE['pass'];
		$email=$_POST['ne'];
		$gender=$_COOKIE['gender'];
		if($_POST['ce']===$_POST['ne'])
		{
			echo"Current and new email is same ";
		}
		else if($_POST['ce']!=$_COOKIE['email'])
		{
			echo"Your current email incorrect";
		}
		else{
		$edit = array('email' => $email,'name' => $name);
		if(editemail($edit))
			{
				header('location: ../view/profile.php');
			}
			else{
				echo"Fail to delete";
			}
	setcookie('email',$email,time()+3600,'/');
	}
	}
?>