

<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>Customer Payment</title>
  </head>
  <body>


<style>

body {
  background-color: #34ebae;
}

/*body {
  background-image: url('Image/img.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}*/
</style>

<script type="text/javascript" src="script.js"></script>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">


    <h5 class="card-header bg-info text-white"><b>Payment system</b></h5>
    <div class="card-body">

      <form class="" action="payment-post.php" onsubmit="return validation()" method="post" auto_complete="off">

        <h1 id="myh1">Search your name</h1>
          <h3> <b>Username</b></h3>
        <input type="text" name="" id="name" onkeyup="ajax()" />
        <input type="button" name="" value="search" onclick="ajax()">

        <div id="result"></div>

        <div class="form-group">


          <label for="exampleInputEmail1"><b>Account Name</b></label>
          <input type="text"name="aname"class="form-control" id="aname"placeholder="write your account name" >

        <span id="anameok" class="text-danger font-weight-bold"> </span>

        </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><b>Account Number</b></label>
<input type="text"name="anumber"id="anumber"class="form-control" placeholder="write your account name" >
        <span id="anumberok" class="text-danger font-weight-bold"> </span>

            </div>


      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label"><b>Amount</b></label>
        <input type="text"name="amount" id="amount"class="form-control" placeholder="write your amount"  >


<span id="amountok" class="text-danger font-weight-bold"> </span>

      </div>


      <div class="form-group position-relative">
        <label for="exampleInputPassword1" class="form-label"><b> Password</b></label>
        <input type="password" id="myInput" name="password" class="form-control" placeholder="write your password">


<span id="fonameok" class="text-danger font-weight-bold"> </span>

      </div>





      <!-- <div class="form-group">
  <label for="exampleInputPassword1" class="form-label"> <b>Confirm Password</b></label>
  <input type="password"name="repassword" class="form-control" placeholder="write your password again"  >








<br>







</div> -->




</div>
</div>

<?php if(isset($_GET['success'])){ ?>
      <div class="alert alert-primary" role="alert">
         <strong><?= $_GET['success'];?></strong>
      </div>

    <?php } ?>

      <button type="submit" class="btn btn-warning"><b>Submit</b></button>
     <!--  <a href="login.php">login</a> -->

      </form>

  </div>

          </div>

        </div>

      </div>

      </div>
      </div>
    </section>





<script>

function validation()
{
  var aname = document.getElementById('aname').value;
  var anumber = document.getElementById('anumber').value;
  var amount = document.getElementById('amount').value;
 
  // var fname = document.getElementById('fname').value;


  if(aname == ""){
    document.getElementById('anameok').innerHTML =" You,doesn't fill the account name ";
    return false;
  }

 if(!isNaN(aname)){
      document.getElementById('anameok').innerHTML =" Sorry,only characters are allowed**";
      return false;
    }





  if(anumber == ""){
    document.getElementById('anumberok').innerHTML =" You,doesn't fill the account number ";
    return false;
  }
  if(amount == ""){
    document.getElementById('amountok').innerHTML =" You,doesn't fill the ammount ";
    return false;
  }






  // if(ftype == ""){
  //   document.getElementById('fotypeok').innerHTML =" ** Please fill the Food Type field";
  //   return false;
  // }
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
