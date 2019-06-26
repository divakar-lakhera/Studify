<?php
session_start();
include "db_php/db_settings.php";
if(isset($_GET['ginf']))
{
   if(isset($_GET['sid']))
   {
   $_SESSION['stu_g']=$_GET['sid'];
   }
   else
   {
    $_SESSION['stu_g']=0;
   }
}
if(isset($_GET['updt']))
{
  $sid=$_SESSION['stu_g'];
$con=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
    if(isset($_GET['g1']) && $_GET['g1'] != '' )
    {
        $n=$_GET['g1'];
        $nn=$_GET['cid1'];
        $qu="update student_courses set std_grade='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['g2']) && $_GET['g2'] != '')
    {
        $n=$_GET['g2'];
        $nn=$_GET['cid2'];
        $qu="update student_courses set std_grade='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['g3']) && $_GET['g3'] != '')
    {
        $n=$_GET['g3'];
        $nn=$_GET['cid3'];
        $qu="update student_courses set std_grade='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['g4'])&& $_GET['g4'] != '')
    {
        $n=$_GET['g4'];
        $nn=$_GET['cid4'];
        $qu="update student_courses set std_grade='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['g5']) && $_GET['g5'] != '')
    {
        $n=$_GET['g5'];
        $nn=$_GET['cid5'];
        $qu="update student_courses set std_grade='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['g6']) && $_GET['g6'] != '')
    {
        $n=$_GET['g6'];
        $nn=$_GET['cid6'];
        $qu="update student_courses set std_grade='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['a1']) && $_GET['a1'] != '' )
    {
        $n=$_GET['a1'];
        $nn=$_GET['cid1'];
        $qu="update student_courses set std_attd='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['a2']) && $_GET['a2'] != '')
    {
        $n=$_GET['a2'];
        $nn=$_GET['cid2'];
        $qu="update student_courses set std_attd='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['a3']) && $_GET['a3'] != '')
    {
        $n=$_GET['a3'];
        $nn=$_GET['cid3'];
        $qu="update student_courses set std_attd='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['a4'])&& $_GET['a4'] != '')
    {
        $n=$_GET['a4'];
        $nn=$_GET['cid4'];
        $qu="update student_courses set std_attd='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['a5']) && $_GET['a5'] != '')
    {
        $n=$_GET['a5'];
        $nn=$_GET['cid5'];
        $qu="update student_courses set std_attd='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['a6']) && $_GET['a6'] != '')
    {
        $n=$_GET['a6'];
        $nn=$_GET['cid6'];
        $qu="update student_courses set std_attd='$n' where std_id=$sid and std_courseID='$nn';";
        mysqli_query($con,$qu);
    }
    if(isset($_GET['gt']) && $_GET['gt'] != '')
    {
        $n=$_GET['gt'];
        $nn=$_GET['sem'];
        $qu="update student_grade set std_cgpa='$n' where std_id=$sid and std_sem='$nn';";
        mysqli_query($con,$qu);
    }
  mysqli_close($con);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AMS | Make College Easier">
    <meta name="author" content="Divakar Lakhera">
    <title>AMS|Update Grades</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
     <link href="bootstrap4-res/css/bootstrap.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">
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
          <li class="nav-item pb-2" >
            <a class="nav-link" href="stdinfo_profile.php">
              <span data-feather="gitlab"></span>
              Profile
            </a>
          </li>
          <li class="nav-item pb-2" >
            <a class="nav-link active" href="#">
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
        </ul>
        <hr>
        <p align="center" style="margin-top:15px" class="text-muted">AMS | Make College Easier</p>
        <p align="center" style="margin-top:-13px" class="text-muted">&copy; Divakar Lakhera</p>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top:20px;">
    <p class="display-4 pt-4 animated fadeInDown">Modify Grades/Attendence</p>
    <form class="form-group d-flex">
      <input type="text" placeholder="Student ID" class="form-control animated fadeInDown" name="sid" style="width:150px;" autofocus>
      <input type="submit" name="ginf" placeholder="Get Info" class="form-control btn btn-outline-info animated fadeInDown" value="Get Info" style="margin-left:5px;width:100px">
    </form>
    <hr>
     <div id="smain">
    <form class="form-group">
     <div class="table-responsive animated fadeInUp">
       <table class="table table-striped table-sm">
       <thead>
            <tr>
              <th width="100px">Course ID</th>
              <th >Course Name</th>
              <th >Grade</th>
              <th >Attendence</th>
            </tr>
          </thead>
          <tbody >
            <tr>
              <td class="h6" id="c1" name="c1">Course 1</td>
              <td class="h6" id="c1n"> Course Name 1</td>
              <td><input type="text" class="form-control" placeholder="grade" id="g1" name="g1" style="width:48px"></td>
              <td><input type="text" class="form-control" placeholder="per" id="a1"   name="a1" style="width:66px"></td>
              <td><input type="hidden" name="cid1" id="cid1" value=""></td>
            </tr>
            <tr>
              <td class="h6" id="c2">Course 1</td>
              <td class="h6" id="c2n"> Course Name 1</td>
              <td><input type="text" class="form-control" placeholder="grade" id="g2" name="g2" style="width:48px"></td>
              <td><input type="text" class="form-control" placeholder="per" id="a2" name="a2" style="width:66px"></td>
              <td><input type="hidden" name="cid2" id="cid2" value=""></td>
            </tr>
            <tr>
              <td class="h6" id="c3">Course 1</td>
              <td class="h6" id="c3n"> Course Name 1</td>
              <td><input type="text" class="form-control" placeholder="grade" id="g3" name="g3" style="width:48px"></td>
              <td><input type="text" class="form-control" placeholder="per" id="a3" name="a3" style="width:66px"></td>
              <td><input type="hidden" name="cid3" id="cid3" value=""></td>
            </tr>
            <tr>
              <td class="h6" id="c4">Course 1</td>
              <td class="h6" id="c4n"> Course Name 1</td>
              <td><input type="text" class="form-control" placeholder="grade" id="g4" name="g4"  style="width:48px"></td>
              <td><input type="text" class="form-control" placeholder="per" id="a4" name="a4" style="width:66px"></td>
              <td><input type="hidden" name="cid4" id="cid4" value=""></td>
            </tr>
            <tr>
              <td class="h6" id="c5">Course 1</td>
              <td class="h6" id="c5n"> Course Name 1</td>
              <td><input type="text" class="form-control" placeholder="grade" id="g5" name="g5" style="width:48px"></td>
              <td><input type="text" class="form-control" placeholder="per" id="a5" name="a5" style="width:66px"></td>
              <td><input type="hidden" name="cid5" id="cid5" value=""></td>
            </tr>
            <tr>
              <td class="h6" id="c6">Course 1</td>
              <td class="h6" id="c6n"> Course Name 1</td>
              <td><input type="text" class="form-control" placeholder="grade" id="g6" name="g6" style="width:48px"></td>
              <td><input type="text" class="form-control" placeholder="per" id="a6" name="a6" style="width:66px"></td>
              <td><input type="hidden" name="cid6" id="cid6" value=""></td>
            </tr>
          </tbody>
        </table>
        <br>
        <br>
        <div class="d-flex  align-content: center">
        <label style="font-size:18px; margin-right:5px;width:110px;margin-top:6px ">Overall Score:</label>
        <input type="text" class="form-control" placeholder="Semester Overall" id="gt" name ="gt"style="width:200px; margin-right:5px;">
          <select id="sem" name="sem">
          <option value="1">First</option>
          <option value="2">Second</option>
          <option value="3">Third</option>
          <option value="4">Fourth</option>
          <option value="5">Fifth</option>
          <option value="6">Sixth</option>
          <option value="7">Seventh</option>
          <option value="8">Eight</option>
        </select>
        </div>
        <br>
        <br>
        <input type="submit" id="upd" name="updt" value="Update Records" class="btn btn-info btn-lg">
      </form>
     </div>
    </main>
  </div>
</div>
        <script src="js/feather.js"></script>
        <script src="js/chart-min.js"></script>
        <script src="js/std-default.js"></script>
        <script src="js/std-main.js"></script>
        <script src="js/facOnLoad.js"></script>
      </body>
</html>

