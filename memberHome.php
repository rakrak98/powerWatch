
<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MemberZone</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

  </head>


  <body class ="sign-bg">
    <div style="padding-top: 175px">
      <center><h1>Welcome <?php if(isset($_SESSION['Name'])){echo $_SESSION['Name'];}?>!</h1></center>
    </div>
    <div>
      <font size="6"><p><center>Thanks for choosing Power Watch!</center></p></font>
      <font size="6"><p><center>You can now make purchases of our excellent chargeable cases</center></p></font>
    </div>

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo.png" alt="" height="50" width="50"> Power Watch</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="AboutUs.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/Shoppage.php?voteMessage=">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/signIn.php?loginMessage=">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/signUp.php?message=&welcomeMessage=">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contactUs.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navigation-->

<div class="container" style ="padding-top: 400px">
  <div class="container-sign">
    <form action="memberhomeinfosend.php" method="POST"> 
      <form class="form-signin">
        <h2 class="form-signin-heading" style="text-align: center;">Change password</h2>
        <label for="inputPassword" class="sr-only">Password</label>
        <a>Password:</a>
        <input type="password" id="inputPassword" class="form-control" name="Password" required>
        <input type="submit" value="Change Password">
      </form>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

