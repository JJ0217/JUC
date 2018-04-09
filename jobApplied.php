<?php
  include('controller.php');
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel = "icon" type = "image/png" href= "img/gicon.png">
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
              <a class="nav-link js-scroll-trigger" href="newjob.php">Create Job</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="editProfileE.php">Edit Profile</a>
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
        <div class="row">
          <div class="col-md-12">
            <div class="intro-text">
              <h1>Part Timer Application</h1>
            </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    </header>

    <div class="container">
      <div class="row">
        <h1> Part timer </h1>
      </div>
      <div class="row">
      <table class="table">
      <thead class="thead-inverse">
      <tr>
        <th>#</th>
        <th>Fullname</th>
        <th>Job Position</th>
        <th>Working Date</th>
        <th>Email</th>
        <th>ContactNo</th>
        <th>Status</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <?php

          $user = $_SESSION['username'];
          $array = mysqli_query($mysqli, "SELECT * FROM users,job,applyJob WHERE job.jobID = applyJob.jobID AND users.username = applyJob.username AND job.username = '$user'");
      if (mysqli_num_rows($array)==0){
        echo "    <tr>
              <th scope='row'>There are no available job</th></tr>";
      }
          while ($row = mysqli_fetch_row($array)){


      echo "
        <tr>
            <th scope='row'></th>
            <td>$row[2]</td>
            <td>$row[8]</td>
            <td>$row[9]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[19]</td>

            <td>
            <form method='POST' action='review.php'>
            <input type='text' class='hide' name='username' value='$row[0]'>
              ";
      if($row[19] == 'Accept'){
        echo "
          <div class ='row'>
              <input type='text' class='hide' name='reviewUser' value='$row[0]'>
              <button type='submit' name='review' class='btn btn-outline-success btn-sm col-md-12'>Review</button>
              </div>
              </form></td>
          </tr>";
      }
      elseif($row[19] == "Rejected"){
        echo "
          <div class ='row'>
                <button type='submit' disabled class='btn btn-outline-danger btn-sm col-md-12'>Rejected</button>
                </div>
                </form></td>
            </tr>";
      }
      else{
        echo "
          <div class ='row'>
                <button type='submit' name='acceptJob' class='btn btn-outline-info btn-sm col-md-6'>Accept</button>
                <button type='submit' name='rejectJob' class='btn btn-outline-danger btn-sm col-md-6'>Reject</button>
                </div>
                </form></td>
            </tr>";
      }
}
        ?>
      </tbody>
      </table>
      </div>

    </div>
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
