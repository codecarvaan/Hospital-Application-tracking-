<?php

$hospitalid=$_POST["hospital"];

include "conn.php";
session_start();
$pid=$_SESSION["logined"] ;
if (function_exists('date_default_timezone_set'))
{
  date_default_timezone_set('Asia/Kolkata');
}

$time =date('h-i-sa');
if (function_exists('date_default_timezone_set'))
{
  date_default_timezone_set('Asia/Kolkata');
}

$date =date('d/m/y');

$sql="update appointment set did='Emergency', hid='$hospitalid',time='$time',date='$date' where pid='$pid'"; 
$res=mysql_query($sql);
if($res)
{
    header("location:reciept.php?pid=$pid&hid=$hospitalid");
}





?>