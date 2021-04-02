<?php
	if(isset($_POST['submit']))
	{
		echo"bal";
				$password=$_POST['np'];
				$cp=$_POST['npp'];
					if($password==$cp)
					{
						$_COOKIE['password']=$password;
						echo"Password changed!!";
					}
					else{
						echo"Password mismatch!!";
					}
	}
?>
