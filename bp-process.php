<?php
session_start();
include_once("mysqli-connection-projectwork.php");
 $btn=$_GET["bbtn"];
if($btn=="save"){
    doSave($dbcon);
    }

   function doSave($dbcon){
 
$uid=$_GET["buid"];
$low=$_GET["low"];
$high=$_GET["high"];
$date=$_GET["bdate"];
$time=$_GET["btime"];
$query="insert into bp values('$uid','$low','$high','$date','$time')";
    mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)==""){
    echo "record saved";
    header("location:bp-front.php");
}
else{
    echo mysqli_error($dbcon);
     header("location:bp-front.php");
   }}
   
?>