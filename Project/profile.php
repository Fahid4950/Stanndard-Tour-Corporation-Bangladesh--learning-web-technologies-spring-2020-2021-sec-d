<html>
<head>
 <title>Name Input</title>
</head>
<body>
<table border="1" width="100%" cellspacing="0">

<tr height="100px">
<td align="left">

<td align="right">
logged in <a href="profile.php"><?php print_r($_COOKIE['name'])?> | </a>
<a href="logout.php">log_out</a>
</td>
</tr>

<tr height="200px">
<td width="33%" >
<li>Account</li>
<hr width="90%">
<ul>
<li><a href="inter.php">Home </a><br>
<li><a href="logout.php">log_out</a><br>
</ul>
</td>
<td>
				<h3>
						Name: <?php print_r($_COOKIE['name']) ?><br>
						EMAIL: <?php print_r($_COOKIE['email']) ?><br>
            

				</h3>
			</td>
</tr>

</form>
</table>
</body>
</html>
