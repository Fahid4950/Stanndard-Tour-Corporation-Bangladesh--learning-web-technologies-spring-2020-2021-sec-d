<?php
	function insertreview($pro)
	{
		$con = gett();
		$sql = "INSERT INTO submit (submit) VALUES ('{$pro['re']}')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function view()
	{
		$con = gett();
		$sql = "SELECT id, submit FROM submit";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
	function editview($edit)
	{
		$con = gett();
		$sql = "UPDATE submit SET submit='{$edit['plan']}' WHERE id='{$edit['id']}'";
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function delet($de)
	{
		$con = gett();
		$sql = "DELETE FROM submit WHERE ID='{$de['id']}'";
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