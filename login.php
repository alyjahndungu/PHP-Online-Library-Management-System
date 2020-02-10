

<?php
    session_start();
    require_once('dbconnect.php');

    if(isset($_POST['login']))
    {
        if(empty($_POST['UserName']) || empty($_POST['password']) )
        {
            header("location: ../logindesign.php?empty");
            exit();
        }
        else
        {
            $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
            $Password = mysqli_real_escape_string($con,$_POST['password']);

            $Query = " select * from userlogin where UserName='".$UserName."' or Email='".$UserName."'";
            $result = mysqli_query($con,$Query);

            if($row=mysqli_fetch_assoc($result))
            {
                $HashPass = password_verify($Password,$row['Password']);

                if($HashPass==false)
                {
                    header("location: ../logindesign.php?P_Invalid");
                    exit();
                }
                elseif($HashPass==true)
                {
                    $_SESSION['U_D']=$row['ID'];
                    $_SESSION['FName']=$row['FName'];
                    $_SESSION['LName']=$row['LName'];
                    $_SESSION['Email']=$row['Email'];
                    $_SESSION['UserName']=$row['UserName'];
                    $_SESSION['Password']=$row['Password'];

                    header("location: ../account.php?Well");
                    exit();

                }

            }
            else
            {
                header("location: ../logindesign.php?U_Invalid");
                exit();
            }
            
        }


    }
    else
    {
        header("location: ../logindesign.php");
        exit();
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

    <!-- JQuery -->


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>

    <title>RAMA - HR MANAGEMENT SYSTEM</title>
    </title>
</head>

<body style="background-color: slategray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <hr>
                <h1 class="text-center white-text"><strong>LOGIN</strong> </h1>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <!-- Default form login -->
                <form class="text-center border border-light p-5" method="post" action="login.php">

                    <p class="h4 mb-4  white-text">Sign in</p>
                    <hr>
                    <div class="form-group">
                        <input type="text" name="_username" id="" class="form-control my-4" placeholder="Username" aria-describedby="helpId">
                    </div>
                    <!-- Password -->
                    <input type="password" name="_password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

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

    <body>

    </body>
    <script>
        //wow amination

        new WOW().init();

        //slide
        $(document).foundation();
    </script>

</body>

</html>