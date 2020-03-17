
<?php
require_once ('dbconnection.php');

$query = "SELECT * from `students`";
$result1 = mysqli_query($conn, $query);

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
  <!--custom fonts-->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Baskervville|Cormorant|Kaushan+Script|Merienda|Niconne|Tangerine&display=swap');
  </style>
<link rel="stylesheet" href="css/custom.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Barlow|Lato|Source+Code+Pro|Varela+Round&display=swap');
</style>
  <title>AZAHUB - OLibrary System</title>
  </title>
</head>
<body style="background-color:#f8f8fd;" >
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark " style="font-family: 'Varela Round', sans-serif;">
  <a class="navbar-brand black-text" href="#"> <img class="img-fluid" src="img/azahublogo.png" height="120rem" width="100rem" alt=""> <span class="text-uppercase pink-text" style="padding-left: 400px"> <strong> Online Library Management System</strong></span> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
  <ul class="navbar-nav ml-auto nav-flex-icons">
  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle pink-text" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user-cog pink-text" display-5></i> Manage Account
  </a>
  <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
  <a class="dropdown-item text-primary" href="#"> <i class="fa fa-user" aria-hidden="true"></i> My Profile</a></a>
  <a class="dropdown-item text-primary" href="change_password.php"> <i class="fa fa-cog" aria-hidden="true"></i> Change Password</a>
  <a class="dropdown-item text-primary" href="#"> <i class="fas fa-user-cog    "></i> Update Details</a>
  <a class="dropdown-item text-primary" href="logout.php"> <i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
  </div>
  </li>
  </ul>
  </div>
  </nav>
  <!--Navbar -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <?php include_once('sidebar.php') ?>
      </div>

      <div class="col-lg-10">
      <div class="row">
     
          <div class="col-md-12">
<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4 wow fadeInDown pink-text" style="font-family: 'Varela Round', sans-serif;">AZAHUB- <span class="text-lowercase">View All Students</span></h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
          <th class="text-center text-secondary">ID</th>
            <th class="text-center text-secondary">Student ID</th>
            <th class="text-center text-secondary">Firstname</th>
            <th class="text-center text-secondary">Lastname</th>
            <th class="text-center text-secondary">Sirname</th>
            <th class="text-center text-secondary">Email</th>
            <th class="text-center text-secondary">Course</th>
            <th class="text-center text-secondary">Year</th>
            <th class="text-center text-secondary">Phone</th>
            <th class="text-center text-secondary">Address</th> 
            <th class="text-center text-secondary">Department</th>
            <th class="text-center text-secondary">Gender</th>       
          </tr>
        </thead>
        <tbody>
        <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                <td><?php echo $row1[4];?></td>
                <td><?php echo $row1[5];?></td>
                <td><?php echo $row1[6];?></td>
                <td><?php echo $row1[7];?></td>
                <td><?php echo $row1[8];?></td>
                <td><?php echo $row1[9];?></td>
                <td><?php echo $row1[10];?></td>
                <td><?php echo $row1[13];?></td>


            </tr>
            <?php endwhile;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
          
          </div>
        
      </div>

      </div>
    </div>


  <?php include_once('footer.php'); ?>
    <!-- JQuery -->


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>

  <script>
       //wow amination

    new WOW().init();

    //slide
    $(document).foundation();

    const $tableID = $('#table');
 const $BTN = $('#export-btn');
 const $EXPORT = $('#export');

 const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

 $('.table-add').on('click', 'i', () => {

   const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

   if ($tableID.find('tbody tr').length === 0) {

     $('tbody').append(newTr);
   }

   $tableID.find('table').append($clone);
 });

 $tableID.on('click', '.table-remove', function () {

   $(this).parents('tr').detach();
 });

 $tableID.on('click', '.table-up', function () {

   const $row = $(this).parents('tr');

   if ($row.index() === 1) {
     return;
   }

   $row.prev().before($row.get(0));
 });

 $tableID.on('click', '.table-down', function () {

   const $row = $(this).parents('tr');
   $row.next().after($row.get(0));
 });

 // A few jQuery helpers for exporting only
 jQuery.fn.pop = [].pop;
 jQuery.fn.shift = [].shift;

 $BTN.on('click', () => {

   const $rows = $tableID.find('tr:not(:hidden)');
   const headers = [];
   const data = [];

   // Get the headers (add special header logic here)
   $($rows.shift()).find('th:not(:empty)').each(function () {

     headers.push($(this).text().toLowerCase());
   });

   // Turn all existing rows into a loopable array
   $rows.each(function () {
     const $td = $(this).find('td');
     const h = {};

     // Use the headers from earlier to name our hash keys
     headers.forEach((header, i) => {

       h[header] = $td.eq(i).text();
     });

     data.push(h);
   });

   // Output the result
   $EXPORT.text(JSON.stringify(data));
 });
  </script>

</body>

</html>