<?php

	

	$name = $_REQUEST['name'];

	$conn = mysqli_connect('localhost', 'root', '', 'tour');
	$sql = "select * from users where name like '{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						// <td>ID</td>
						<td>name</td>
						<td>Email</td>
						<td>Type</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							// <td>{$row['id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['email']}</td>
						    
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>
