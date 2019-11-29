<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) 
{ die('Error , Direct Access Not Available'); };


?>


<!DOCTYPE html>
<html>
    <title>Enter New Password</title>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="../style/index.css" rel="stylesheet" type="text/css">
<!--Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   
        <section class="container-fluid bg" id = "body-form">
                <section class="row justify-content-center">
                    <section class="col-12 col-sm-6 col-md-3">
                        <form class="form-container" method="POST" action="../php/reset_password.php">
                              <div class="form-group">
                                <input type="password" id="password" name = "password" class="form-control" placeholder="Enter New Password" minlength="8" required>

                              </div>
                             <div class="form-group">
                                    <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="password" name="password1" class="form-control" id="InputPassword1"  placeholder="Enter Password Again" minlength = "8" required>
                              </div>
                             
                                  <button type="submit" name="submit" class="btn btn-primary btn-block" onclick = "check()">Reset</button>
                                  
                            </form>
                    </section>
                </section>
            </section>
            <script src = "../js/checkpass.js"></script>
            <script src ="../js/register style.js"></script>
</body>




</html>