<?php
	session_start();
	if(isset($_POST['submit'])){
require_once('../model/database.php');
$user=$_POST['user'];
		if($user=="guide"){
		if($_POST['name'] == "" || $_POST['password'] == ""){
			echo "Null submission";
		}else{
			$nah = false;
			$sql = "SELECT name,username,password,email,gender,day,month,year,type FROM users";
			$result = mysqli_query($con , $sql);
			while($row = mysqli_fetch_assoc($result)){
				$name = $row['name'];
				$password = $row['password'];
				$un = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$gender = $row['gender'];
				$day = $row['day'];
				$month = $row['month'];
				$year = $row['year'];
				$status = $row['type'];
			if($un  == $_POST['name'] && $password == $_POST['password'] && $status==$user){
			setcookie('name',$name,time()+3600,'/');
			setcookie('username',$un,time()+3600,'/');
			setcookie('pass',$password,time()+3600,'/');
			setcookie('email',$email,time()+3600,'/');
			setcookie('gender',$gender,time()+3600,'/');
			setcookie('day',$day,time()+3600,'/');
			setcookie('month',$month,time()+3600,'/');
			setcookie('year',$year,time()+3600,'/');
		$_SESSION["valid"] = true;
		$nah=true;
				header('location:../view/index.php');
			}
			}
			if($nah==false){
				echo "invalid user...";
			}
		}
		}
		else if($user=="manager"){

$nah = false;
			$sql = "SELECT name,username,password,email,gender,day,month,year,type FROM users";
			$result = mysqli_query($con , $sql);
			while($row = mysqli_fetch_assoc($result)){
				$name = $row['name'];
				$password = $row['password'];
				$un = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$gender = $row['gender'];
				$day = $row['day'];
				$month = $row['month'];
				$year = $row['year'];
				$status = $row['type'];
			if($un  == $_POST['name'] && $password == $_POST['password'] && $status==$user){
			setcookie('name',$name,time()+3600,'/');
			setcookie('username',$un,time()+3600,'/');
			setcookie('pass',$password,time()+3600,'/');
			setcookie('email',$email,time()+3600,'/');
			setcookie('gender',$gender,time()+3600,'/');
			setcookie('day',$day,time()+3600,'/');
			setcookie('month',$month,time()+3600,'/');
			setcookie('year',$year,time()+3600,'/');
		$_SESSION["valid"] = true;
		$nah=true;
				header('location:../masum/inter.php');
			}
			}
			if($nah==false){
				echo "invalid user...";
			}
		}

///////////////
		else if($user=="admin"){

$nah = false;
			$sql = "SELECT name,username,password,email,gender,day,month,year,type FROM users";
			$result = mysqli_query($con , $sql);
			while($row = mysqli_fetch_assoc($result)){
				$name = $row['name'];
				$password = $row['password'];
				$un = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$gender = $row['gender'];
				$day = $row['day'];
				$month = $row['month'];
				$year = $row['year'];
				$status = $row['type'];
			if($un  == $_POST['name'] && $password == $_POST['password'] && $status==$user){
			setcookie('name',$name,time()+3600,'/');
			setcookie('username',$un,time()+3600,'/');
			setcookie('pass',$password,time()+3600,'/');
			setcookie('email',$email,time()+3600,'/');
			setcookie('gender',$gender,time()+3600,'/');
			setcookie('day',$day,time()+3600,'/');
			setcookie('month',$month,time()+3600,'/');
			setcookie('year',$year,time()+3600,'/');
		$_SESSION["valid"] = true;
		$nah=true;
		$_SESSION['login_Success'] = "Congrats , Login Enter.!!!";
    $_SESSION['name'] = $row['name'];
       $_SESSION['email'] = $row['email'];
				header('location:/../midterm/TourGroup/view/dashbord.php');
			}
			}
			if($nah==false){
				echo "invalid user...";
			}
		}


		////////////////////////////
		else if($user=="customer"){

$nah = false;
			$sql = "SELECT name,username,password,email,gender,day,month,year,type FROM users";
			$result = mysqli_query($con , $sql);
			while($row = mysqli_fetch_assoc($result)){
				$name = $row['name'];
				$password = $row['password'];
				$un = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$gender = $row['gender'];
				$day = $row['day'];
				$month = $row['month'];
				$year = $row['year'];
				$status = $row['type'];
			if($un  == $_POST['name'] && $password == $_POST['password'] && $status==$user){
		$_SESSION["valid"] = true;
		$nah=true;
				header('location:../project/inter.php');
			}
			}
			if($nah==false){
				echo "invalid user...";
			}
		}
	}
?>
