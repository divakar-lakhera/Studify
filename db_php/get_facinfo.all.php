<?php
session_start();
/* 
   get_userInfo.php
   Written By: Divakar Lakhera
   ICT-IIT-KANPUR
   Does SQL Query and Returns back data in form of JSON

*/
include "db_settings.php";
$id=$_SESSION['uid'];
$conn =mysqli_connect(HOST,USERNAME,PASSWORD,DB);
$qur="Select fac_id,fac_name from profs";
$result= mysqli_query($conn,$qur);
$ntc=[];
while($obj=mysqli_fetch_object($result))
{
   $c=$obj->fac_id;
   $ntc[$c] = $obj->fac_name;
}
print json_encode($ntc); 
?>
