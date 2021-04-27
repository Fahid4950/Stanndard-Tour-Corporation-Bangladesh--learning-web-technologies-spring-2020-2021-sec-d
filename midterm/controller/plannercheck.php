<?php            
require_once('../model/plannerfunc.php');                      
	if(isset($_POST['submit'])){
require_once('../model/emaildb.php');
		$plan=$_POST['planner'];
		$da=$_POST['date'];
		if($_POST['planner']==="" || $_POST['date']==="")
		{
			echo"You enter nothing";
		}
		else{
		$sql = "INSERT INTO info (event,date) VALUES ('$plan','$da')";
		$pp = array('plan' => $plan,'date' => $da);
			if(insertplanner($pp))
			{
				echo"inse";
				header('location: ../view/plannerdata.php');
			}
			else{
				echo"Fail to insert";
			}
	 
     }
	}
?>

