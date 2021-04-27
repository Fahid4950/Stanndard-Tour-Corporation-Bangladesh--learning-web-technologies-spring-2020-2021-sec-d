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
    <h5 class="card-header bg-success text-white">Registration Form</h5>
    <div class="card-body">

      <form class="" action="register-post.php" onsubmit="return validation()" method="post" auto_complete="off">


        <div class="form-group">
          <label for="fname">Name</label>
          <input type="text" name="fname"class="form-control" id="fname" placeholder="Enter Your Name" >


        <span id="nameok" class="text-danger font-weight-bold"> </span>


        </div>

        <div class="form-group">
					<label for="fusername" class="font-weight-bold"> Username: </label>
					<input type="text" name="fusername" class="form-control" id="fusername" autocomplete="off">
					<span id="username" class="text-danger font-weight-bold"> </span>
				</div>

        <div class="form-group">
          <label class="font-weight-bold"> Email: </label>
          <input type="text" name="email" class="form-control" id="emails" autocomplete="off">
          <span id="emailids" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group">
          <label class="font-weight-bold"> Password </label>
          <input type="password" name="password" class="form-control" id="password" autocomplete="off">
          <span id="passwords" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group">
          <label class="font-weight-bold"> Confirm Password: </label>
          <input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off">
          <span id="confrmpass" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
              &nbsp; &nbsp; &nbsp;
            <label for="male">
            <input type="radio" name="gender" id='gender'value='male'  > Male
               </label>
              &nbsp; &nbsp; &nbsp;
            <label for="female">
                <input type="radio" name="gender"id='female' value='female'  > Female
            </label>
            &nbsp; &nbsp; &nbsp;
          <label for="other">
              <input type="radio" name="gender"id='other' value='other'  > Other
          </label>

          <span id="confrmgen" class="text-danger font-weight-bold"> </span>
        </div>

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


        <?php if(isset($_GET['success'])){ ?>
        <div class="alert alert-success" role="alert">
           <strong><?= $_GET['success'];?></strong>
        </div>

      <?php } ?>







        </div>


</div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="loginallupdate.php">Sign In</a>

      </form>

  </div>

          </div>

        </div>




    </section>


<script>

function validation(){


			var fname = document.getElementById('fname').value;
      var fusername = document.getElementById('fusername').value;
      var emails = document.getElementById('emails').value;
      var password = document.getElementById('password').value;
      var confirmpass = document.getElementById('conpass').value;


    if(fname == ""){
      document.getElementById('nameok').innerHTML =" ** Please fill the name field";
      return false;
    }

    if((fname.length <= 2) || (fname.length > 20)) {
     document.getElementById('nameok').innerHTML =" ** name lenght must be between 2 and 20";
     return false;
    }

    if(!isNaN(fname)){
      document.getElementById('nameok').innerHTML =" ** only characters are allowed";
      return false;
    }

    if(fusername == "")
    {
    document.getElementById('username').innerHTML =" ** Please fill the username field";
    return false;
  }

  if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email id field";
				return false;
			}

      if(emails.indexOf('@') <= 0 ){
        document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.'))
      {
        document.getElementById('emailids').innerHTML =" ** . Invalid Position";
        return false;
      }


      if(password == ""){
            document.getElementById('passwords').innerHTML =" ** Please fill the password field";
            return false;
          }

          if((password.length <= 5) || (password.length > 20)) {
        document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
        return false;
      }

    if(confirmpass == ""){
      document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
      return false;
    }

      if(password!=confirmpass){
      document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
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
