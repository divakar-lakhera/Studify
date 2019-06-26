<?php
  // Script To Update Student Data (Requires Login)
  session_start();
  $ut=$_SESSION['ltype'];
if(isset($_POST['dpSub']))
{ 
  if(isset($_POST['un']))
  $name=$_POST['un'];
  
  if(isset($_POST['emm']))
  $email=$_POST['emm'];

  if(isset($_POST['up']))
  $phno=$_POST['up'];
  $dpLoc="";
  if(!empty($_FILES['img']['name']))
  {
    if($ut==1){
    $target_dir = "usr/";}
    else{
    $target_dir = "usr/tech/";}
    $target_file = $target_dir .rand(0,20).basename($_FILES["img"]["name"]);
    $dpLoc=$target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["img"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "svg" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "ok";
        } else {
            echo "error";
        }
    }


  }
  header("location:db_php/db_update.php?name=$name&email=$email&phno=$phno&dpl=$dpLoc");
}
?>  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AMS | Make College Easier">
    <meta name="author" content="Divakar Lakhera">
    <title>AMS|Profile</title>

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
            <a class="nav-link" href="stdinfo.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link active" href="stdinfo_profile.php">
              <span data-feather="gitlab"></span>
              Profile
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"  href="stdinfo_notice.php">
              <span data-feather="bell"></span>
              Notices  <span class="sr-only">(current)</span>
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
            <a class="nav-link active"   href="#">
              <span data-feather="gitlab"></span>
              Profile
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"   href="stdinfo_facG.php">
              <span data-feather="bar-chart-2"></span>
              Update Grades/Attendence
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"   href="stdinfo_facN.php">
              <span data-feather="bell"></span>
              Create Notice
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link"   href="stdinfo_facEN.php">
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
    <h1 class="display-4 mt-4 animated fadeInDown">
      My Profile
</h1>
<hr>
      <div class="container-fluid align-Contents px-0">
      <img src="" class="img-fluid img-circle mx-5 mt-4 animated bounceIn" width="400" id="dpBig" height="400">
      <form method="POST" class="form-group mt-5 " enctype="multipart/form-data" >
        <input type="text" class="mx-0 form-control mb-2 animated fadeInUp" style="width:250px" id="ucname" name="un" placeholder="ERROR"> 
        <input type="number"class="mx-0 form-control mb-2 animated fadeInUp"  style="width:250px" id="ucphno" name="up" placeholder="ERROR">
        <input type="email"class="mx-0 form-control mb-2 animated fadeInUp"  style="width:250px" id="em" name="emm" placeholder="ERROR">
        <p class="mt-4 mb-2 animated fadeInUp" style="margin-left:60px;font-family: 'Roboto', cursive;">Change Profile Picture</p>
        <input type="file"class="mx-4 animated fadeInUp" name="img">
        <br>
        <br>
        <input type="submit" class="btn btn-outline-info  my-0 animated fadeInUp" style="margin-left:55px;" name="dpSub" value="Update Profile">
      </form>
    </div>
    </main>
  </div>
</div>
        <script src="js/feather.js"></script>
        <script src="js/chart-min.js"></script>
        <script src="js/std-main-profile.js"></script>
       
       
</html>

