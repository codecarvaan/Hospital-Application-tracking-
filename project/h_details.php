<?php
include 'conn.php';
$name=$_POST['hospital_name'];
$i1=$_FILES['hospital1'];
$i2=$_FILES['hospital2'];
$i3=$_FILES['hospital3'];
$i4=$_FILES['hospital4'];
$img1=$i1['name'];
$img2=$i2['name'];
$img3=$i3['name'];
$img4=$i4['name'];
$ort=$_POST['orthopedics'];
$n=$_POST['neurology'];
$c=$_POST['cancer'];
$t=$_POST['transplant'];
$s=$_POST['surgery'];
$sql="insert into hospital values('','$name','$img1','$img2','$img3','$img4','$ort','$n','$c','$t','$s')";
$res=mysql_query($sql);
move_uploaded_file($i1['tmp_name'],'hospital_image/'.$img1);
move_uploaded_file($i2['tmp_name'],'hospital_image/'.$img2);
move_uploaded_file($i3['tmp_name'],'hospital_image/'.$img3);
move_uploaded_file($i4['tmp_name'],'hospital_image/'.$img4);
if($res)
{
	header("location:quote.php?$mode=success");
}
?>