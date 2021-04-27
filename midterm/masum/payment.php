

            <?php
            // session_start();
            //
            // if(!isset($_SESSION['login_Success'] ))
            // {
            //     header('location:login.php');
            // }

            require 'db.php';
            $select = "SELECT * FROM users";
            $select_result = mysqli_query($db_connect,$select);



             ?>
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
                  <div class="col-lg-9 m-auto ">
                    <div class="card">
                      <!-- <form class="" action="payment-post.php" method="post" auto_complete="off"> -->
            <div class="card-header  text-primary">
            <h3> All Users Information   <a class="float-right btn btn-danger" href="logout.php"> Logout</a> </h3>
            </div>

            <div class="card-body">
              <table class="table">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>

                  <th>View</th>

                </tr>


                <?php foreach ($select_result as  $users) { ?>
                  <tr>
                    <td><?php echo $users['id'] ?></td>

                    <td><?php echo $users['name'] ?></td>

                    <td><?php echo $users['email'] ?></td>

                    <td><?php echo $users['gender'] ?></td>


                    <td>
                        <a href="individual.php?id=<?php echo $users['id'] ?>" class="btn btn-info">View</a>
                    </td>

                    <td>
                      <tr>
                        <td>Receive Payment:</td>
                        <td>
                          <select name="payment">
                            <option value="">Cash</option>
                            <option value="">Card</option>
                            <option value="">Cheak</option>

                            <option value="Other">Others</option>

                          </select>
                        </td>
                      </tr>
                    </td>
                    <td>
                        <a href="payment-post.php?id=<?php echo $users['id'] ?>" class="btn btn-success">Confirm</a>
                    </td>
                  </tr>
            <?php } ?>

            <fieldset>
                <legend><b>Payment Method</b></legend>
                <!-- <form method="post" action="Payment-post.php"> -->


                    <fieldset>


                <i> <img align="right" src="a41.jpg"; width="800" height="350px"  >


                    </fieldset>

            
              </table>

            </div>
            </div>
            </div>
            </div>
            </div>
            </section>

            



        </form>
    </fieldset>

</body>

</html>
