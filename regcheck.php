<?php
		
	if(isset($_POST['submit']))
	{
		include_once 'database.php';
				$name=$_POST['name'];
				$email=$_POST['email'];
				$gender=$_POST['gender'];
				$password=$_POST['password'];
				$cp=$_POST['cp'];
				$gender=$_POST['gender'];
				$dob=$_POST['dob'];
				
				if($name == "" || $email == "" || $password == "" || $gender == "" || $dob == ""){
					
					header('location: registration.html');
					echo "invalid information...please try again!";
				}
				else if($_POST['cp']!=$password){
			echo "password mitchmatch...please try again!";
				}
				else{
					if($password==$cp)
					{
			
				$sql = "INSERT INTO validation (name,email,password) VALUES ('$name','$email','$password')";
				if (!mysqli_query($con, $sql)) {
        echo "New record has nit been added successfully !";
     } else {
        echo "inserted";
		
     }
     mysqli_close($con);
			//	header('location: home.html');
					}
					
			}
	}
?>