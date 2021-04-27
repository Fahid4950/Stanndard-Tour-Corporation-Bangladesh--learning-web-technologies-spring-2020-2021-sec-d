<?php
session_start();

require_once('../model/ajaxfunction.php');
  if (isset($_POST['query'])) {
    $search_query = $_POST['query'];
    $_SESSION["event"] = $search_query;
    $result = event();
  if (mysqli_num_rows($result) > 0) {
   while ($country_row = mysqli_fetch_array($result)) {
    echo $country_row['eventname']."";
	echo $country_row['duration']."<br/>";
	echo $country_row['tourarea']."<br/>";
  }
} else {
  echo "not found";
}
}
?>