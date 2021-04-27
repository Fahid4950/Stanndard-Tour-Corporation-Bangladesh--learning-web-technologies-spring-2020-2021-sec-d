<?php
function insertplanner($pro)
	{
		$con = gett();
		$sql = "INSERT INTO info (event,date) VALUES ('{$pro['plan']}','{$pro['date']}')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function editplanner($editpl)
	{
		$con = gett();
		$sql = "UPDATE info SET event='{$editpl['plan']}',date='{$editpl['date']}' WHERE ID='{$editpl['id']}'";
		
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function plannerview()
	{
		$con = gett();
		$sql = "SELECT id, event, date FROM info";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
	function deleteplanner($de)
	{
		$con = gett();
		$sql = "DELETE FROM info WHERE ID='{$de['id']}'";
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>