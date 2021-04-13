<html>
<head>
 <title>Name Input</title>
 <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

  <!-- <marquee scrollamount="15">
		<div id="d2">
			<div id="d4">

			</div>
		</div>
	</marquee> -->

  <div id="d3" class="c1">
    <table border="1" width="100%" cellspacing="0">

    <tr height="100px" style="background-color:	808080">
      <td align="left">
      <img src="view profile.jpg" alt="Girl in a jacket" width="100%" height="120"> </td>
    <td align="center">
          <h1>  <i>Standard Tour Corporation Bangladesh</h1></i>

    <td align="right">
    logged in <a href="profile.php"><?php print_r($_COOKIE['name'])?> | </a>
    <a href="logout.php">log_out</a>
    </td>
    </tr>

    <tr height="500px">
    <td width="18%" >

    <li>Account</li>
    <hr width="100%">
    <ul>
    <li><a href="inter.php">Home </a><br>
    <li><a href="logout.php">log_out</a><br>
    </ul>
    </td>
    <td width="60%">

    				<h3>
    						Name: <?php print_r($_COOKIE['name']) ?><br>
    						EMAIL: <?php print_r($_COOKIE['email']) ?><br>


    				</h3>
    			</td>
    </tr>
	</div>




</form>
</table>
</body>
</html>
