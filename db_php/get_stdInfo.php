<?php
/* 
   get_stdInfo.php
   Written By: Divakar Lakhera
   ICT-IIT-KANPUR
   Does SQL Query and Returns back data in form of JSON
*/

include "db_settings.php";
$sid=$_SESSION['uid'];
// Create connection
$conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM student where std_id='$sid'";
$result = $conn->query($sql);

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