<?php
session_start();
require_once('../model/ajaxfunction.php');
  if (isset($_POST['query'])) {
    $search_query = $_POST['query'];
    $_SESSION["review"] = $search_query;
    $result = review();
  if (mysqli_num_rows($result) > 0) {
   while ($country_row = mysqli_fetch_array($result)) {
	echo "<tr>
	  <td>{$country_row['ID']}</td>
	   <td>{$country_row['submit']}</td>
				</tr>";
  }
} else {
  echo "submission not found";
}
}
?>