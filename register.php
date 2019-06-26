<?php
 /* 
    CODE To REGISTER USER 
    Written By: Divakar Lakhera
  */
   include "db_php/db_settings.php";
   $lnk=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
   if(isset($_POST['reg'])){
   
    $name=$_POST['uname']." ".$_POST['usname'];
    $em=$_POST['umail'];
    $ph=$_POST['phno'];
    $pwd=md5(($_POST['upass']));
    $branch=$_POST['coid'];
    $croll=$_POST['coroll'];
    $dob=$_POST['dob'];
    $gen=$_POST['gender'];
    if($gen == 'M')
    {
      $dp="res/mstd.svg";
    }
    else
    {
      $dp="res/girl.svg";
    }
    $q="insert into student(std_name,std_branch,std_pwd,std_email,std_phno,std_dpLoc,collRollNo) values('$name','$branch','$pwd','$em',$ph,'$dp','$croll');";
    mysqli_query($lnk,$q);
    echo mysqli_error($lnk); 
    header('location:index.php');
  }
   mysqli_close($lnk);
 ?>

<!doctype html>
<html>
    <head>
        <title>AMS |Register</title>
        <meta name="charset" content="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="author" content="Divakar Lakhera">
        <meta name="description" content="Registraion page for Students">  
                                               
        <!--Animate CSS-->
        <link rel="stylesheet" href="css/animate.css">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="bootstrap4-res/css/bootstrap.min.css">
        <!--Custom CSS-->
        <link rel="stylesheet" href="css/rstyle.css">
 
        
          <!--JQuery,Popper & Bootstrap-->  
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script> 
          <script src="bootstrap4-res/js/bootstrap.min.js"></script>  

         
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body width="100%">
        <div id="nbar" class="d-flex align-items-center p-3 flex-md-row flex-column border-bottom bottom-shdw animated fadeInDown">
           <img src="res/astronaut.svg" id="logo" class="img-fluid animated zoomIn" height="55" width="55">
            <h2 class="mr-md-auto animated fadeInLeft" style="font-family: 'Macondo Swash Caps', cursive;" id="cid">AMS</h2>
          <nav class="animated fadeInDown navbar">
                <div id="links">

                <button type="button" onclick="location.href='index.php'" style="margin-left:17px; margin-top:5px;" class="btn btn-outline-success btn-lg mr-4 animated fadeInDown ">Sign In</button>
                </nav>
                </nav>
            
            </div>
    <form style="font-family: 'Roboto', sans-serif;" method="POST">
    <div class="form-group">
       <h1 class="text-weight-normal animated fadeInDown" id="text1">Create an Account</h1>
    </div>
    <div class="form-group">
        <h6 class="text-weight-normal animated fadeInDown" id="text2">Signup and <font style="font-family: 'Macondo Swash Caps', cursive;">&copy; AMS</font> your college life.</h6>
    </div>
    <div class="form-group" id="nsin">
        <input type="text" class="form-control animated fadeInDown" name="uname" placeholder="Name">
        <input type="text" class="form-control animated fadeInDown" name="usname" placeholder="Surname">
    </div>
    <div class="form-group">
        <input type="email" class="form-control animated fadeInDown" name="umail" placeholder="Email">
    </div>
    <div class="form-group" style="width:405px;">
        <input type="number" class="form-control animated fadeInDown" name="phno" placeholder="Mobile Number">
    </div>
    <div class="form-group">
            <input type="password" class="form-control animated fadeInDown" name="upass" style="width:405px;" placeholder="Password">
    </div>
    <div class="form-group">
            <input type="password" class="form-control animated fadeInDown" name="upassc"style="width:405px;" placeholder="Retype Password">
    </div>
    <div class="form-group" id="collInfo">
        <input type="text" class="form-control animated fadeInDown" name="coid" placeholder="Branch">
        <input type="text" class="form-control animated fadeInDown" name="coroll" placeholder="College ID/Roll No">
    </div>
    <div id="bdlabel">
    <label class="h7 animated fadeInDown" style="margin-right:200px">Date of Birth:</label>
    </div>
    <div class="form-group" id="dd">
        <input type="date" class="form-control animated fadeInDown" name="dob" placeholder="Date Of Birth">
    </div>
    <div class="form-group" id="gg" style="width:100px; margin-top:-85px; margin-left:-80px">
        <label class="h7 animated fadeInDown">Gender:</label>
      <select name="gender" class="form-control animated fadeInDown">
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="O">Others</option>
      </select>
        
    </div>
    <div class="form-group" id="tac">
        <input type="checkbox" name="tac" class="form-check-input animated fadeInDown" placeholder="Terms And Condition">
        <label class="animated fadeInDown"style="font-size:15px">By Clicking on this box,you agree to <a href="tac.html">Terms & Conditions</a></label>
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-primary btn-block animated fadeIn" style="margin-right:320px" placeholder="Register"name="reg">Register</button>
    </div>
    </form>
    <div id="carousel" name="car" class="carousel slide animated fadeIn bottom-shdw" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-tarPOST="#carouselIndicators" data-slide-to="0" class="active"></li>
          <li data-tarPOST="#carouselIndicators" data-slide-to="1"></li>
          <li data-tarPOST="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid rounded" src="res/check-prog.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated fadeInUp h2"style="color:#f5f5f5">Check Your Progress</h5>
                <p class="animated fadeInUp "style="color:#f5f5f5">AMS lets you track your grades and help you to perform better.</p>
                </div>
            </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid rounded" src="res/cloud-storage.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated fadeInUp h2" style="color:#f5f5f5">Always Connected</h5>
                <p class="animated fadeInUp" style="color:#f5f5f5">AMS saves all its data to cloud so that you can access it anywhere,anytime.</p>
                </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid rounded" src="res/teach-stud.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated fadeInUp h2">Modify records in a go</h5>
                <p class="animated fadeInUp">AMS gives powerful dynamic tools for teachers to modify their student's record.</p>
                </div>
          </div>
        </div>
       
      </div>
      <br>
      <hr width="900px" size="10" class="border-bottom bottom-shdw animated bounceInUp" style="margin-top:100px">
      <br>
      <p class="text-muted animated bounceInUp"  id="cptrt"  style="margin-top:-30px;margin-left:600px">AMS &copy; Divakar Lakhera 2018-19</p>
    </body>
</html>
