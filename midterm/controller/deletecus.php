<?php
		
		$id=$_GET['id'];
	 require_once('../model/emaildb.php');
		require_once('../model/cusfunction.php');
		$id=$_GET['id'];
		$delcus = array('id' => $id);
		if(deletecusinfo($delcus))
			{
				header('location: ../view/customer.php');
			}
			else{
				echo"Fail to delete";
			}
?>