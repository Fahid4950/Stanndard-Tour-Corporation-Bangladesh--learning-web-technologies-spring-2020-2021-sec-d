<?php
function cus()
	{
		$con = gett();
		$sql = "SELECT id, name,phone FROM info1";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
	function deletecusinfo($de)
	{
		$con = gett();
		$sql = "DELETE FROM info1 WHERE ID='{$de['id']}'";
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