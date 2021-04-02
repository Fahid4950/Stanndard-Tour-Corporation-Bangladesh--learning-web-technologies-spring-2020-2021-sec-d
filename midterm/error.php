<?php
	echo"Password does not contain desire character\n";
	if(isset($_POST['submit']))
	{
		$w=0;
		if(strlen($_POST['name'])<2)
		{
			echo "username should contain 2 or more character\r\n";
		}
		else if(strlen($_POST['password'])<8)
		{
			$w=1;
			echo "password should contain 8 or more character";
		}
		
			$no=0;
			if($w==0){
			for($i=0;$i<strlen($_POST['password']);$i++)
			{
				if($_POST['password'][$i]=='@' || $_POST['password'][$i]=='#' || $_POST['password'][$i]=='$' || $_POST['password'][$i]=='%')
				{
					$no=1;
					break;
				}
			}
			if($no==0)
			{
				header('location: logincheck.php');
				echo"Password does not contain desire character\n";
			}
			else{
				
				header('location: home.html');
				
			}
			}
	}
?>
