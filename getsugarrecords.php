<?php
include_once("mysqli-connection-projectwork.php");
session_start();
$pid=$_SESSION["uid"];
$query="select date,sugarlevel from sugar where uid='$pid'";

$table=mysqli_query($dbcon,$query);

$day=array();
$day['date']="date";

$sugar=array();
$sugar['level']="blood levels";






while($row=mysqli_fetch_array($table))
	{
		$day['data'][]=$row["date"];
		$sugar['data'][]=$row["sugarlevel"];
   
    }
	$result=array();
	array_push($result,$day);
	array_push($result,$sugar);

	echo json_encode($result,JSON_NUMERIC_CHECK);
	
?>


