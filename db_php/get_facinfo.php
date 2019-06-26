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
// Create connection
$conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$qur="Select fac_name,fac_dept,fac_email,fac_phno,fac_dp from profs where fac_id=$id";
$result= mysqli_query($conn,$qur);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print json_encode($row);
    }
} else {
    echo "0 results";
}
$conn->close();
?>
