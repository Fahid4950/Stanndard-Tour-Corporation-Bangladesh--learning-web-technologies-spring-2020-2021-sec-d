
<?php

require '../dashbord_part/header.php';


 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">
    <h5 class="card-header bg-success text-white">Registration Form</h5>
    <div class="card-body">

      <form class="" action="register-post.php" method="post" auto_complete="off">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text"name="fname"class="form-control" placeholder="Enter Your Name" >
          <?php
          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>

          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <span><?php if(isset($username_error['fusfusername']))
            { echo $username_error['fusername'];
            } ?></span>
            <input type="text" name="fusername"class="form-control" placeholder="Enter Your UserName" >

            <?php
            if(isset($_GET['u_err'])){ ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['u_err']; ?>
  </div>
                <?php
                }

                 ?>



            </div>


      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text"name="email" class="form-control" placeholder="Enter Your Email Address"  >

        <?php
        if(isset($_GET['e_err'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['e_err']; ?>
</div>
            <?php
            }

             ?>

             <?php
             if(isset($_GET['email_err'])){ ?>
             <div class="alert alert-danger" role="alert">
                 <?php echo $_GET['email_err']; ?>
           </div>
                 <?php
                 }

                  ?>


      </div>


      <div class="form-group position-relative">
        <label for="exampleInputPassword1" class="form-label"> Password</label>
        <input type="password" id="myInput" name="password" class="form-control" placeholder="Enter Your Password">

        <button  class="btn btn-info" type="button"  onclick="myFunction()">Show<i class="fa fa-eye"></i></button>

        <?php
        if(isset($_GET['p_err'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['p_err']; ?>
</div>
            <?php
            }

             ?>

             <?php
             if(isset($_GET['rp_err'])){ ?>
             <div class="alert alert-danger" role="alert">
                 <?php echo $_GET['rp_err']; ?>
     </div>
                 <?php
                 }

                  ?>
                  <?php
                  if(isset($_GET['rlop_err'])){ ?>
                  <div class="alert alert-danger" role="alert">
                      <?php echo $_GET['rlop_err']; ?>
          </div>
                      <?php
                      }

                       ?>



                  <?php
                  if(isset($_GET['rep_err'])){ ?>
                  <div class="alert alert-danger" role="alert">
                      <?php echo $_GET['rep_err']; ?>
          </div>
                      <?php
                      }

                       ?>

                       <?php
                       if(isset($_GET['rup_err'])){ ?>
                       <div class="alert alert-danger" role="alert">
                           <?php echo $_GET['rup_err']; ?>
               </div>
                           <?php
                           }

                            ?>

                            <?php
                            if(isset($_GET['rlp_err'])){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['rlp_err']; ?>
                    </div>
                                <?php
                                }

                                 ?>

      </div>





      <div class="form-group">
  <label for="exampleInputPassword1" class="form-label"> Re Password</label>
  <input type="password"name="repassword" class="form-control" placeholder="Enter Your Password Again"  >

  <?php
  if(isset($_GET['re_err'])){ ?>
  <div class="alert alert-danger" role="alert">
      <?php echo $_GET['re_err']; ?>
</div>
      <?php
      }

       ?>

       <?php
       if(isset($_GET['ree_err'])){ ?>
       <div class="alert alert-danger" role="alert">
           <?php echo $_GET['ree_err']; ?>
</div>
           <?php
           }

            ?>
</div>






<br>
      <div class="form-group">
          <label for="exampleInputEmail1">Gender</label>
            &nbsp; &nbsp; &nbsp;
          <label for="male">
          <input type="radio" name="gender" id='male'value='male'  > Male
             </label>
            &nbsp; &nbsp; &nbsp;
          <label for="female">
              <input type="radio" name="gender"id='female' value='female'  > Female
          </label>
          &nbsp; &nbsp; &nbsp;
        <label for="other">
            <input type="radio" name="gender"id='other' value='other'  > Other
        </label>
      </div>
      <br>







<!-- <div class="form-group row">
<label for="example-date-input" class="col-2 col-form-label">Date Of Birth</label>
<div class="col-10">
<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
</div> -->

<div class="form-group row">
<label for="example-date-input" class="col-2 col-form-label">Date Of Birth</label>
<div class="col-10">
  <select size="1" name="day">
<option value="01" label="1st">1st</option>
<option value="02" label="2nd">2nd</option>
<option value="03" label="3rd">3rd</option>
<option value="04" label="4th">4th</option>
<option value="05" label="5th">5th</option>
<option value="06" label="6th">6th</option>
<option value="07" label="7th">7th</option>
<option value="08" label="8th">8th</option>
<option value="09" label="9th">9th</option>
<option value="10" label="10th">10th</option>
<option value="11" label="11th">11th</option>
<option value="12" label="12th">12th</option>
<option value="13" label="13th">13th</option>
<option value="14" label="14th">14th</option>
<option value="15" label="15th">15th</option>
<option value="16" label="16th">16th</option>
<option value="17" label="17th">17th</option>
<option value="18" label="18th">18th</option>
<option value="19" label="19th">19th</option>
<option value="20" label="20th">20th</option>
<option value="21" label="21th">21th</option>
<option value="22" label="22th">22th</option>
<option value="23" label="23th">23th</option>
<option value="24" label="24th">24th</option>
<option value="25" label="25th">25th</option>
<option value="26" label="26th">26th</option>
<option value="27" label="27th">27th</option>
<option value="28" label="28th">28th</option>
<option value="29" label="29th">29th</option>
<option value="30" label="30th">30th</option>
<option value="31" label="31th">31th</option>
...
</select>

Month
<select size="1" name="month">
<option value="01" label="Jan">Jan</option>
<option value="02" label="Feb">Feb</option>
<option value="03" label="March">March</option>
<option value="04" label="April">April</option>
<option value="05" label="May">May</option>
<option value="06" label="June">June</option>
<option value="07" label="July">July</option>
<option value="08" label="August">August</option>
<option value="09" label="Septmember">Septmember</option>
<option value="10" label="Octobar">Octobar</option>
<option value="11" label="November">November</option>
<option value="12" label="December">December</option>







...
</select>

Year <select size="1" name="year">
...
<option value="1990" label="1990">1990</option>
<option value="1991" label="1991">1991</option>
<option value="1992" label="1992">1992</option>
<option value="1993" label="1993">1993</option>
<option value="1994" label="1994">1994</option>
<option value="1995" label="1995">1995</option>
<option value="1996" label="1996">1996</option>
<option value="1997" label="1997">1997</option>
<option value="1998" label="1998">1998</option>
<option value="1999" label="1999">1999</option>
<option value="2000" label="2000">2000</option>
<option value="2001" label="2001">2001</option>
<option value="2002" label="2002">2002</option>
<option value="2003" label="2003">2003</option>
<option value="2004" label="2004">2004</option>
<option value="2005" label="2005">2005</option>
<option value="2006" label="2006">2006</option>
<option value="2007" label="2007">2007</option>
<option value="2008" label="2008">2008</option>
<option value="2009" label="2009">2009</option>
<option value="2010" label="2010">2010</option>
<option value="2011" label="2011">2011</option>
<option value="2012" label="2012">2012</option>
<option value="2013" label="2013">2013</option>
<option value="2014" label="2014">2014</option>
<option value="2015" label="2015">2015</option>
<option value="2016" label="2016">2016</option>
<option value="2017" label="2017">2017</option>
<option value="2018" label="2018">2018</option>
<option value="2019" label="2019">2019</option>
<option value="2020" label="2020">2020</option>
...
</select>

</div>

<br><br>
<div class="">

</div>
</select>

<b>User Type</b> <select size="1" name="type">
...
<option value="Manager" label="Manager">Manager</option>
<option value="Tour Guide" label="Tour Guide">Tour Guide</option>
<option value="Customer" label="Customer">Customer</option>

...
</select>

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




















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script >
  function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
} -->
<?php
require '../dashbord_part/footer.php';
 ?>
