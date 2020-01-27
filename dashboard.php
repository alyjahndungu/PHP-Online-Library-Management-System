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

  <!--custom fonts-->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Baskervville|Cormorant|Kaushan+Script|Merienda|Niconne|Tangerine&display=swap');
  </style>

  <link rel="stylesheet" href="css/style.csss">

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

  <title>AZAHUB - OLibrary System</title>
  </title>


</head>

<body class="body">


  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand black-text" href="#"> <img class="img-fluid" src="img/azahublogo.png" height="100rem" width="80rem" alt=""> O-Library System
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
         <ul class="navbar-nav ml-auto nav-flex-icons">
         <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle blue-text" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user blue-text" display-5></i> Manage Account
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item text-primary" href="#"> <i class="fa fa-user" aria-hidden="true"></i> My Profile</a></a>
            <a class="dropdown-item text-primary" href="#"> <i class="fa fa-cog" aria-hidden="true"></i> Change Password</a>
            <a class="dropdown-item text-primary" href="#"> <i class="fas fa-user-cog    "></i> Update Details</a>
            <a class="dropdown-item text-primary" href="#"> <i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>

          </div>
        </li>
       </ul>
    </div>
  </nav>
  <!--/.Navbar -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">

        <?php include_once('sidebar.php') ?>
      </div>

      <div class="col-lg-9">
        <?php include_once('header.php') ?>
        <div class="row">

          <div class="col-sm-3">
            <div class="card wow fadeInLeft">
              <i class="fa fa-address-book brown-text text-center fa-8x" aria-hidden="true"></i>
              <div class="card-body">
                <h4 class="card-title"><a>22</a></h4>
                <p class="card-text">Today's issued Books</p>

              </div>
            </div>
          </div>


          <div class="col-sm-3">
            <div class="card wow fadeInUp">
              <i class="fas fa-book yellow-text text-center fa-8x"></i>
              <div class="card-body">
                <h4 class="card-title"><a>59</a></h4>
                <p class="card-text">Returned Books</p>

              </div>
            </div>
          </div>


          <div class="col-sm-3">
            <div class="card wow fadeInRight">
              <i class="fas fa-book blue-text text-center fa-8x"></i>
              <div class="card-body">
                <h4 class="card-title"><a>203</a></h4>
                <p class="card-text">Not Returned Books</p>

              </div>
            </div>

          </div>


          <div class="col-sm-3">
            <div class="card wow fadeInLeft">
              <i class="fas fa-book red-text text-center fa-8x"></i>
              <div class="card-body">
                <h4 class="card-title"><a>1,223</a></h4>
                <p class="card-text">Total Books</p>

              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3"></div>

          <div class="col-md-6">
            <!--Pie chart for the details-->
            <div class="card wow bounceInUp">
              <div class="card-body">
                <canvas id="doughnutChart"></canvas>
              </div>
            </div>



          </div>

          <div class="col-md-3"></div>
        </div>

      </div>


    </div>
  </div>

  <?php include_once('footer.php'); ?>
  <script>
    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
      type: 'doughnut',
      data: {
        labels: ["Medicine", "IT and Computing", "Bussiness", "Science", "Agriculture"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });


    //wow amination

    new WOW().init();

    //slide
    $(document).foundation();
  </script>

</body>

</html>