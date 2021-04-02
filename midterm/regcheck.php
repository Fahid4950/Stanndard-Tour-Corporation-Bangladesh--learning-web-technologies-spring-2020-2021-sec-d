<?php
	if(isset($_POST['submit']))
	{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$gender=$_POST['gender'];
				$password=$_POST['password'];
				$cp=$_POST['cp'];
				$gender=$_POST['gender'];
				$dob=$_POST['dob'];
				if($name == "" || $email == "" || $password == "" || $gender == "" || $dob == ""){
			echo "invalid information...please try again!";
				}
				else if($_POST['cp']!=$password){
			echo "password mitchmatch...please try again!";
				}
				else{
					if($password==$cp)
					{
						$userValidationInfo = [
										 'user' => $name,
										 'pass' => $password,
										 'rPass' => $cp,
										 'email' => $email,
										 'gender'=>$gender,
										 'dob'=>$dob,
				      				  ];
				$allData = json_encode($userValidationInfo);
				$userData = fopen("userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
				//header('location: ../view/login.html');
						header('location: home.html');
					}
					else{
						echo"Password mismatch!!";
					}
			}
	}
?>