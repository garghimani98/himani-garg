<?php
session_start();
include_once("mysqli-connection-projectwork.php");
$hos=$_GET["hosp"];
$query="select  name from doctor where hospital='$hos'";

$table=mysqli_query($dbcon,$query);

$all=array();

while($row=mysqli_fetch_array($table))
{
    $all[]=$row;
}

echo json_encode($all);
?>