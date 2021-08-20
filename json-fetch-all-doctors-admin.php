<?php
//session_start();
include_once("mysqli-connection-projectwork.php");
//$uid=$_SESSION["uid"];

$query="select name,qual,mobile,exp,city from doctor ";

$table=mysqli_query($dbcon,$query);

$alll=array();
while($row=mysqli_fetch_array($table))
{
    $alll[]= $row;
}

echo json_encode($alll);
?>