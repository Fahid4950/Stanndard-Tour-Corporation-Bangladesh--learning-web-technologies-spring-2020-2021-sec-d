<html>
<head>
 <title>Name Input</title>
</head> 
<body>  
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
						Name: <?php print_r($_COOKIE['name']) ?><br>
						EMAIL: <?php print_r($_COOKIE['email']) ?><br>
						GENDER: <?php print_r($_COOKIE['gender']) ?><br>
						DATE OF BIRTH: <?php print_r($_COOKIE['dob']) ?><br>
				</h3> 
			</td>
</tr>
<tr height="50px">
<td colspan="1" >
<td><center>Copyright &copy 2017</center></td>
</tr> 
</form>
</table>   
</body>   
</html>