<?php
include_once("mysqli-connection-projectwork.php");
session_start();
$btn=$_POST["btn"];
if($btn=="save")
{
    doSave($dbcon);
}
else
    if($btn=="update")
{
    doUpdate($dbcon);
    
}
function doSave($dbcon)
{
$orgname=$_FILES["profile"]["name"];
$tmpname=$_FILES["profile"]["tmp_name"];
    $picpath="uploads/".$orgname;
move_uploaded_file($tmpname,$picpath);
    $n=$_POST["dname"];
    $q=$_POST["qual"];
    $m=$_POST["mob"];
    $e=$_POST["exp"];
    $h=$_POST["hos"];
    $s=$_POST["spec"];
    $a=$_POST["add"];
    $c=$_POST["city"];
    $oi=$_POST["oi"];
    $query="insert into doctor values('$picpath','$n','$q','$m','$e','$h','$s','$a','$c','$oi')";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    echo "record saved";
        else
         echo mysqli_error($dbcon);
    }

function doUpdate($dbcon)
{
    $orgname=$_FILES["profile"]["name"];
$tmpname=$_FILES["profile"]["tmp_name"];
if($orgname==""){
    $picpath=$_POST["hdn"];
}
    else{
     $picpath="uploads/".$orgname;
move_uploaded_file($tmpname,$picpath); 
    }   

    $n=$_POST["dname"];
    $q=$_POST["qual"];
    $m=$_POST["mob"];
    $e=$_POST["exp"];
    $h=$_POST["hos"];
    $s=$_POST["spec"];
    $a=$_POST["add"];
    $c=$_POST["city"];
    $oi=$_POST["oi"];
    $query="update doctor set  pic='$picpath',name='$n',qual='$q',exp='$e', hospital='$h', spec='$s',address='$a',city='$c',otherdetails='$oi' where mobile='$m'";
    mysqli_query($dbcon,$query);
 
    if(mysqli_error($dbcon)=="")
    {
       if(mysqli_affected_rows($dbcon)!=0) 
        
      echo "record updated";
         
    else 
        echo "invalid id";
    }
     else
    echo mysqli_error($dbcon);
     }
    
    ?>