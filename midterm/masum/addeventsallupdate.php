<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Add Events</h5>
    <div class="card-body">

      <form class="" action="addevents-post.php" method="post" onsubmit="return validationevent()" auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Event Name</label>
          <input type="text"name="ename"class="form-control" id="ename" placeholder="Event Name" >

        <span id="enameok" class="text-danger font-weight-bold"> </span>
        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Duration</label>
          <input type="text"name="eduration"class="form-control" id="eduration"placeholder="Enter Duration" >

          <span id="edurationok" class="text-danger font-weight-bold"> </span>
          </div>



        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Tour Area</label>
          <input type="text"name="earea"class="form-control"id="earea"placeholder="Enter Tour Area" >


          <span id="eareaok" class="text-danger font-weight-bold"> </span>
          </div>



        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Food Package</label>
          <input type="text"name="epackage"class="form-control" id="epackage"placeholder="Enter Package" >


          <span id="epackageok" class="text-danger font-weight-bold"> </span>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text"name="eprice"class="form-control" id="eprice"placeholder="Enter Price" >


              <span id="epriceok" class="text-danger font-weight-bold"> </span>
              </div>

</div>
<!--
        <br>


 -->






</div>





      <button type="submit" class="btn btn-primary">Submit</button>

      </form>

  </div>

          </div>

        </div>

      </div>

      </div>
      </div>
    </section>



<script>

function validationevent()
{
var ename = document.getElementById('ename').value;
var eduration = document.getElementById('eduration').value;
var earea = document.getElementById('earea').value;
var epackage = document.getElementById('epackage').value;
var eprice = document.getElementById('eprice').value;
if(ename == ""){
  document.getElementById('enameok').innerHTML =" ** Please fill the Event name field";
  return false;
}
if(eduration == ""){
  document.getElementById('edurationok').innerHTML =" ** Please fill the Event Duration field";
  return false;
}
if(earea == ""){
  document.getElementById('eareaok').innerHTML =" ** Please fill the Event Area field";
  return false;
}
if(epackage == ""){
  document.getElementById('epackageok').innerHTML =" ** Please fill the Event Package field";
  return false;
}
if(eprice == ""){
  document.getElementById('epriceok').innerHTML =" ** Please fill the Event Price field";
  return false;
}
}

</script>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script >
  function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
}

  </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
