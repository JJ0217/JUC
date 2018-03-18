<?php include('controller.php');
    $mysqli = new mysqli("localhost","yc","ycyc","agn");
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
        <a class="title js-scroll-trigger" href="loginP.php"><h1>AGN Organization</h1></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="newjob.php">Search Job</a>
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
          <div class="intro-heading text-uppercase">Search Job</div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    </header>
    <div class="titleJob"><h1>-Available Job- </h1></div>
    <div class="container">
      <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Job ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Working Time</th>
      <th>Working Hours</th>
      <th>Location</th>
      <th>Salary</th>
      <th>Notes</th>
      <th>Enroll</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $user = $_SESSION['username'];
        $array = mysqli_query($mysqli, "SELECT * FROM job WHERE jobID NOT IN(SELECT jobID FROM applyJob WHERE username = '$user')");
		if (mysqli_num_rows($array)==0){
			echo "    <tr>
            <th scope='row'>There are no available job</th></tr>";
		}
        while ($row = mysqli_fetch_row($array)){


		echo "
      <tr>
          <th scope='row'>$row[0]</th>
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>$row[3]</td>
          <td>$row[4]</td>
          <td>$row[5]</td>
          <td>$row[6]</td>
          <td>$row[7]</td>
          <td><form method='POST' action='searchJob.php'>
      		<input type='text' class='hide' name='jobID' value='$row[0]'>
      		<button type='submit' name='addJob' class='btn btn-outline-primary btn-sm col-md-12'>Add Job</button>
      		</form></td>
      </tr>";

}

      ?>
  </tbody>
</table>
</div>

<div class="titleJob"><h1>- Added Job- </h1></div>
<div class="container">
  <table class="table">
<thead class="thead-inverse">
<tr>
  <th>Job ID</th>
  <th>Title</th>
  <th>Description</th>
  <th>Working Time</th>
  <th>Working Hours</th>
  <th>Location</th>
  <th>Salary</th>
  <th>Notes</th>
  <th>#</th>
</tr>
</thead>
<tbody>
<?php
    $user = $_SESSION['username'];
    $array = mysqli_query($mysqli, "SELECT * FROM job,applyJob WHERE job.jobID = applyJob.jobID AND applyJob.username = 'wew'");
if (mysqli_num_rows($array)==0){
  echo "    <tr>
        <th scope='row'>There are no available job</th></tr>";
}
    while ($row = mysqli_fetch_row($array)){


echo "
  <tr>
      <th scope='row'>$row[0]</th>
      <td>$row[1]</td>
      <td>$row[2]</td>
      <td>$row[3]</td>
      <td>$row[4]</td>
      <td>$row[5]</td>
      <td>$row[6]</td>
      <td>$row[7]</td>
      <td><form method='POST' action='searchJob.php'>
      <input type='text' class='hide' name='jobID' value='$row[0]'>
      <button type='submit' name='' class='btn btn-outline-primary btn-sm col-md-12' disabled>-</button>
      </form></td>
  </tr>";

}

  ?>
</tbody>
</table>
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
