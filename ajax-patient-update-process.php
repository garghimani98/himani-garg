<?php
session_start();
include_once("mysqli-connection-projectwork.php");
$uid=$_SESSION["uid"];

$sname=$_GET["gname"];
$pmobile=$_GET["pmobile"];
$paddress=$_GET["paddress"];
$pcity=$_GET["pcity"];
$pemail=$_GET["pemail"];
$dis=$_GET["dis"];
//$pgender=$_GET["pgender"];
$query="update patient set  name='$sname',mobile='$pmobile',address='$paddress',city='$pcity',email='$pemail',disease='$dis' where uid= '$uid'";
mysqli_query($dbcon,$query);

    if(mysqli_error($dbcon)=="") 
    {if(mysqli_affected_rows($dbcon)!=0)
        echo "Record updated....";
    else 
    echo "not updated";}
    else
        echo mysqli_error($dbcon);
?>