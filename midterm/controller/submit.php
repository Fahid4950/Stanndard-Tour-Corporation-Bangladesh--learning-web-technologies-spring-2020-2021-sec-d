<?php
	require_once('../model/reportfunction.php');
	if(isset($_POST['submit'])){
require_once('../model/emaildb.php');
		if($_POST['report']=="")
		{
			echo"You enter nothing";
		}
		else{
			$re=$_POST['report'];
			$prp = array('re' => $re);
			if(insertreview($prp))
			{
				header('location: ../view/reviewdata.php');
			}
			else{
				echo"Fail to insert";
			}
     }
	}
?>