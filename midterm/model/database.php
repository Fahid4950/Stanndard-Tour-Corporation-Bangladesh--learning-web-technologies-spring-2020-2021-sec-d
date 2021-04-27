<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "tour";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(!mysqli_select_db($con, 'tour')) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	
?>