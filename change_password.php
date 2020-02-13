<?php
require_once 'dbconnection.php';
if (isset($_POST['submit'])) : extract($_POST); 
if ($old_pass !="" && $new_pass != "" && $confirm_pass != "") : $user_id = '1';
$old_pwd=md5(mysqli_real_escape_string($db,$_POST['current_pass']));
$pwd=md5(mysqli_real_escape_string($db,$_POST['new_pass']));
$c_pwd=md5(mysqli_real_escape_string($db,$_POST['confirm_pass']));
if($pwd == $c_pwd) :if($pwd!=$old_pwd) :
    $sql="SELECT * FROM `users` WHERE `id`='$user_id' AND `password` ='$old_pwd'";
    $db_check=$db->query($sql);
    $count=mysqli_num_rows($db_check);
  if($count==1) :
    $fetch=$db->query("UPDATE `users` SET `password` = '$pwd' WHERE `id`='$user_id'");
    $old_password=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password update successfully.";
  else:
    $error = "The password you gave is incorrect.";
  endif;
  else :
    $error = "Old password new password same Please try again.";
  endif;
  else:
    $error = "New password and confirm password do not matched";
  endif;
  else :
    $error = "Please fil all the fields";
  endif;   
  endif;
    
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
    <form action="" method="post">
        <div class="form-group">
          <label for="">Current Password</label>
          <input type="password" class="form-control" name="current_pass" id="" placeholder="Current Password">
        </div>
        <div class="form-group">
        <label for="">New Password</label>
          <input type="password" class="form-control" name="new_pass" id="" placeholder="New Password">
        </div>
        <div class="form-group">
        <label for="">Confirm New Password</label>
          <input type="password" class="form-control" name="confirm_pass" id="" placeholder="Confirm Password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
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
