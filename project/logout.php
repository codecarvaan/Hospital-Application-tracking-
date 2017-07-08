<?php 
session_start();
if(empty($_SESSION["admin"]))
{
header("location:admin.php");
}
else{
session_destroy();

header("location:admin.php");
?>
