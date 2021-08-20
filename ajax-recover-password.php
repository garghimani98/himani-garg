<?php
//session_start();
include_once("mysqli-connection-projectwork.php");    
$luid=$_GET["luid"];
// $_SESSION["uid"]=$luid;
   


$query="select pwd from studentss where uid='$luid'";
$table=mysqli_query($dbcon,$query);
$count=mysqli_num_rows($table);
if($count==0)
{
    echo "invalid id......";
}
else
{
     $row=mysqli_fetch_array($table);
    echo $row["pwd"];
}



?>