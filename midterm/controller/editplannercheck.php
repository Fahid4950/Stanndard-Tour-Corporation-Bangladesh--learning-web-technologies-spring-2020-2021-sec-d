<?php
session_start();
require_once('../model/plannerfunc.php');
require_once('../model/emaildb.php');
	if(isset($_POST['submit'])){
		$plan=$_POST['planner'];
		$da=$_POST['date'];
		$id = $_SESSION['id'];
		if($_POST['planner']==="" || $_POST['date']==="")
		{
			echo"You enter nothing";
		}
		else{
		
		$edit = array('plan' => $plan,'id' => $id,'date' => $da);
		if(editplanner($edit))
			{
				
				header('location: ../view/plannerdata.php');
			}
			else{
				echo"Fail to insert";
			}
			
     }
	}
?>
