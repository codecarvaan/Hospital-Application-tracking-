<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your access your location.</p>

<button onclick="getLocation()" required>Done</button>
<input type="text" name="lat" value="" id="lat">
<input type="text" name="long" value="" id="long">
<p id="demo"></p>

<script type="text/javascript">
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
	document.getElementById("lat").value = position.coords.latitude;
	document.getElementById("long").value = position.coords.longitude;
}

</script>

</body>
</html>