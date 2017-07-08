<?php $postcode1=('110063');
$postcode2=('110059');
 
$url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins=$postcode2&destinations=$postcode1&mode=driving&language=en-EN&sensor=false";
 
$data = @file_get_contents($url);
 
$result = json_decode($data, true);
 
foreach($result['rows'] as $distance) {
  echo 'Distance from you: ' . $distance['elements'][0]['distance']['text'] . ' (' . $distance['elements'][0]['duration']['text'] . ' in current traffic)';
}

?>