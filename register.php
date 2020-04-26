<?php
error_reporting(E_ALL^E_WARNING);
require_once 'dbconnection.php';
require_once 'functons.php';
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
       $code = rand(1111, 99999);
       $formatPhone  = "+254".substr($phone,-9);

       // check from database for duplicate record
     $duplicate = mysqli_query($db,"SELECT * FROM `users` WHERE `username` = '$username'");
     if(mysqli_num_rows($duplicate ) > 0){
     die("Username is taken, please try another one.");
      }
       $query = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`, `phone` ,`code`) 
       VALUES('$fname', '$lname','$user_name', '$email', '$password','  $formatPhone ','$code')";
        mysqli_query($conn, $query);
        $meMessage = "Hello ".$username.".Your Verification Code is ".$code;
        $sms = new smsAPP();
        $sms->sendMessage($formatPhone,$meMessage);
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
<link rel="stylesheet" href="css/custom.css">
  <!--custom fonts-->
  <style>
@import url('https://fonts.googleapis.com/css?family=Barlow|Lato|Source+Code+Pro|Varela+Round&display=swap');
</style>
  <title>Aza - Library Register</title>
  </title>
</head>

<body style="background-color:#f8f8fd; font-family: 'Varela Round', sans-serif;">
          <div class="container-fluid">
          <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
          <hr>
          <h1 class="text-center cyan-text"><strong>Create Account</strong> </h1>
          </div>
          <div class="col-sm-4"></div>
          </div>
          <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
<!-- Default form register -->
<form class="text-center border border-warning p-5 wow fadeInLeft" method="post" action="register.php">
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
        <button class="btn  my-4 btn-block btn-outline-cyan rounded-pill wow shake" name="register" type="submit">Sign Up</button>
        <p class="cyan-text"> Already Registered??</p> <a href="login.php" class="pink-text">Sign in here</a>
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