<?php
session_start();
include_once("mysqli-connection-projectwork.php");
$uid=$_SESSION["uid"];

$query="select pid,cdate,next_date_of_con,path from consultancy where pid='$uid'";

$table=mysqli_query($dbcon,$query);

$all=array();
while($row=mysqli_fetch_array($table))
{
    $all[]= $row;
}

echo json_encode($all);
?>