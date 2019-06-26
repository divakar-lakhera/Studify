<?php
include "db_settings.php";
session_start();
$uth=$_SESSION['ltype'];
echo $uth;
$id=$_SESSION['uid'];
$islog=$_SESSION['isl'];
$con=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
$name=$_GET['name'];
$email=$_GET['email'];
$phno=$_GET['phno'];
$dploc=$_GET['dpl'];
if($uth==1)
{
    if($name != '')
    {
    $que="update student set std_name='$name' where std_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);
    }
    if($email != '')
    {
    $que="update student set std_email='$email' where std_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);
    }
    if($phno != 0)
    {
    $que="update student set std_phno=$phno where std_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);
    }

    if($dploc != '')
    {   

    $que2="select std_dpLoc from student where std_id=$id";
    $r=mysqli_query($con,$que2);
    $obj=mysqli_fetch_object($r);
    unlink("../"."$obj->std_dpLoc");
    $que="update student set std_dpLoc='$dploc' where std_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);
    }
    header("location:../stdinfo_profile.php");
}
else if($uth=='2'){

    if($name != '')
    {
    $que="update profs set fac_name='$name' where fac_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);    
    }
    if($email != '')
    {
    $que="update profs set fac_email='$email' where fac_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);
    }
    if($phno != 0)
    {
    $que="update profs set fac_phno=$phno where fac_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);
    }

    if($dploc != '')
    {   
    $que2="select fac_dp from profs where fac_id=$id";
    $r=mysqli_query($con,$que2);
    $obj=mysqli_fetch_object($r);
    unlink("../"."$obj->fac_dp");
    $que="update profs set fac_dp='$dploc' where fac_id=$id";
    mysqli_query($con,$que);
    echo mysqli_error($con);
    }
   header("location:../stdinfo_profile.php");

}

?>
