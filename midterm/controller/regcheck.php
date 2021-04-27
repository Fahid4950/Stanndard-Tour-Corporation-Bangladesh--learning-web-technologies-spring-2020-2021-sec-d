<?php
	if(isset($_POST['submit']))
	{
require_once('../model/database.php');
				$name=$_POST['name'];
				$un=$_POST['un'];
				$email=$_POST['email'];
				$gender=$_POST['gender'];
				$password=$_POST['password'];
				$cp=$_POST['cp'];
				$gender=$_POST['gender'];
				$day=$_POST['day'];
				$month=$_POST['month'];
				$year=$_POST['year'];
				$user=$_POST['user'];
				
				if($name == "" || $email == "" || $password == "" || $gender == "" || $un===""){
			echo "invalid information...please try again!";
				}
				else if(strlen($name)<4)
				{
					echo "You have to have atleast 4 digit of Name";
				}
				else if($_POST['cp']!=$password){
			echo "password mitchmatch...please try again!";
				}
				else{
					if($password==$cp)
					{
						
				$sql = "INSERT INTO users (name,username,email,password,gender,day,month,year,type) VALUES ('$name','$un','$email','$password','$gender','$day','$month','$year','$user')";
				
				if (!mysqli_query($con, $sql)) {
        echo "New record has not been added successfully !";
     } else {
        echo "inserted";
		header('location: ../view/home.html');
     }
     mysqli_close($con);
					}
					else{
						echo"Password mismatch!!";
					}
			}
	}
?>