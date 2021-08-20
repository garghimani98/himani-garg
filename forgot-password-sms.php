<?php
//session_start();
include_once("mysqli-connection-projectwork.php");   
include_once("SMS_OK_sms.php");   
$luid=$_GET["luid"];
// $_SESSION["uid"]=$luid;
   


$query="select mobile,pwd from studentss where uid='$luid'";
$table=mysqli_query($dbcon,$query);

if(mysqli_num_rows($table)==0)
    echo "this uid doesnot exist";
else
{
    $row=mysqli_fetch_array($table);
    echo SendSMS($row["mobile"],$row["pwd"]);

}

?>