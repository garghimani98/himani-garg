<?php
include_once("mysqli-connection-projectwork.php");
$suid=$_GET["suid"];
$spwd=$_GET["spwd"];
$smobile=$_GET["smobile"];
$pay=$_GET["pay"];
$query="insert into studentss(uid,pwd,mobile,pay) values('$suid','$spwd','$smobile','$pay')";
mysqli_query($dbcon,$query);

    if(mysqli_error($dbcon)=="")      
        echo "Record Submitted....";
    else
        echo mysqli_error($dbcon);

?>