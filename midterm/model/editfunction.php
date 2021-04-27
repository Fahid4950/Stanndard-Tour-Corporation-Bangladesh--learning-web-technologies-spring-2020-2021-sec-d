<?php
function insertreg($pre)
	{
		$con = gett();
		$sql = "insert into validation values ('{$pre['name']}','{$pre['un']}','{$pre['password']}','{$pre['email']}','{$pre['gender']}','{$pre['dob']}')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function editemail($editem)
	{
		$con = gett();
		$sql = "UPDATE users SET email='{$editem['email']}' WHERE name='{$editem['name']}'";
		
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function editename($editna)
	{
		$con = gett();
		$sql = "UPDATE users SET name='{$editna['name']}' WHERE email='{$editna['email']}'";
		
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function editepass($editpa)
	{
		$con = gett();
		$sql = "UPDATE users SET password='{$editpa['password']}' WHERE name='{$editpa['name']}'";
		
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