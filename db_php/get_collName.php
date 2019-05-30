<?php
/* 
   get_collName.php
   Written By: Divakar Lakhera
   ICT-IIT-KANPUR
   Does SQL Query and Returns back data in form of JSON
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_names";
$collID="AB100";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $collID";
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