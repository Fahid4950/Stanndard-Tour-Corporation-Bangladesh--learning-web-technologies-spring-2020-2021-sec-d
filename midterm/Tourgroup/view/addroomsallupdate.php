
<?php

require 'dashbord_part/header.php';


 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Add Rooms</h5>
    <div class="card-body">

      <form class="" action="/midterm/TourGroup/controller/addrooms-post.php" method="post" onsubmit="return validationroom()"auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Room Name</label>
          <input type="text"name="rname"class="form-control" id="rname"placeholder="Event Name" >

            <span id="rnameok" class="text-danger font-weight-bold"> </span>

        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Room Quality</label>
          <input type="text"name="rquality"class="form-control" id="rquality"placeholder="Enter Duration" >
          <span id="rqualityok" class="text-danger font-weight-bold"> </span>

        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Room Type</label>
          <input type="text"name="rtype"class="form-control" id="rtype" placeholder="Enter Tour Area" >

              <span id="rtypeok" class="text-danger font-weight-bold"> </span>
        </div>





      <?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-success" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>

    <?php } ?>
</div>
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

function validationroom()
{
  var rname = document.getElementById('rname').value;
  var rquality = document.getElementById('rquality').value;
  var rtype = document.getElementById('rtype').value;


  if(rname == ""){
    document.getElementById('rnameok').innerHTML =" ** Please fill the room name field";
    return false;
  }
  if(rquality == ""){
    document.getElementById('rqualityok').innerHTML =" ** Please fill the Room Quality field";
    return false;
  }
  if(rtype == ""){
    document.getElementById('rtypeok').innerHTML =" ** Please fill the Room Type field";
    return false;
  }
}

</script>





<?php
require 'dashbord_part/footer.php';
 ?>
