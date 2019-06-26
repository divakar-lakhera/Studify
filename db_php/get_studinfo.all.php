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
$qur="Select std_id,std_name from student";
$result= mysqli_query($conn,$qur);
$ntc=[];
while($obj=mysqli_fetch_object($result))
{
   $c=$obj->std_id;
   $ntc[$c] = $obj->std_name;
}
print json_encode($ntc); 
?>
