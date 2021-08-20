<?php
session_start();
include_once("mysqli-connection-projectwork.php");
/*$btn=$_POST["btn"];
if($btn=="save")

    doSave($dbcon);

else

    doUpdate($dbcon);
function doSave($dbcon){*/
$uid=$_SESSION["uid"];

//$_SESSION["uid"]=$puid;
$sname=$_GET["gname"];
$pmobile=$_GET["pmobile"];

$paddress=$_GET["paddress"];
    $pcity=$_GET["pcity"];
$pemail=$_GET["pemail"];
$dis=$_GET["dis"];
$pgender=$_GET["pgender"];
$query="insert into patient values('$uid','$sname','$pmobile','$paddress','$pcity','$pemail','$dis','$pgender')";
mysqli_query($dbcon,$query);

    if(mysqli_error($dbcon)=="")      
        echo "Record Submitted....";
    else
        echo mysqli_error($dbcon);


?>