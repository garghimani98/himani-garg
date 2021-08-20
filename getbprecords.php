<?php
include_once("mysqli-connection-projectwork.php");
session_start();
$pid=$_SESSION["uid"];
$query="select date,lowl,highl from bp where uid='$pid'";

$table=mysqli_query($dbcon,$query);

$day=array();
$day['date']="date";

$lowl=array();
$lowl['lowl']="diastolic";


$highl=array();
$highl['highl']="Systolic";



while($row=mysqli_fetch_array($table))
	{
		$day['data'][]=$row["date"];
		$lowl['data'][]=$row["lowl"];
    $highl['data'][]=$row["highl"];
    }
	$result=array();
	array_push($result,$day);
	array_push($result,$lowl);
array_push($result,$highl);
	echo json_encode($result,JSON_NUMERIC_CHECK);
	
?>


