<?php
include "db.php";
$email=$_GET['id'];
echo $email;
$link=mysqli_connect('localhost','root','',DBDUMM);
mysqli_query($link,"delete from signup where email='$email'");
echo mysqli_error($link);
mysqli_close($link);
//go to any page
header("location:../index.php");
?>
