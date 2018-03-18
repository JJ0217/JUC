<?php
session_start();

$mysqli = new mysqli("localhost","yc","ycyc","agn");
$error = array();

if(isset($_POST['signupE']))
{
  $usernameE = $_POST['usernameE'];
  $pw = $_POST['passwordE'];
  $passwordE = md5($pw);
  $fullnameE = $_POST['fullnameE'];
  $emailE = $_POST['emailE'];
  $contactE = $_POST['contactE'];
  $fieldE = $_POST['fieldE'];
  $type = "Employer";

  if(empty($usernameE)){
  array_push($error,"Username is required.");
}
  if(empty($passwordE)){
  array_push($error,"Password is required.");
}
  if(empty($emailE)){
  array_push($error,"Email is required.");
}
  $sql = "SELECT username FROM `users` WHERE username ='".mysqli_real_escape_string($mysqli, $_POST['usernameE'])."' LIMIT 1";
  $res = mysqli_query($mysqli, $sql);
  if (mysqli_num_rows($res) > 0) {
      array_push($error,"duplicate");
    }
  if(count($error)==0){
    $sql = "INSERT INTO users (username,password,fullname,email,contactNo,field,type)
            VALUES ('$usernameE','$passwordE','$fullnameE','$emailE','$contactE','$fieldE','$type')";
    mysqli_query($mysqli,$sql);
    header('Location: login.php');
  }
}
elseif(isset($_POST['signupP']))
{
  $usernameP = $_POST['usernameP'];
  $pw = $_POST['passwordP'];
  $passwordP = md5($pw);
  $fullnameP = $_POST['fullnameP'];
  $emailP = $_POST['emailP'];
  $contactP = $_POST['contactP'];
  $fieldP = "";
  $type = "Part Timer";

  if(empty($usernameP)){
  array_push($error,"Username is required.");
}
  if(empty($passwordP)){
  array_push($error,"Password is required.");
}
  if(empty($emailP)){
  array_push($error,"Email is required.");
}

  $sql = "SELECT username FROM `users` WHERE username ='".mysqli_real_escape_string($mysqli, $_POST['usernameP'])."' LIMIT 1";
  $res = mysqli_query($mysqli, $sql);
  if (mysqli_num_rows($res) > 0) {
      array_push($error,"duplicate");
    }
  if(count($error)==0){
    $sql = "INSERT INTO users (username,password,fullname,email,contactNo,field,type)
            VALUES ('$usernameP','$passwordP','$fullnameP','$emailP','$contactP','$fieldP','$type')";
    mysqli_query($mysqli,$sql);
    header('Location: login.php');
  }
}

if(isset($_POST['login_user'])){
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $pw = mysqli_real_escape_string($mysqli, $_POST['password']);
  $password = md5($pw);

  $query = "SELECT password FROM users WHERE username = '$username'";
  $result = mysqli_query($mysqli,$query);
  $row = mysqli_fetch_assoc($result);
  $userPw = $row['password'];

  if($password != $userPw){
    array_push($error,"WRG PASSWORD.");
  }
  if (count($error) == 0) {
  $query = "SELECT * FROM Users WHERE username='$username'";
  $results = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($results) == 1) {
      $query2 = "SELECT type FROM Users WHERE username='$username'";
      $result2 = mysqli_query($mysqli,$query2);
      $row = mysqli_fetch_assoc($result2);
      $check = $row['type'];

      if($check == 'Part Timer'){
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('Location: loginP.php');
      }
      elseif ($check == 'Employer') {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('Location: loginE.php');
      }
    } else {
      array_push($error, "Wrong username/pw combination");
    }
  }
}

if(isset($_POST['newJob'])){
  $title = $_POST['title'];
  $desp = $_POST['descp'];
  $workingTime = $_POST['workingTime'];
  $workingHour = $_POST['workingH'];
  $salary = $_POST['salary'];
  $location = $_POST['location'];
  $notes = $_POST['notes'];
  $user = $_SESSION['username'];

  $sql = "INSERT INTO job(title,description,workingTime,workingHour,location,salary,notes,username)
          VALUES ('$title','$desp','$workingTime','$workingHour','$location','$salary','$notes','$user')";
  mysqli_query($mysqli,$sql);
  $_SESSION['success'] = "Job Created Successfully";
  header('Location: loginE.php');

}

if (isset($_POST['addJob'])) {
  $id = $_POST['jobID'];
  $username =  $_SESSION['username'];

  $sql = "INSERT INTO  applyJob (jobID,username)
          VALUES ('$id','$username')";
  mysqli_query($mysqli,$sql);
  $_SESSION['success'] = "You have successfully add this job.";
  header('location: loginP.php');
}



?>
