<?php
 include "db_settings.php";
 session_start();
 $conn=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 $q="Select * from facnotice"; 
 $q2="Select fac_id,fac_name from profs";
 $r1=mysqli_query($conn,$q2);
 $r=mysqli_query($conn,$q);
 $ntc2=[];
 $ntc=[];
 while($obj=mysqli_fetch_object($r1))
 {
    $c=$obj->fac_id;
    $ntc2[$c] = $obj->fac_name;
 }
 while($obj=mysqli_fetch_object($r))
 {
    $c=$obj->fac_id;
    $k=rand(1,100).$ntc2[$c];
    $ntc[$k] = $obj->notice;
 }
 print json_encode($ntc); 
 ?>
