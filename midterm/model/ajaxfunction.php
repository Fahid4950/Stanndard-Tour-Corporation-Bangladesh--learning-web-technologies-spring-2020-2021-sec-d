<?php

require_once('../model/emaildb.php');
	function review()
	{
		$con = gett();
		$sql = "SELECT * FROM submit WHERE submit LIKE '%{$_SESSION["review"]}%' LIMIT 12";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
	function plan()
	{
		$con = gett();
		$sql = "SELECT * FROM info WHERE event LIKE '%{$_SESSION["plan"]}%' LIMIT 12";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
	function cus()
	{
		$con = gett();
		$sql = "SELECT * FROM info1 WHERE name LIKE '%{$_SESSION["cus"]}%' LIMIT 12";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
	function event()
	{
		$con = gett();
		$sql = "SELECT * FROM events WHERE eventname LIKE '%{$_SESSION["event"]}%' LIMIT 12";
		if(mysqli_query($con, $sql))
		{
			return mysqli_query($con, $sql);
		}
		else
		{
			return false;
		}
	}
?>