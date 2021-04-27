


<?php

require 'dashbord_part/header.php';


 ?>




	<title>Transport</title>
</head>
<body>

	<form method="" action="">
		<fieldset>
		<legend><b>Select Transport</b></legend>
		<i> <img align="right" src="a23.jpg"; width="500" height="300px" ; border="1px" >
		<form method="post" action="/midterm/TourGroup/controller/transport-post.php">


			<table>

				<tr>
					<td>
              <h4>Transport:  </h4>
          </td>
          <br>
					<td>
						<select name="Language">
							<option value="Hanif"> Hanif</option>
							<option value="Shyamoli"> Shyamoli</option>
							<option value="SR Travels"> SR Travels</option>
							<option value="Desh Travels"> Desh Travels</option>
							<option value="Royal"> Royal</option>

							<option value="Other"> Others</option>

						</select>
					</td>
				</tr>



					<td>
              <br><br>

					 <a class="float-right btn btn-success" href="transport-post.php"> Confirm</a>

					</td>

			</table>

		</fieldset>

	</form>
</body>


<?php
require 'dashbord_part/footer.php';
 ?>
