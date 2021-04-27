<?php
		require_once('../model/emaildb.php');
require_once('../model/plannerfunc.php');
		$id=$_GET['id'];
		$dee = array('id' => $id);
		if(deleteplanner($dee))
			{
				header('location: ../view/plannerdata.php');
			}
			else{
				echo"Fail to delete";
			}
	 mysqli_close($con);
?>