<?php
session_start();
include_once("mysqli-connection-projectwork.php");
  $btn=$_GET["btn"];
if($btn=="save"){
    doSave($dbcon);
    }

   function doSave($dbcon){
 /*$orgname=$_FILES["profile"]["name"];
$tmpname=$_FILES["profile"]["tmp_name"];
    $picpath="uploads/".$orgname;
move_uploaded_file($tmpname,$picpath);*/
$uid=$_GET["uid"];
$st=$_GET["features"];
$cat=$_GET["cat"];
$sl=$_GET["level"];
$date=$_GET["date"];
$time=$_GET["time"];
$query="insert into sugar values('$uid','$st','$cat','$sl','$date','$time')";
    mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)=="")
{ echo "record saved";
       header("location:sugar-front.php");}
else{
    echo mysqli_error($dbcon);
   header("location:sugar-front.php");}}
?>