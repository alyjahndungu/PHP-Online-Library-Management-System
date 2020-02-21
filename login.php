<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
require_once 'dbconnection.php';
if(isset($_POST['_username']))
{   $UserName = stripslashes($_REQUEST['_username']);
    $UserName = mysqli_real_escape_string($conn, $UserName);
    $Password = stripslashes($_REQUEST['_password']);
    $Password = mysqli_real_escape_string($conn, $Password);
    $query = "SELECT * FROM `users` WHERE `username`='$UserName' AND `password`='".md5($Password)."'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);
if( $rows == 1 )
     {
 $_SESSION['_username']=$row['username'];
 header("Location: dashboard.php");
 exit;
  }
  else
     {
        $message = "Wrong Username or password...Try Again!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
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
        @import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');
    </style>
    <title>O-Library Login</title>
    </title>
</head>

<body style="background-color: slategray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <hr> 
            <h1 class="text-center text-info wow rotateIn"><strong>Online - Library System</strong></strong> </h1>
            </div>
            <div class="col-sm-4"></div>
            </div>
            <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <!-- Default form login -->
    <form class="text-center border border-warning p-5 wow rotateIn" method="post" action="login.php">
    <p class="h4 mb-4 cyan-text text-uppercase">Sign in</p>
    <hr>
    <div class="form-group">
    <input type="text" name="_username" id=""  class="form-control my-4 rounded-pill text-center" placeholder=" Username" aria-describedby="helpId">
    </div>
    <!-- Password -->
    <input type="password" name="_password" id="defaultLoginFormPassword" class="form-control mb-4 rounded-pill  text-center" placeholder="Password">
    <div class="d-flex justify-content-around">
    <div>
                            <!-- Remember me -->
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
    <label class="custom-control-label white-text" for="defaultLoginFormRemember">Remember me</label>
    </div>
    </div>
    <div>
            <!-- Forgot password -->
    <a href="" class="lime-text">Forgot password?</a>
    </div>
    </div>
    <!-- Sign in button -->
    <button class="btn btn-outline-cyan rounded-pill btn-block my-4" name="login" type="submit">Sign in</button>
    <!-- Register -->
    <p class="white-text">Not a member?
    <a href="register.php" class="lime-text">Register</a>
    </p>
   </form>
        <!-- Default form login -->
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
