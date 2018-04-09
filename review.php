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
              <h1>Review</h1>
            </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    </header>
    <br><br>
    <div class="container">
      <div class="row">
        <h1> Part timer -
          <?php
            $user = $_SESSION['success'];
            $query = "SELECT fullname FROM Users WHERE username = '$user'";
            $result = mysqli_query($mysqli,$query);
            $row = mysqli_fetch_assoc($result);
            echo $row['fullname'];
                ?> </h1>
      </div>
    <form action="review.php" method = "POST">
    <div class="form-group">
		<label class="field">Rating</label><br/><br/>
    <div class="stars">
      <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
			<label class="star star-5" for="star-5"></label>
			<input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
			<label class="star star-4" for="star-4"></label>
			<input class="star star-3" id="star-3" type="radio" name="star" value="3" checked="checked"/>
			<label class="star star-3" for="star-3"></label>
			<input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
			<label class="star star-2" for="star-2"></label>
			<input class="star star-1" id="star-1" type="radio" name="star" value="1" />
			<label class="star star-1" for="star-1"></label>
		</div>
        </div>
		<br>
    <div class="form-group">
      <label> Comments</label>
      <textarea class="form-control" name="comment" rows="4"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="reviewed">Review</button>
    </div>
    </form>
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
