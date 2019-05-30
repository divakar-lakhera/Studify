<?php
/* 
   get_stdInfo.php
   Written By: Divakar Lakhera
   ICT-IIT-KANPUR
   Does SQL Query and Returns back data in form of JSON
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$collID="AB100";
$usrRoll="BT18CSE002";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $collID where rollNo='$usrRoll'";
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