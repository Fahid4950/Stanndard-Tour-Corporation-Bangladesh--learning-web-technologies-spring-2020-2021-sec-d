<?php
	if(isset($_POST['submit'])){
		
		$userFile = fopen("userValidationInfo.json", "r");
		$userData = fread($userFile, filesize('userValidationInfo.json'));
		$userInfo = json_decode($userData, true);	
		$name 	= $userInfo['user'];
		$password 	= $userInfo['pass'];
		$email 	= $userInfo['email'];
		$gender = $userInfo['gender'];
		$dob=$userInfo['dob'];
		setcookie('name',$name,time()+3600,'/');
		setcookie('pass',$password,time()+3600,'/');
		setcookie('email',$email,time()+3600,'/');
		setcookie('gender',$gender,time()+3600,'/');
		setcookie('dob',$dob,time()+3600,'/');
		if($name == "" || $password == ""){
			echo "Null submission";
		}else{
			if($name == $_POST['name'] && $password == $_POST['password']){
				setcookie('status', 'true', time()+5000, '/');
				header('location: index.php');
	
			}else{
				echo "invalid user...";
			}
		}
	}
?>