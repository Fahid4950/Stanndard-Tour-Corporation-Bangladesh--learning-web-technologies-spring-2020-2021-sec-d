<?php
function eve()
	{
		$con = gett();
		$sql = "SELECT id, eventname,duration,tourarea FROM events";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
	function deleteevent($de)
	{
		$con = gett();
		$sql = "DELETE FROM events WHERE ID='{$de['id']}'";
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