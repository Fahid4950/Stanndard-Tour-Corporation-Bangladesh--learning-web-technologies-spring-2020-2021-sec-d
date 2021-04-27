<?php
session_start();
require_once('../model/reportfunction.php');
	if(isset($_POST['submit'])){
		require_once('../model/emaildb.php');
		$plan=$_POST['report'];
		$id=$_GET['id'];
		$id = $_SESSION['id'];
		if($_POST['report']==="")
		{
			echo"You enter nothing";
		}
		else{
		$edit = array('plan' => $plan,'id' => $id);
		if(editview($edit))
			{
				header('location: ../view/reviewdata.php');
			}
			else{
				echo"Fail to insert";
			}
     }
	}
?>
