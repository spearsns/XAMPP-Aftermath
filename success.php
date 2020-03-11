<?php
   include("inc/config.php");
  session_start();

?>
<!doctype html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Success</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container-fluid black">
    <?php include('header.php'); ?>

    <div class='row metal'>
      <div class='col'>
        <br />
        <br />
        <br />
      </div>
    </div>

    <div id='characterList'>

      <div class="row black" id='start'>
        <div class='col-sm'></div>
        <div class='col text-center'><h2 class='text-success'>UPLOAD SUCCESSFUL</h2></div>
        <div class='col-sm'></div>
      </div>

      <div class="row black">
        <div class='col-sm'></div>
        <div class='col text-center'>
          <p style='color: red;'>Do <strong>NOT</strong> hit BACK or REFRESH or you will feed the demons of data corruption!</p>
          <p style='color: white;'>If you hit the CHAR MGMT button in game make sure you refresh when you return</p>
        </div>
        <div class='col-sm'></div>
      </div>

      <div class="row black">
        <div class='col-sm'></div>
        <div class='col'>
          <a href="index.php" role="button" class="btn btn-warning btn-lg btn-block border my-1">RETURN HOME</a>
        </div>
        <div class='col-sm'></div>
      </div>

    </div>

    <?php include("footer.php"); ?>
  </body>
</html>