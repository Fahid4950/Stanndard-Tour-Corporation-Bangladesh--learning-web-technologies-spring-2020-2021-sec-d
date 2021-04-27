<html>
<head>
 <title>Name Input</title>
</head> 
<body>
 <style>
body {
  background-color: lightblue;
}
h3 {
  color: black;
}
a:link {
  color: red;
}
h3 {
  position: relative;
  left: 300px;
  top: px;
}
</style>  
<?php session_start();
if($_SESSION["valid"] != true){
    header("location: home.html");
}
?>
<table border="1" width="100%" cellspacing="0">

<tr height="100px">
<td align="left">
      
<td align="right">

<?php include'high.php';?>
</td>
</tr>

<tr height="200px">
<td width="33%" >
<li>Account</li>
<hr width="90%">
<?php include'header.php';?>
</td>
<td>
				<h3>
						Name: <?php print_r($_COOKIE['name']) ?><br><br><br>
						User Name: <?php print_r($_COOKIE['username']) ?><br><br><br>
						EMAIL: <?php print_r($_COOKIE['email']) ?><br><br><br>
						GENDER: <?php print_r($_COOKIE['gender']) ?><br><br><br>
						DATE OF BIRTH: <?php print_r(($_COOKIE['day'])) ?>/<?php print_r(($_COOKIE['month'])) ?>/<?php print_r(($_COOKIE['year'])) ?>
				</h3> 
			</td>
</tr>

</form>
</table>   
</body>   
</html>