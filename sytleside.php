<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
.sidebar{
    text-decoration: none;
    list-style: none
}

</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <aside>
            <div class="card wow slideInLeft">
               <div class="card-body">
                <ul class="sidebar" >
                    <li class="text-primary waves-effect"> <a href=""> <i class="fas fa-chart-line fa-1x"></i>Dashboard</a></li>
                    <hr>
                    <li>
                      <div class="input-group">
                          <span class="input-group-btn">
                              <button type="button" class="btn dropdown-toggle text-primary" aria-label="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage Books
                              </button>
                              <div class="dropdown-menu ">
                                  <a class="dropdown-item text-primary" href="#">Add Books</a>
                                  <a class="dropdown-item text-primary" href="#">Returned Books</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item text-primary" href="#">Edit Books</a>
                                  <a class="dropdown-item text-primary" href="#">Remove Books</a>
                              </div>
                          </span>
                      </div>
                    </li>
                    <hr>
                    <li>
                      <div class="input-group">
                          <span class="input-group-btn">
                              <button type="button" class="btn dropdown-toggle text-primary" aria-label="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-user-circle" aria-hidden="true"></i>  Manage Fines
                              </button>
                              <div class="dropdown-menu ">
                                  <a class="dropdown-item text-primary" href="#">View Fines</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item text-primary" href="#">Clear Fines</a>
                              </div>
                          </span>
                      </div>
                    </li>
                    <hr>

                    <li>
                      <div class="input-group">
                          <span class="input-group-btn" style="text-align:left">
                              <button type="button" class="btn dropdown-toggle text-primary" aria-label="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-users-cog"></i>  Students
                              </button>
                              <div class="dropdown-menu ">
                                  <a class="dropdown-item text-primary" href="#">Add Student</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item text-primary" href="#">View All Students</a>
                              </div>
                          </span>
                      </div>
                    </li>
                    <li  class="text-primary"> <i class="fas fa-hand-holding-usd"></i>Issued Books </li>
                    <hr>
                    <li  class="text-primary"> <i class="fas fa-torah"></i> Bookings</li>
                    <hr>
                    <li  class="text-primary"> <i class="fab fa-btc"></i> Manage Fines</li>
                    <hr>
                    <li  class="text-primary"> <i class="far fa-address-card"></i> About</li>
                    <hr>
                    <li  class="text-primary"> <i class="fas fa-cogs    "></i> Settings</li>
                    <hr>
                    <li  class="text-primary"> <i class="fas fa-cogs    "></i> About Software</li>
                    <hr>
                </ul>
               </div>
            </div>
            </aside>
        </div>
        <div class="col-md-8">

        
        </div>
    </div>
</div>    

<script>
new WOW().init();
</script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
</body>
</html>