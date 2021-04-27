<?php

require_once('../model/customerdb.php');
$sql = "SELECT id, name,phone FROM info";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
	  echo "<tr>

					 <td> <a href='deletecus.php?id={$row["id"]}'> Delete </a> </td>
				</tr>";
    echo "  " . $row["id"]. "   " . $row["name"]. "   " .$row["phone"]."<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($con);
?>