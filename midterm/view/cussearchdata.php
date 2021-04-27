<?php
session_start();

require_once('../model/ajaxfunction.php');
  if (isset($_POST['query'])) {
    $search_query = $_POST['query'];
    $_SESSION["cus"] = $search_query;
    $result = cus();
  if (mysqli_num_rows($result) > 0) {
   while ($country_row = mysqli_fetch_array($result)) {
	echo "<tr>
	  <td>{$country_row['Name']}</td>
	   <td>{$country_row['phone']}</td>
				</tr>";
  }
} else {
  echo "not found";
}
}
?>