<?php
// Curriculum updater
// (c) Divakar Lakhera
include "db_php/db_settings.php";
echo "</html>
<head>
    <title>
        ADMIN|CCU
    </title>
    <body><h4 align=\"center\">Enter All 6 Course IDs To Enroll--<br>WARNING:Update Couses Only Once!!</h4>
    <br>
    <form align=\"center\">
    <input type=\"text\" name=\"uid\" placeholder=\"Student ID\">
    <br>
    <br>
    <input type=\"text\" name=\"c1\" placeholder=\"Couse 1 ID\">
    <input type=\"text\" name=\"c2\" placeholder=\"Couse 2 ID\">
    <input type=\"text\" name=\"c3\" placeholder=\"Couse 3 ID\">
    <input type=\"text\" name=\"c4\" placeholder=\"Couse 4 ID\">
    <input type=\"text\" name=\"c5\" placeholder=\"Couse 5 ID\">
    <input type=\"text\" name=\"c6\" placeholder=\"Couse 6 ID\">
    <br>
    <br>
    <input type=\"submit\" name=\"sub\" value=\"Update\">
   </form>
    </body>
    </html>
    ";

if(isset($_GET['sub']))
{
    $conn =mysqli_connect(HOST,USERNAME,PASSWORD,DB);
    $c1=$_GET['c1'];
    $c2=$_GET['c2'];
    $c3=$_GET['c3'];
    $c4=$_GET['c4'];
    $c5=$_GET['c5'];
    $c6=$_GET['c6'];
    $i=$_GET['uid'];
    $q1="insert into student_courses values($i,'$c1',NULL,NULL)";
    $q2="insert into student_courses values($i,'$c2',NULL,NULL)";
    $q3="insert into student_courses values($i,'$c3',NULL,NULL)";
    $q4="insert into student_courses values($i,'$c4',NULL,NULL)";
    $q5="insert into student_courses values($i,'$c5',NULL,NULL)";
    $q6="insert into student_courses values($i,'$c6',NULL,NULL)";
    $s1="insert into student_grade values($i,1,0)";
    $s2="insert into student_grade values($i,2,0)";
    $s3="insert into student_grade values($i,3,0)";
    $s4="insert into student_grade values($i,4,0)";
    $s5="insert into student_grade values($i,5,0)";
    $s6="insert into student_grade values($i,6,0)";
    $s7="insert into student_grade values($i,7,0)";
    $s8="insert into student_grade values($i,8,0)";
    mysqli_query($conn,$q1);
    mysqli_query($conn,$q2);
    mysqli_query($conn,$q3);
    mysqli_query($conn,$q4);
    mysqli_query($conn,$q5);
    mysqli_query($conn,$q6);
    mysqli_query($conn,$s1);
    mysqli_query($conn,$s2);
    mysqli_query($conn,$s3);
    mysqli_query($conn,$s4);
    mysqli_query($conn,$s5);
    mysqli_query($conn,$s6);
    mysqli_query($conn,$s7);
    mysqli_query($conn,$s8);
    mysqli_close($conn);
    header("location:modify_stud.php");
}

?>
