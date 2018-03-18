<?php
$error = "";
$mysqli = new mysqli("localhost","yc","ycyc","agn");


if (isset($_POST['updateP'])) {
  $pw = $_POST['passwordP'];
  $password = md5($pw);
  $fullName = $_POST['fullnameP'];
  $email = $_POST['emailP'];
  $contact = $_POST['contactP'];
  $user = $_SESSION['username'];

  if(!$_POST['passwordP']){
    $error .= "Password Required<br>";
  }
  if(!$_POST['fullnameP']){
    $error .= "Full name Required<br>";
  }
  if(!$_POST['emailP']){
    $error .= "Email Required<br>";
  }
  if(!$_POST['contactP']){
    $error .= "Contact Required<br>";
  }
  if($error != ""){
    $error = "<p>There was error(s) in your form:</p>".$error;
  } else {


    $sql = "UPDATE `users`
            SET password = '$password',
                fullName = '$fullName',
                email = '$email',
                contactNo = '$contact'
            WHERE userName = '$user'";
    mysqli_query($mysqli,$sql);

    $_SESSION['success'] = "Profile Updated";
    header('location: loginP.php');
  }
}
elseif (isset($_POST['updateE'])) {
  $pw = $_POST['passwordE'];
  $password = md5($pw);
  $fullName = $_POST['fullnameE'];
  $email = $_POST['emailE'];
  $contact = $_POST['contactE'];
  $filed = $_POST['field'];
  $user = $_SESSION['username'];

  if(!$_POST['passwordE']){
    $error .= "Password Required<br>";
  }
  if(!$_POST['fullnameE']){
    $error .= "Full name Required<br>";
  }
  if(!$_POST['emailE']){
    $error .= "Email Required<br>";
  }
  if(!$_POST['contactE']){
    $error .= "Contact Required<br>";
  }
  if($error != ""){
    $error = "<p>There was error(s) in your form:</p>".$error;
  } else {


    $sql = "UPDATE `users`
            SET password = '$password',
                fullName = '$fullName',
                email = '$email',
                contactNo = '$contact',
                field = '$field'
            WHERE userName = '$user'";
    mysqli_query($mysqli,$sql);

    $_SESSION['success'] = "Profile Updated";
    header('location: loginP.php');
  }
}


?>
