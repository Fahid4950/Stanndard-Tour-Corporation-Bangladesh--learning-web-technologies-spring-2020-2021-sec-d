<?php
		require_once('../model/emaildb.php');
		require_once('../model/reportfunction.php');
		$id=$_GET['id'];
		$de = array('id' => $id);
		if(delet($de))
			{
				header('location: ../view/reviewdata.php');
			}
			else{
				echo"Fail to delete";
			}
?>