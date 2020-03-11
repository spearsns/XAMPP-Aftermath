<?php
   include("inc/config.php");

  session_start();
   if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $passwordConfirm = $_POST['passwordConfirm'];
      $email = $_POST['email'];
   }
?>
<!doctype html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>

  <body>
    <div class="container-fluid">
      <?php include('header.php'); ?>

      <div class='row metal'>
        <div class='col'>
          <br />
          <br />
          <br />
        </div>
      </div>

      <div class='row black'>
        <div class='col'>
          <br />
        </div>
      </div>

      <form id="signup" method="post" action="inc/processSignUp.php">

      <div class='row black'>
        <div class='col-md'></div>
        <div class='col-12 col-sm-6 col-md'><img src="img/graffiti/username.png" id='start' class='img-fluid h-100 mx-auto d-block' /></div>
        <div class='col-12 col-sm-6 col-md'>
          <div class="input-group input-group-lg">
            <input type="text"x name="username" class="form-control border text-center" placeholder="Enter Username" required />
          </div>
        </div>
        <div class='col-md'></div>
      </div>

      <div class='row black'>
        <div class='col-md'></div>
        <div class='col-12 col-sm-6 col-md'><img src="img/graffiti/password.png" class='img-fluid h-100 mx-auto d-block' /></div>
        <div class='col-12 col-sm-6 col-md'>
          <div class="input-group input-group-lg">
            <input type="password" name="password" class="form-control border text-center" placeholder="Enter Password" required />
          </div>
        </div>
        <div class='col-md'></div>
      </div>

      <div class='row black'>
        <div class='col-md'></div>
        <div class='col-12 col-sm-6 col-md'><img src="img/graffiti/confirmPW.png" class='img-fluid h-100 mx-auto d-block' /></div>
        <div class='col-12 col-sm-6 col-md'>
          <div class="input-group input-group-lg">
            <input type="password" name="passwordConfirm" class="form-control border text-center" placeholder="Confirm Password" required />
          </div>
        </div>
        <div class='col-md'></div>
      </div>

      <div class='row black'>
        <div class='col-md'></div>
        <div class='col-12 col-sm-6 col-md'><img src="img/graffiti/email.png" class='img-fluid h-100 mx-auto d-block' /></div>
        <div class='col-12 col-sm-6 col-md'>
          <div class="input-group input-group-lg">
            <input type="text" name="email" class="form-control border text-center" placeholder="Enter Email" required />
          </div>
        </div>
        <div class='col-md'></div>
      </div>

      <div class='row black'>
        <div class='col-md'></div>
        <div class='col'>
          <br />
          <p class='text-center' style='color: white;'>EMAIL WILL ONLY BE USED TO RESET PASSWORD<p>
        </div>
        <div class='col-md'></div>
      </div>

      <div class='row black'>
        <div class='col'></div>
        <div class='col'>
          <div class="input-group input-group-lg">
            <button type='submit' class='btn btn-success btn-lg btn-block border'>SUBMIT</button>
          </div>
        </div>
        <div class='col'></div>
      </div>

      </form>

      <div class="row black">
        <div class="col text-center">
          <br />
          <?php
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if (strpos($url, 'error=username')) {
              echo '<p style="color: red;"><strong>USERNAME ALREADY TAKEN</strong></p>';
            } elseif (strpos($url, 'error=email')){
              echo '<p style="color: red;"><strong>PLEASE ENTER A VALID EMAIL</strong></p>';
            } elseif (strpos($url, 'error=password')){
              echo '<p style="color: red;"><strong>PASSWORD VALUES DO NOT MATCH</strong></p>';
            }
          ?>
        </div> 
      </div>

      <?php include('footer.php'); ?>
    </div>   
  </body>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
