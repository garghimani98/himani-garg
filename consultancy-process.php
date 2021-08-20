<?php
session_start();
include_once("mysqli-connection-projectwork.php");
$btn=$_POST["btn"];

if($btn=="save")

    doSave($dbcon);

else

    doUpdate($dbcon);

function doSave($dbcon){
    $uid=$_SESSION["uid"];
 $orgname=$_FILES["profile"]["name"];
$tmpname=$_FILES["profile"]["tmp_name"];
    $picpath="uploads/".$orgname;
move_uploaded_file($tmpname,$picpath);

//$pid=$_POST["cuid"];
$doctor=$_POST["tid"];
$cdate=$_POST["cdate"];

$instructions=$_POST["inst"];
$ndoc=$_POST["ndate"];
$query="insert into consultancy values('$uid','$doctor','$cdate','$picpath','$instructions','$ndoc')";
    mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)==""){
    echo "record saved";
 header("location:consultancy-front.php");
}
else{
    echo mysqli_error($dbcon);
 header("location:consultancy-front.php");
}
}



function doUpdate($dbcon){
$orgname=$_FILES["profile"]["name"];
$tmpname=$_FILES["profile"]["tmp_name"];
if($orgname==""){
    $picpath=$_POST["hdn"];
}
    else{
     $picpath="uploads/".$orgname;
move_uploaded_file($tmpname,$picpath); 
    }   
//$pid=$_POST["cuid"];
    $uid=$_SESSION["uid"];
$doctor=$_POST["tid"];
$cdate=$_POST["cdate"];

$instructions=$_POST["inst"];
$ndoc=$_POST["ndate"];
$query="update  consultancy set cdate='$cdate',path='$picpath',instructions='$instructions',next_date_of_con='$ndoc' where pid='$uid' and doctor='$doctor'" ;
    mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)=="")
{
if(mysqli_affected_rows($dbcon)!=0){    
 
    header("location:consultancy-front.php");
     echo "record updated";
}
else
    echo "invalid id";
}
    else
   mysqli_error($dbcon);
    }
   
?>