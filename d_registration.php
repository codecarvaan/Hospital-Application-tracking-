<?php
session_start();
$_SESSION['reg'];
include 'conn.php';
$d=$_FILES['doctor_image'];
$img=$d['name'];
$name=$_POST['doctor_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$spe=$_POST['specialisation'];
$sql="insert into doctor values('','$email','$password','$img','$name','$spe')";
$res=mysql_query($sql);
move_uploaded_file($d['tmp_name'],'doctor/'.$img);

if($res)
{
	$_SESSION['reg']=1;
	
	header("location:quote.php");
}


?>