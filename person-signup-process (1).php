<?php
include_once("mysqli-connection-projectwork.php");
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
$mobile=$_GET["mobile"];
$query="insert into student values('$uid','$pwd','$mobile')";
mysqli_query($dbcon,$query);

    if(mysqli_error($dbcon)=="")
        echo "Record Submitted....";
    else
        echo mysqli_error($dbcon);

?>