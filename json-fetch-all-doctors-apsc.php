<?php
session_start();
include_once("mysqli-connection-projectwork.php");

$uid=$_GET["auid"];

$query="select doctor from consultancy where pid='$uid'";

$table=mysqli_query($dbcon,$query);

$all=array();

while($row=mysqli_fetch_array($table))
{
    $all[]=$row;
}

echo json_encode($all);

?>