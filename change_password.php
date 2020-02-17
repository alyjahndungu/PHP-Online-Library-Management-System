
<?php
session_start();
require_once "dbconnection.php";
$user_email = $_POST['user_email'];
$current_password = mysqli_real_escape_string($conn, $_POST['current_password']);
$new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
$new_password = md5($new_password);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
$confirm_password = md5($confirm_password);
if (isset($_POST['submit'])) {
  $result = "SELECT * FROM users WHERE email = '$user_email' and password = '".md5($current_password)."'";
if ( $new_password == $confirm_password ) {
     $query = "UPDATE users SET password = '$new_password' WHERE email = '$user_email'";
     mysqli_query($conn, $query);
     $message = "Password Successfully changed!!!";
     echo "<script type='text/javascript'>alert('$message');</script>";
}else {
  echo "Passwords dont match";
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
    <title>O-Library Change Password</title>
    </title>
</head>

<body style="background-color: slategray">
     <div class="container-fluid">
       <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
       <h1 class="h1 text-center cyan-text"> <strong>Azahub </strong> Online Library System</h1>
       <hr>
         <h4 class="h4 text-center text-warning">Change Password</h4>
         <hr>
       </div>
       <div class="col-md-4"></div>
       
       </div>
         <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4">
    <form action="" method="post">
    <div class="form-group">
          <label for="" class="lime-text">Email</label>
          <input type="email" class="form-control" name="user_email" id="" placeholder="User Email">
        </div>
        <div class="form-group">
          <label for="" class="lime-text">Current Password</label>
          <input type="password" class="form-control" name="current_password" id="" placeholder="Current Password">
        </div>
        <div class="form-group">
        <label for="" class="lime-text">New Password</label>
          <input type="password" class="form-control" name="new_password" id="" placeholder="New Password">
        </div>
        <div class="form-group">
        <label for="" class="lime-text">Confirm New Password</label>
          <input type="password" class="form-control" name="confirm_password" id="" placeholder="Confirm Password">
        </div>

        <button type="submit" name="submit" class="btn rounded-pill btn-outline-cyan">Change Password</button>
    </form>

             </div>
             <div class="col-md-4"></div>
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
