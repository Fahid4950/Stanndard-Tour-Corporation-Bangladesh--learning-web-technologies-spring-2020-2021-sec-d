
<?php

require '../dashbord_part/header.php';


 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Add Rooms</h5>
    <div class="card-body">

      <form class="" action="#" method="post" auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Room Name</label>
          <input type="text"name="rname"class="form-control" placeholder="Event Name" >

        </div>

        <br>

        <div class="form-group">
          <label for="exampleInputEmail1">Room Quality</label>
          <input type="text"name="rquality"class="form-control" placeholder="Enter Duration" >


        </div>


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
  let name = "Al Amin";

  console.log(name);
</script>
<?php
require '../dashbord_part/footer.php';
 ?>
