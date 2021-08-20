<?php

include_once("mysqli-connection-projectwork.php");


$query="select * from doctor";

$table=mysqli_query($dbcon,$query);

$all=array();
while($row=mysqli_fetch_array($table))
{
    $all[]= $row;
}

echo json_encode($all);
?>