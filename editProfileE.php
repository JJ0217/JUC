<?php
  session_start();
  include('editProfile.php');
  $user = $_SESSION['username'];
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
              <a class="nav-link js-scroll-trigger" href="searchJob.php">Search Job</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php?logout=1"><strong>Log Out</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Edit Profile</div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    </header>
    <div class="titleJob"><h1>Edit Profile</h1></div>
        <form id="createJob" method="POST" action="editProfileP.php">
          <div class="container">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="usernameE" disabled value="<?php
          $query = "SELECT username FROM users WHERE username = '$user'";
          $result = mysqli_query($mysqli,$query);
          $row = mysqli_fetch_assoc($result);
          echo $row['username'];?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" required name="passwordE">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Full name</label>
                  <input type="text" class="form-control" name="fullnameE" value="<?php
          $query = "SELECT fullName FROM users WHERE username = '$user'";
          $result = mysqli_query($mysqli,$query);
          $row = mysqli_fetch_assoc($result);
          echo $row['fullName'];?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" required name="emailE" value="<?php
          $query = "SELECT email FROM users WHERE username = '$user'";
          $result = mysqli_query($mysqli,$query);
          $row = mysqli_fetch_assoc($result);
          echo $row['email'];?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact No</label>
                  <input type="text" class="form-control" required name="contactE" value="<?php
          $query = "SELECT contactNo FROM users WHERE username = '$user'";
          $result = mysqli_query($mysqli,$query);
          $row = mysqli_fetch_assoc($result);
          echo $row['contactNo'];?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Field</label>
                  <input type="text" class="form-control" required name="field" value="<?php
          $query = "SELECT field FROM users WHERE username = '$user'";
          $result = mysqli_query($mysqli,$query);
          $row = mysqli_fetch_assoc($result);
          echo $row['field'];?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <button type="submit" name="updateE" class="btn btn-success">Update</button>
                </div>
              </div>
            </div>



          </div>
        </form>
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
