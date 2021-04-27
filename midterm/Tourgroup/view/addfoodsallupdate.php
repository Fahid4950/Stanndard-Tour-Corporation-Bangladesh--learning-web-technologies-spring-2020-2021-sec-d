
<?php

require 'dashbord_part/header.php';


 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Add Food Items</h5>
    <div class="card-body">

      <form class="" action="/midterm/TourGroup/controller/addfoods-post.php" method="post" onsubmit="return validationfood()" auto_complete="off">

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





<?php
require 'dashbord_part/footer.php';
 ?>
