<?php
session_start();
include_once("mysqli-connection-projectwork.php");    
$luid=$_GET["luid"];
$_SESSION["uid"]=$luid;
   

$lpwd=$_GET["lpwd"];
$query="select * from studentss where uid='$luid' and pwd='$lpwd'";
$table=mysqli_query($dbcon,$query);
$count=mysqli_num_rows($table);
$row=mysqli_fetch_array($table);
if($count==0)
    echo "invalid uid or password";
else 
{
      
    echo $row["pay"];
}
    //<a href="patient-dashboard.html"><?php  echo"Open your Dashboard" </a>
    
    
?>