<?php
 include "db_settings.php";
 session_start();
 $conn=mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 $q="Select * from collevent"; 
 $r=mysqli_query($conn,$q);
 $ntc=[];
 while($obj=mysqli_fetch_object($r))
 {
    $c=$obj->coll_name;
    $c=$c.rand(1,100);
    $ntc[$c] = $obj->eventDesc;
 }
 print json_encode($ntc);

 ?>
