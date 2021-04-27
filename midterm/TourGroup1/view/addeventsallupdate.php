
<?php

require 'dashbord_part/header.php';


 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Add Events</h5>
    <div class="card-body">

      <form class="" action="/../midterm/TourGroup/controller/addevents-post.php" method="post" onsubmit="return validationevent()" auto_complete="off">

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











<?php
require 'dashbord_part/footer.php';
 ?>
