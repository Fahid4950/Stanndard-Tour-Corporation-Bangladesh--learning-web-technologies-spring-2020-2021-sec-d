

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
    <h5 class="card-header bg-success text-white">Add Food Items</h5>
    <div class="card-body">

      <form class="" action="addfoods-post.php" method="post" onsubmit="return validationfood()" auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Food Name</label>
          <input type="text"name="fname"class="form-control"id="fname" placeholder="Food Name" >

            <span id="fonameok" class="text-danger font-weight-bold"> </span>

        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Food Items</label>
          <input type="text" name="fitem"class="form-control" id="fitem"placeholder="Enter Food items" >

            <span id="foitemok" class="text-danger font-weight-bold"> </span>

        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Food Type</label>
          <input type="text"id="ftype"name="ftype"class="form-control" placeholder="Enter Food Type" >

            <span id="fotypeok" class="text-danger font-weight-bold"> </span>

        </div>





</div>
</div>

      <button type="submit" class="btn btn-primary">Submit</button>

      </form>

  </div>

          </div>

        </div>


    </section>


<script>

function validationfood()
{
  var fname = document.getElementById('fname').value;
  var fitem = document.getElementById('fitem').value;
  var ftype = document.getElementById('ftype').value;


  if(fname == ""){
    document.getElementById('fonameok').innerHTML =" ** Please fill the food name field";
    return false;
  }
  if(fitem == ""){
    document.getElementById('foitemok').innerHTML =" ** Please fill the Food Item field";
    return false;
  }
  if(ftype == ""){
    document.getElementById('fotypeok').innerHTML =" ** Please fill the Food Type field";
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
