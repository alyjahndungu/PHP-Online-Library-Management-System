
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

<body style="background-color:slategray">;


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
      <div class="col-md-2" style="background-image: url('img/room.webp')">
     
        <?php include_once('sidebar.php') ?>
      </div>

      <div class="col-lg-9">
      <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Manage Students</a></li>
        <li class="breadcrumb-item"><a href="add_student.php">Add Student</a></li>
    </ol>
 </nav>
            <!--form for add students-->
            <form action="insert_student.php" method="post">
             <div class="row">
                 <div class="col-sm-4">
                 <div class="form-group">
                   <label for=""> <i class="fas fa-id-card  fa-2x   "></i> Student ID Number </label>
                       <input type="number" name="studentid" id="" class="form-control" placeholder="Student ID" aria-describedby="helpId">  
                     </div>

                     <div class="form-group">
                   <label for=""> <i class="fas fa-user-plus  fa-2x  "></i> Firstname</label>
                       <input type="text" name="firstname" id="" class="form-control" placeholder="Firstname" aria-describedby="helpId">  
                     </div>

                     <div class="form-group">
                   <label for=""> <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i> Lastname</label>
                       <input type="text" name="lastname" id="" class="form-control" placeholder="Lastname" aria-describedby="helpId">  
                     </div>

                     <div class="form-group">
                    <label for=""> <i class="fas fa-user-plus   "></i> Sirname</label>
                       <input type="text" name="sirname" id="" class="form-control" placeholder="Sirname" aria-describedby="helpId">  
                     </div>

                     <div class="form-group">
                    <label for=""> <i class="fas fa-envelope    "></i> Email</label>
                       <input type="email" name="email" id="" class="form-control" placeholder="azahub@gmail.com" aria-describedby="helpId">  
                     </div>
                 </div>

                 <div class="col-sm-4">
                 <div class="form-group">
                    <label for=""> <i class="fas fa-sticky-note    "></i> Course Name</label>
                       <input type="text" name="course_name" id="" class="form-control" placeholder="Course name" aria-describedby="helpId">  
                     </div>

                     <div class="form-group">
                         <label for="my-select"> <i class="fas fa-calendar-alt   "></i> Year</label>
                         <select id="my-select" class="custom-select" name="year">
                             <option value="First Year">1st Year</option>
                             <option value="Second Year">2nd Year</option>
                             <option value="Third Year">3rd Year</option>
                             <option value="Forth Year">4th Year</option>
                             <option value="Fifth Year">5th Year</option>
                             <option value="Sixth Year">6th Year</option>
                         </select>
                     </div>

                     <div class="form-group">
                    <label for=""> <i class="fas fa-phone-square    "></i> Phone Number</label>
                       <input type="number" name="phone_no" id="" class="form-control" placeholder="Phone No." aria-describedby="helpId">  
                     </div>

                     <div class="form-group">
                    <label for=""> <i class="fas fa-map-marker-alt  "></i> Address</label>
                       <input type="text" name="address" id="" class="form-control" placeholder="Address" aria-describedby="helpId">  
                     </div>

                   </div>

                 <div class="col-sm-4">
                
                 <div class="form-group">
                     <label for="my-select"> <i class="fas fa-sticky-note    "></i> Department</label>
                     <select id="my-select" class="custom-select" name="department">
                         <option value="Centre for Pedagogy & Andragogy">Centre for Pedagogy & Andragogy</option>
                         <option value="Agricultural Economics">Agricultural Economics</option>
                         
                         <option value="Medical Microbiology"> Medical Microbiology</option>
                         <option value="Pharmacology and Pharmacognosy"> Pharmacology and Pharmacognosy</option>

                         <option value="Obstetrics & Gynaecology"> Obstetrics & Gynaecology</option>
                         <option value="Diagnostic Imaging & Radiation Medicine">Diagnostic Imaging & Radiation Medicine </option>

                         <option value=""> Clinical Medicine and Therapeutics</option>
                         <option value=""> Institute of Tropical & Infectious Diseases</option>

                         <option value="">Periodontology/Community and Preventive Dentistry </option>
                         <option value=""> Education Communication and Technology</option>

                         <option value="">Civil and Construction Engineering</option>
                         <option value="">Electrical and Information Engineering </option>

                         <option value=""> School of Mathematics</option>
                         <option value="">School of Computing and Informatics </option>

                         <option value=""> Urban and Regional Planning</option>
                         <option value="">Real Estate and Construction Management </option>

                         <option value="">Architecture and Building Science </option>
                         <option value="">Nuclear Science & Technology </option>

                         <option value=""> Geospatial and Space Technology</option>
                         <option value=""> Mechanical and Manufacturing Engineering</option>

                         <option value=""> School of Biological Sciences</option>
                         <option value="">Centre for Biotechnology & Bioinformatics </option>

                         <option value=""> Veterinary Pathology, Microbiology & Parasitology</option>
                         <option value="">Vet. Anatomy and Physiology </option>

                         <option value="">Animal Production </option>
                         <option value=""> The Center for Sustainable Dryland Ecosystems and Societies</option>

                         <option value=""> Plant Science and Crop Protection</option>
                         <option value="">Land Resource Management & Agricultural Technology </option>

                         <option value="">Food Science, Nutrition and Technology </option>
                         <option value=""> Field Station</option>

                     </select>
                 </div>

                     <div class="form-group">
                    <label for=""> <i class="fas fa-city    "></i> City</label>
                       <input type="text" name="city" id="" class="form-control" placeholder="City" aria-describedby="helpId">  
                     </div>

                     <div class="form-group">
                    <label for=""> <i class="fa fa-map-pin" aria-hidden="true"></i> State</label>
                    <input type="text" name="state_name" id="" class="form-control" placeholder="State" aria-describedby="helpId">  
                     </div>
                       
                     <label for=""> <i class="fas fa-users "></i> Select Gender</label>
                     <div class="form-check">
                         <label class="form-check-label">
                         <input type="radio" class="form-check-input" name="gender" id="" value="male" checked="checked">
                       <i class="fas fa-male  "></i>  Male
                       </label>
                     </div>

                     <div class="form-check">
                         <label class="form-check-label">
                         <input type="radio" class="form-check-input" name="gender" id="" checked="checked" value="female">
                     <i class="fas fa-female"></i>    Female
                       </label>
                     </div>


                 </div>
                 <button type="submit" name="submit" class="btn rounded-pill btn-outline-warning ">Add Student</button>

</form>
                 
             </div>
              
            
      </div>

    </div>
  </div>

  <?php include_once('footer.php'); ?>
  <script>
       //wow amination

    new WOW().init();

    //slide
    $(document).foundation();
  </script>

</body>

</html>