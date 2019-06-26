<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AMS | Make College Easier">
    <meta name="author" content="Divakar Lakhera">
    <title>AMS|Dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
     <link href="bootstrap4-res/css/bootstrap.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/std-main-custom.css" rel="stylesheet">
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
        <ul class="nav flex-column " >
          <li class="nav-item pb-2">
              <div name="userInfo" class="uidBar font-width-normal">
              <img id="dp" src="res/mstd.svg" height="60" width="60" style="margin-top:35px ;margin-left:5px; margin-bottom:10px;"class="img-fluid img-circle">
               <b><p id="uname" name="usrname">Divakar Lakhera</p><br>
              <p align="center" id="brn" name="brn"style="margin-bottom:40px; margin-top:-40px; font-size: 13px;">"BT18"</p></b>
              <p align="center" id="collName" name="cName" style="margin-top:-30px; font-size: 13px;">National Institute Of Technology<br>Uttarakhand</p>
              </div>
             <hr style="margin-top:-1px;">
          </li>
          <div id="std-content" >
          <li class="nav-item pb-2 " style="margin-top:-10px;">
            <a class="nav-link active" href="stdinfo.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link" href="stdinfo_profile.php">
              <span data-feather="gitlab"></span>
              Profile
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"  href="stdinfo_notice.php">
              <span data-feather="bell"></span>
              Notices
            </a>
          </li>
          <li class="nav-item pb-2">
            <a class="nav-link"   href="stdinfo_collEvent.php">
              <span data-feather="bar-chart-2"></span>
             College Events
            </a>
          </li>
     
        </div>
         <div id="fac-content">
         <li class="nav-item pb-2" >
            <a class="nav-link active" href="#">
              <span data-feather="gitlab"></span>
              Profile
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link" href="stdinfo_facG.php">
              <span data-feather="bar-chart-2"></span>
              Update Grades
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"   href="#">
              <span data-feather="layers"></span>
              Update Attendence
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"   href="#">
              <span data-feather="bell"></span>
              Create Notice
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"   href="#">
              <span data-feather="globe"></span>
              Create Event Notification
            </a>
          </li>
            </div>
        </ul>
        <hr>
        <p align="center" style="margin-top:15px" class="text-muted">AMS | Make College Easier</p>
        <p align="center" style="margin-top:-13px" class="text-muted">&copy; Divakar Lakhera</p>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top:20px;">
    <div id="std-content2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 display-4 animated fadeInLeft">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <p style="margin-right:5px; margin-top:12px;font-size:20px; margin-bottom:-1px;" class="animated fadeInRight">Current CGPA:</p>
          <p id="cgpa" class="animated fadeInRight" value="0" style="font-size:20px; padding: 1px; width:43px; height:25px;padding-bottom:2px;margin-top:11px;"></p>
        </div>
      </div>
       
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2 class="display-4 animated fadeInUp">Semester Overview</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No.</th>
              <th>Subject Code</th>
              <th>Subject Name</th>
              <th>Attendence</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td id="s1c">ECB101</td>
              <td id="s1n">Basic Electronic Engg.</td>
              <td id="s1ap">80%</td>
              <td id="s1g">BB</td>
            </tr>
            <tr>
                <td>2</td>
                <td id="s2c">ECB101</td>
                <td id="s2n">Basic Electronic Engg.</td>
                <td id="s2ap">80%</td>
                <td id="s2g">BB</td>
            </tr>
            <tr>
                  <td>3</td>
                  <td id="s3c">ECB101</td>
                  <td id="s3n">Basic Electronic Engg.</td>
                  <td id="s3ap">80%</td>
                  <td id="s3g">BB</td>
             </tr>
             <tr>
                <td>4</td>
                <td id="s4c">ECB101</td>
                <td id="s4n">Basic Electronic Engg.</td>
                <td id="s4ap">80%</td>
                <td id="s4g">BB</td>
           </tr>
           <tr>
              <td>5</td>
              <td id="s5c">ECB101</td>
              <td id="s5n">Basic Electronic Engg.</td>
              <td id="s5ap">80%</td>
              <td id="s5g">BB</td>
         </tr>
         <tr>
            <td>6</td>
            <td id="s6c">ECB101</td>
            <td id="s6n">Basic Electronic Engg.</td>
            <td id="s6ap">80%</td>
            <td id="s6g">BB</td>
       </tr>
          </tbody>
        </table>
      </div>
</div>
   <div id="fac-content2">
</div>
    </main>
  </div>
</div>
        <script src="js/feather.js"></script>
        <script src="js/chart-min.js"></script>
        <script src="js/std-main.js"></script></body>
</html>

