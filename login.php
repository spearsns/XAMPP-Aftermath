<?php
  include("inc/config.php");
  session_start();
  if(isset($_POST['submit'])){
    $username = htmlentities(stripslashes($_POST['username']));
    $password = htmlentities(stripslashes($_POST['password']));
  }
?>
<!doctype html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to the Aftermath</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container-fluid">
      <?php include('header.php'); ?>

      <div class="row metal">
        <div class="col">
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
      
      <form id="login" method="post" action="inc/processLogin.php">

        <div class='row black'>
          <div class='col-md'></div>
          <div class='col-12 col-sm-6 col-md'><img src="img/graffiti/username.png" class='img-fluid h-100 mx-auto d-block' /></div>
          <div class='col-12 col-sm-6 col-md'>
            <div class="input-group input-group-lg">
              <input type="text" id='start' name="username" class="form-control border text-center" placeholder="Enter Username" required />
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
          <div class='col'>
            <br />
          </div>
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
        <div class='col'></div>
        <div class="col">
          <?php
              $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              if (strpos($url, 'error=fail')){
              echo '<h6 class="text-center" style="color: red;">INVALID USERNAME OR PASSWORD</p>';
              }
          ?>
        </div>
        <div class='col'></div>  
      </div>
      
      <?php include("footer.php"); ?>
    
    </div>

  </body>
</html>