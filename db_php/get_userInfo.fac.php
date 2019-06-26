<?php
session_start();
/* 
   get_userInfo.php
   Written By: Divakar Lakhera
   ICT-IIT-KANPUR
   Does SQL Query and Returns back data in form of JSON

*/
include "db_settings.php";
$id=$_SESSION['stu_g'];
// Create connection
$conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$cgar=[];
$sql = "SELECT * FROM student_grade where std_id='$id'";
$qur="SELECT std_name,collRollno,std_dpLoc,std_phno,std_email FROM student where std_id='$id'";
$qur2="SELECT std_CourseID,std_attd,std_grade from student_courses where std_id='$id'";
$qur3="SELECT std_CourseID,courseName from subjects_avail";
$result2=$conn->query($qur);
$result = $conn->query($sql);
$result3= $conn->query($qur2);
$result4= $conn->query($qur3);
$i=0;
while($obj=mysqli_fetch_object($result))
{
$s='c'.$i;
$cgar[$s]=$obj->std_cgpa;
$i++;
}
while($obj=mysqli_fetch_object($result4))
{
$cgar[$obj->std_CourseID]=$obj->courseName;
}
$i=1;
while($obj=mysqli_fetch_object($result3))
{
$s='sub'.$i.'code';
$s2='sub'.$i.'att';
$s3='sub'.$i.'grade';
$s4='sub'.$i.'name';
$cgar[$s]=$obj->std_CourseID;
$cgar[$s2]=$obj->std_attd;
$cgar[$s3]=$obj->std_grade;
$cgar[$s4]=$cgar[$obj->std_CourseID];
$i++;
}

$obj2=mysqli_fetch_object($result2);
$cgar["uname"]=$obj2->std_name;
$cgar["rollno"]=$obj2->collRollno;
$cgar["dpLoc"]=$obj2->std_dpLoc;
$cgar["phno"]=$obj2->std_phno;
$cgar["email"]=$obj2->std_email;
print json_encode($cgar);
mysqli_close($conn);
?>
