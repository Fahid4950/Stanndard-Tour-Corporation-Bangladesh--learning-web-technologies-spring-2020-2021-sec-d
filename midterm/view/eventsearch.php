<!DOCTYPE html>
<html>
<head>
  <title>jQuery autocomplete</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body>
<table border="1" width="100%" cellspacing="0">
<tr height="100px">

<td align="left">
   <h2>Search for event</h2>
   <input type="text" name="event" id="event" autocomplete="off">
   <div id="results"></div>
   </td>
   <td align="right">
<?php include'high.php';?>

</td>
   </tr>
<script type="text/javascript">

  $(document).ready(function(){
    $("#event").keyup(function(){
      var query = $(this).val();
      if (query != "") {
        $.ajax({
                url: 'eventsearchdata.php',
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