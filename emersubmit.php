<?php

 $name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$identitytype=$_POST["identitytype"];
$identityvalue=$_POST["identityvalue"];
$name=$_POST["name"];
$symptoms=$_POST["symptoms"];
$comment=$_POST["comment"];
$lat=$_POST["lat"];
$lng=$_POST["long"];

include 'conn.php';
$pid=uniqid();
$sql1="insert into appointment values('','','$pid','','$symptoms','$comment','','','')";
$res1=mysql_query($sql1);


if($lat!="") {
    

    $url = sprintf("https://maps.googleapis.com/maps/api/geocode/json?latlng=%s,%s", $lat, $lng);

    $content = file_get_contents($url); // get json content

    $metadata = json_decode($content, true); //json decoder

    if(count($metadata['results']) > 0) {
        // for format example look at url
        // https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452
        $result = $metadata['results'][0];

        // save it in db for further use
       $add= $result['formatted_address'];

    }



$sql="insert into patient values('','$name','$phone','$identitytype','$identityvalue','$pid','$phone','$email','$email','$lat','$lng','$add')";
$res=mysql_query($sql);
if($res)
{

session_start();
$_SESSION["logined"] = $pid;
$_SESSION["lat"] = $lat;
$_SESSION["lng"] = $lng;



	header("location:selecthospital.php" );
}
    else {
        header("location:emergency.php");
    }
}




?>