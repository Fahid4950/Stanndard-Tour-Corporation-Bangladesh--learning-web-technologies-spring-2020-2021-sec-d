<?php

	//sleep(3);



	$name = $_REQUEST['name'];

	$conn = mysqli_connect('localhost', 'root', '', 'tour');
	$sql = "select * from users where username like '%{$name}%'";

	$result = mysqli_query($conn, $sql);



	$response = "<table border=1>
					<tr>
					<hr>

						<td>ID</td>
					    <td>name</td>
						<td>Username</td>
						<td>Email</td>
						
					</tr>";


	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	     
		                    <tr>
                         <hr>
							<td>{$row['id']}</td>
		                     <td>{$row['name']}</td>
							<td>{$row['username']}</td>
							<td>{$row['email']}</td>
							
						</tr>";
	}


	$response .= "</table>";

	echo $response;
?>
