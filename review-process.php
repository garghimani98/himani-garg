<?php
include_once("mysqli-connection-projectwork.php");
session_start();
$hos=$_GET["hosp"];
$doc=$_GET["rid"];
$star=$_GET["star_rating"];
$rev=$_GET["reviews"];

$query="insert into review values('$doc','$hos',$star,'$rev')";

mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)==0){
    echo"review saved";
 header("location:review-front.php");}
    else{
        
echo mysqli_error($dbcon);
 header("location:review-front.php");}
?>
