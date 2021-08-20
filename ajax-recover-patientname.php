<?php
session_start();
include_once("mysqli-connection-projectwork.php");    
$uid=$_SESSION["uid"];
 //$_SESSION["uid"]=$luid;
   


$query="select *  from patient where uid='$uid'";
$table=mysqli_query($dbcon,$query);

$all=array();

while($row=mysqli_fetch_array($table))
{
    $all[]=$row;
}

echo json_encode($all);
?>