<?php

include_once("mysqli-connection-projectwork.php");
$uid=$_GET["uid"];

$query="delete from consultancy where pid='$uid'";

mysqli_query($dbcon,$query);

if(mysqli_affected_rows($dbcon)>0)
    echo "deleted";
else
    echo "invalid id"; 
?>