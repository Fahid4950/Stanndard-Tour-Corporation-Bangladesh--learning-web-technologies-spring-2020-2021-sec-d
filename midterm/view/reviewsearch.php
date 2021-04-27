<!DOCTYPE html>
<html>
<head>
  <title>ajax</title>
   <style>
body {
  background-color: lightblue;
}
h3 {
  color: green;
}
tr {
  color: black;
}
h3 {
  position: relative;
  left: 300px;
  top: px;
}
.button
{
	background-color: lightblue;
    font-size: 13px;
    color:green;
}
a:link {
  color: red;
  text-decoration: none;
}
</style> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>
<?php session_start();
if($_SESSION["valid"] != true){
    header("location: home.html");
}
?>
<table border="1" width="100%" cellspacing="0">
<tr height="100px">

<td align="left">
   <h2>Search for review</h2>
   <input type="text" name="review" id="review" autocomplete="off">
   <div id="results"></div>
   <td align="right">
<?php include'high.php';?>

</td>
<script type="text/javascript">
  $(document).ready(function(){
    $("#review").keyup(function(){
      var query = $(this).val();
      if (query != "") {
        $.ajax({
                url: 'reviewsearchdata.php',
                method: 'POST',
                data: {query:query},
                success: function(data)
                {
                  $('#results').html(data);
                }
        });
      } 
    });
  });
</script>
</body>
</html>