<?php 
session_start();
if(empty($_SESSION["logined"]))
{
header("location:index.php");
}
else{
session_destroy();

header("location:index.php");
}
?>
