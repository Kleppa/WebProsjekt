<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <title>Drinks</title>


    </head>
    <body>
        <?php require "../header.php"; ?>

        <div class="container">

            <h3>Where to go for a drink?</h3>
                <div id="map" style="width: 100%; height: 400px;">

                    <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC62IwxRCQtl6aUXJdO2KLeGb7zVwBGayE&callback=initMap">
                    </script>
                     <script src="googlemaps.js"></script>

                 </div>

        </div>


    </body>
</html>