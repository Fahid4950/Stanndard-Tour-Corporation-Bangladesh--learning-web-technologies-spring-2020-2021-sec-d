<?php
		
		$id=$_GET['id'];
	 require_once('../model/emaildb.php');
		require_once('../model/eventfunc.php');
		$id=$_GET['id'];
		$delev = array('id' => $id);
		if(deleteevent($delev))
			{
				header('location: ../view/events.php');
			}
			else{
				echo"Fail to delete";
			}
?>