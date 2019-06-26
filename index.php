<?php
 session_start();
 // SignIn mechanism for AMS
 include "db_php/db_settings.php";
 if(isset($_GET['deauth']))
 {
    session_destroy();
    header('location:../index.php');
 }else{
 $link=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
  if(isset($_POST['sin']))
  {
    $e=$_POST['eadd'];
    $pas=md5($_POST['pass']);
    $q="select * from student where std_email='$e'";
    $d=mysqli_query($link,$q);
    echo mysqli_error($link);
    $row=mysqli_fetch_assoc($d);
    $pa=$row['std_pwd'];
    if(strcmp("$pas","$pa")==0)
    {
      session_start();
      $_SESSION['uid']=$row['std_id'];
      $_SESSION['isl']=1;
      $_SESSION['ltype']=1;
      header('location:stdinfo.php');
    }
    else{
        //WRONG PASSWORD
    }
    $q="select * from profs where fac_email='$e'";
    $d=mysqli_query($link,$q);
    echo mysqli_error($link);
    $row=mysqli_fetch_assoc($d);
    $pa=$row['fac_pwd'];
    if(strcmp("$pas","$pa")==0)
    {
      session_start();
      $_SESSION['uid']=$row['fac_id'];
      $_SESSION['isl']=1;
      $_SESSION['ltype']=2;
      $_SESSION['stu_g']=0;
      header('location:stdinfo_profile.php');
    }
    else{
        //WRONG PASSWORD
    }
    $q="select * from adminauth";
    $d=mysqli_query($link,$q);
    echo mysqli_error($link);
    $row=mysqli_fetch_assoc($d);
    $pa=$row['pwd'];
    if(strcmp("$pas","$pa")==0)
    {
      session_start();
      $_SESSION['uid']=$row['uid'];
      $_SESSION['isl']=1;
      $_SESSION['ltype']=3;
      header('location:modify_tech.php');
    }
    else{
        //WRONG PASSWORD
    }
  }
  mysqli_close($link);
  }
 
?>
<!doctype html>
<html class="stretchedToMargin"lang="en">
<head>
       
        <title>AMS|Sign In</title>
        <meta name="author" content="Divakar">
        <meta name="charset" content="UTF-8">
        <meta name="description" content="Sign In to Continue">
        <meta name="viewport" content="width=device-width ,initial-scale=1,shrink-to-fit=no">
        <!--Animate CSS-->
        <link rel="stylesheet" href="css/animate.css">
        <!--Linking Bootstrap CDN-->
        <link rel="stylesheet" href="../bootstrap4-res/css/bootstrap.css">
        <!--Linking custom stylesheet-->
        <link rel="stylesheet" href="css/style.css">
        
     
    </head>

<body class="text-center">
<form method="POST">
    <div class="form-group">
        <img class="mb-2 animated zoomIn"src="../res/astronaut.svg" alt="bootstrap-sym" width="73" height="73">
    </div>
    <div class="form-group">
        <h1 class="h3 font-weight-normal mb-4">Please sign in</h1>
    </div>
    <div class="from-group">
        <input type="email" id="inemail " class="form-control " name="eadd" placeholder="Email Address" required autofocus>
    </div>
    <div class="from-group">
        <input type="password" id="pass" class="form-control " name="pass" placeholder="Password" required>
    </div>
    <div class="from-group">
            <input class="mt-3 mb-4 "type="checkbox" id="toRemember">
            Remember Me
    </input>
    <div class="from-group">
        <button class="btn btn-primary btn-lg " type="submit" id="signIn" name="sin">Sign in</button>
        <button class="btn btn-primary btn-lg " type="button" onclick="location.href='register.php'" id="regs">Register</button> 
    </div>
    </div>
    <div class="from-group">
        <p class="text-muted  " id="cptrt">&copy; Divakar Lakhera 2018-19</p>
    </div>
</form>

</body>
</html>
