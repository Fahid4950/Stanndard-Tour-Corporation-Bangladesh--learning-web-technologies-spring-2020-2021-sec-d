<?php
	if(isset($_POST['submit'])){
		if($_POST['tour']=="")
		{
			echo"Empty";
		}
		else{
		echo"your event is  ";
		echo $_POST['tour'];
		}
	}
?>