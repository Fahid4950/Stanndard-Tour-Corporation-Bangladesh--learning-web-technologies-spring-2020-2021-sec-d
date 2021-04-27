<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "report";  
      
    

	function getConnection()
	{
		global $host, $user, $password, $db_name; 
		$con = mysqli_connect($host, $user, $password, $db_name);
		if(!mysqli_select_db($con, 'report')) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
		else{
		return $con;
		}
	} 
	
?>