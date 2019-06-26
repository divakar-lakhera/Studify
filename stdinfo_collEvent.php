
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AMS | Make College Easier">
    <meta name="author" content="Divakar Lakhera">
    <title>AMS|College Events</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
     <link href="bootstrap4-res/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/std-main-custom.css" rel="stylesheet">
    <link href="css/std-main-custom-profile.css" rel="stylesheet">
    
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light flex-md-nowrap p-0 shadow">
        <img src="res/astronaut.svg" id="logo" style="margin-left:10px;" class="img-fluid img-circle animated zoomIn" height="30" width="40">
  <a class="  col-sm-3 col-md-2 mr-0 font-width-normal" style="padding:10px;margin-bottom:-2px;font-family: 'Satisfy', cursive;font-size:30px;" href="#""><font color="Black">AMS</font></a>
  <input class="form-control  w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link btn btn-info p-2" href="index.php?deauth=1"><font color="white">Sign out</font></a>
    </li>
  </ul>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column ">
          <li class="nav-item pb-2">
              <div name="userInfo" class="uidBar font-width-normal">
              <img id="dp" src="res/mstd.svg" height="60" width="60" style="margin-top:35px ;margin-left:5px; margin-bottom:10px;"class="img-fluid img-circle">
               <b><p id="uname" name="usrname">Divakar Lakhera</p><br>
              <p align="center" id="brn" name="brn"style="margin-bottom:40px; margin-top:-40px; font-size: 13px;">"BT18"</p></b>
              <p align="center" id="collName" name="cName" style="margin-top:-30px; font-size: 13px;">National Institute Of Technology<br>Uttarakhand</p>
              </div>
             <hr style="margin-top:-1px;">
          </li>
          <li class="nav-item pb-2 " style="margin-top:-10px;">
            <a class="nav-link" href="stdinfo.php">
              <span data-feather="home"></span>
              Dashboard 
            </a>
          </li>
          <li class="nav-item pb-2">
            <a class="nav-link " href="stdinfo_profile.php">
              <span data-feather="gitlab"></span>
              Profile
            </a>
          </li>
          <li class="nav-item pb-2 ">
            <a class="nav-link" href="stdinfo_notice.php">
              <span data-feather="bell"></span>
              Notices<span class="sr-only">(current)</span>
            </a>
          </li>
      
    
          <li class="nav-item pb-2">
            <a class="nav-link active" href="stdinfo_collEvent.php">
              <span data-feather="bar-chart-2"></span>
             College Events<span class="sr-only">(current)</span>
            </a>
          </li>
       
        </ul>
        <hr>
        <p align="center" style="margin-top:15px" class="text-muted">AMS | Make College Easier</p>
        <p align="center" style="margin-top:-13px" class="text-muted">&copy; Divakar Lakhera</p>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top:20px;">
     <h1 class="display-4 pt-3 animated fadeInLeft">
       College Events</h1>
       <hr>
       <div class="table-responsive animated fadeInUp">
       <table class="table table-striped table-sm">
       <thead>
            <tr>
              <th width="120px">College Name</th>
              <th>Event Info</th>
            </tr>
          </thead>
          <tbody id="fafafa">
     
          </tbody>
     
    </main>
  </div>
</div>
        <script src="js/feather.js"></script>
        <script src="js/chart-min.js"></script>
        <script src="js/std-default.js"></script>
        <script src="js/onLoad.cNotice.js"></script>
      </body>
</html>

