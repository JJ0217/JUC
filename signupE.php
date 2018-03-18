<?php include('controller.php')?>
<?php
$error = "";

if(array_key_exists("signupE",$_POST)){
  $link = mysqli_connect("localhost","yc","ycyc","agn");
  if (!$_POST['usernameE']) {
    $error .= "Username is Required<br>";
  }
  if (!$_POST['passwordE']) {
    $error .= "Password is Required<br>";
  }
  if (!$_POST['emailE']) {
    $error .= "Email is Required<br>";
  }
  $sql = "SELECT username FROM `users` WHERE username ='".mysqli_real_escape_string($link, $_POST['usernameE'])."' LIMIT 1";
  $res = mysqli_query($link, $sql);
  if (mysqli_num_rows($res) > 0) {
      $error .= "Username has been used.<br>";
    }
  if (mysqli_connect_error()){
  die ("Connection error");
      }
    }
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AGN-JinJang Community</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="title js-scroll-trigger" href="#page-top"><h1>AGN Organization</h1></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.html"><strong>Log In</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup.html"><strong>Sign Up</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
              <form id="form_signup" method="POST" action="signupE.php" enctype="multipart/form-data">
                <div class="loginField">
                <h2>-- SIGN UP --</h2>
                <h4>Employer</h4>
                <div><input type="text" name="usernameE" placeholder="Username">
                  <span class="highlight"></span><span class="bar"></span><br></div>

                <div><input type="password" name="passwordE" placeholder="Password">
                  <span class="highlight"></span><span class="bar"></span><br></div>

                <div><input type="text" name="fullnameE" placeholder="Full Name">
                  <span class="highlight"></span><span class="bar"></span><br></div>

                <div><input type="email" name="emailE" placeholder="Email">
                <span class="highlight"></span><span class="bar"></span><br></div>

                <div><input type="text" name="contactE" placeholder="Contact No">
                <span class="highlight"></span><span class="bar"></span><br></div>

                <div><input type="text" name="fieldE" placeholder="Field">
                <span class="highlight"></span><span class="bar"></span><br></div>

                <button name="signupE" type="submit" class="btn btn-md">Create Account</button> &nbsp;
              </form>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    </header>
    <!-- Footer -->
    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>AGN Organization</h3>

        <p class="footer-company-name">Copyright &copy;YC </p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>2Bangunan AGN, Jalan Charity</span>50300 Kuala Lumpur</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>Tel: 03-41417698 / 012-3456789</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:agn@ogz.com">agn@ogz.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the AGN</span>
          Acts Global Networking (AGN) is a non-profit organization that manages the Jinjang Utara Community Project for the poor.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
  </body>

  </html>
