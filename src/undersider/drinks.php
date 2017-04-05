<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <>

    <title>Drinks</title>


</head>
<body>

<?php
require "../header.php";
?>

<div class="container">

        <h3>Where to go for a drink?</h3>
        <div id="map" style="width: 100%; height: 400px;"></div>

        <!-- Replace the value of the key parameter with your own API key. -->
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC62IwxRCQtl6aUXJdO2KLeGb7zVwBGayE&callback=initMap">
        </script>
</div>
<script>
    function initMap() {
        var westerdals = {lat: 59.9159279, lng: 10.7608717};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: westerdals
        });
        var marker = new google.maps.Marker({
            position: westerdals,
            map: map
        });
    }
</script>

</body>
</html>