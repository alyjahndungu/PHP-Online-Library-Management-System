<?php
error_reporting(E_ALL^E_WARNING);
require_once "dbconnect.php";

if (isset($_POST['register'])) {
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);

  $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
  $email = mysqli_real_escape_string($conn, $_POST['user_email']);
 
  $password  = mysqli_real_escape_string($conn, $_POST['password']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone_no']);

    if (empty( $fname)|| empty($lname)|| empty($user_name)|| empty($email)|| empty($password) || empty($phone)){
        $message = "No data was provided in the fields...Please Try Again!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
       $password = md5($password);
       $query = "INSERT INTO `accounts` (`id`,`firstname`,`lastname`,`username`,`email`,`password`,`phone`)
       VALUES('$fname', '$lname','$user_name', '$email', '$password', '$phone')";
       mysqli_query($conn, $query);
       $_SESSION['success'] = "Succesifully Added" .mysqli_error($conn);
       header('location: login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">
  <!--custom fonts-->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');
  </style>
  <title>Aza - Library Register</title>
  </title>
</head>

<body style="background-color: slategray">
          <div class="container-fluid">
          <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
          <hr>
          <h1 class="text-center white-text"><strong>Create Account</strong> </h1>
          </div>
          <div class="col-sm-4"></div>
          </div>
          <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
<!-- Default form register -->
<form class="text-center border border-warning p-5 wow fadeIn" method="post" action="register.php">
        <div class="form-row mb-4">
        <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" name="fname" class="form-control text-center pink-text rounded-pill" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
        <input type="text" id="defaultRegisterFormLastName" name="lname" class="form-control text-center pink-text rounded-pill" placeholder="Last name">
        </div>
        </div>
        <div class="form-group">
        <input type="text" name="user_name" id="" class="form-control text-center pink-text rounded-pill" placeholder="Username" aria-describedby="helpId">
        </div>
        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" name="user_email" class="form-control mb-4 text-center pink-text rounded-pill" placeholder="E-mail">
        <!-- Password -->
        <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control text-center pink-text rounded-pill" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted text-warning mb-4">
            At least 8 characters and 1 digit
        </small>
        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" name="phone_no" class="form-control text-center pink-text rounded-pill" maxlength="13" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-warning  text-muted mb-4">
            Optional - for two step authentication
        </small>
        <!-- Sign up button -->
        <button class="btn  my-4 btn-block btn-outline-purple rounded-pill wow shake" name="register" type="submit">Sign Up</button>
        <p>Already Registered??</p> <a href="login.php" class="text-warning">Sign in here</a>

<!-- Social register -->
<!--
<p>or sign up with:</p>
<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
-->
<hr>
</form>
<!-- Default form register -->
        </div>
        <div class="col-sm-4"></div>
        </div>
        </div>
  <script>
    //wow amination
    new WOW().init();
    //slide
    $(document).foundation();
  </script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>


</body>

</html>