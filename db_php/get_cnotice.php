<?php
 include "db_settings.php";
 session_start();
 $conn=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 $q="Select * from clubnotice"; 
 $r=mysqli_query($conn,$q);
 $ntc=[];
 while($obj=mysqli_fetch_object($r))
 {
    $c=$obj->clubName;
    $ntc[$c] = $obj->notice;
 }
 print json_encode($ntc); 
 ?>
