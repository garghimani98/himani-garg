<?php
include_once("mysqli-connection-projectwork.php");    
$suid=$_GET["suid"];
$query="select uid,pwd,mobile from studentss where uid='$suid'";
$table=mysqli_query($dbcon,$query);
$count=mysqli_num_rows($table);
if($count==0)
    echo "id availble";
else
    echo "this id is not available";
    
    

?>