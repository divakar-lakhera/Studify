<?php
  include "db_settings.php";
  $todel=$_GET["id"];
  $t=$_GET["idd"]; //Student or Prof
  $con=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
  if($t==1){
  $q="delete from profs where fac_id=$todel";
  $qq="delete from facnotice where fac_id=$todel";
  mysqli_query($con,$q);mysqli_query($con,$qq);
  echo mysqli_error($con);
  header("location:../modify_tech.php");
  }
  else
  {
    $q="delete from student where std_id=$todel";
    $qq="delete from student_courses where std_id=$todel";
    $qqq="delete from student_grade where std_id=$todel";
    mysqli_query($con,$q);
    mysqli_query($con,$qq);
    mysqli_query($con,$qqq);
    echo mysqli_error($con);
    header("location:../modify_stud.php");
  }

  mysqli_close($con);
  
?>
