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
<body style="background-color:slategray">;
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand black-text" href="#"> <img class="img-fluid" src="img/azahublogo.png" height="120rem" width="100rem" alt=""> <span class="text-uppercase text-white" style="padding-left: 400px"> <strong> Online Library Management System</strong></span> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
  <ul class="navbar-nav ml-auto nav-flex-icons">
  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user-cog text-white" display-5></i> Manage Account
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

      <div class="col-md-9">
      <div class="col-md-12">
       <!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">View All Issued Books</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Person Name</th>
            <th class="text-center">Age</th>
            <th class="text-center">Company Name</th>
            <th class="text-center">Country</th>
            <th class="text-center">City</th>
            <th class="text-center">Sort</th>
            <th class="text-center">Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">30</td>
            <td class="pt-3-half" contenteditable="true">Deepends</td>
            <td class="pt-3-half" contenteditable="true">Spain</td>
            <td class="pt-3-half" contenteditable="true">Madrid</td>
            <td class="pt-3-half">
              <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                    aria-hidden="true"></i></a></span>
              <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                    aria-hidden="true"></i></a></span>
            </td>
            <td>
              <span class="table-remove"><button type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
            </td>
          </tr>
          <!-- This is our clonable table line -->
          <tr>
            <td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
            <td class="pt-3-half" contenteditable="true">45</td>
            <td class="pt-3-half" contenteditable="true">Insectus</td>
            <td class="pt-3-half" contenteditable="true">USA</td>
            <td class="pt-3-half" contenteditable="true">San Francisco</td>
            <td class="pt-3-half">
              <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                    aria-hidden="true"></i></a></span>
              <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                    aria-hidden="true"></i></a></span>
            </td>
            <td>
              <span class="table-remove"><button type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
            </td>
          </tr>
          <!-- This is our clonable table line -->
          <tr>
            <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
            <td class="pt-3-half" contenteditable="true">26</td>
            <td class="pt-3-half" contenteditable="true">Isotronic</td>
            <td class="pt-3-half" contenteditable="true">Germany</td>
            <td class="pt-3-half" contenteditable="true">Frankfurt am Main</td>
            <td class="pt-3-half">
              <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                    aria-hidden="true"></i></a></span>
              <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                    aria-hidden="true"></i></a></span>
            </td>
            <td>
              <span class="table-remove"><button type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
            </td>
          </tr>
          <!-- This is our clonable table line -->
          <tr class="hide">
            <td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
            <td class="pt-3-half" contenteditable="true">31</td>
            <td class="pt-3-half" contenteditable="true">Portica</td>
            <td class="pt-3-half" contenteditable="true">United Kingdom</td>
            <td class="pt-3-half" contenteditable="true">London</td>
            <td class="pt-3-half">
              <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                    aria-hidden="true"></i></a></span>
              <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                    aria-hidden="true"></i></a></span>
            </td>
            <td>
              <span class="table-remove"><button type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
            </td>
          </tr>
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
     <script>
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
       //wow amination
    new WOW().init();
    </script>
</body>
</html>