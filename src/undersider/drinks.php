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
            <div id="map" style="width: 100%; height: 400px;"> </div>

            <div class="grid">
                <div class="topCards">
                    <img src="../20100902_img-test.jpg" height="200">
                    <div class="topCards_title">
                        <h4 class="topCards_titleText">Drekkasted nr 1</h4>
                    </div>
                    <div class="topCards_text">
                        <p>Her er det digg å dra for å drekka!</p>
                    </div>

                </div>
                <div class="topCards">
                    <img src="../20100902_img-test.jpg" height="200">
                    <div class="topCards_title">
                        <h4 class="topCards_titleText">Drekkasted nr 2</h4>
                    </div>
                    <div class="topCards_text">
                        <p>Her er det digg å dra for å drekka!</p>
                    </div>

                </div>
                <div class="topCards">
                    <img src="../20100902_img-test.jpg" height="200">
                    <div class="topCards_title">
                        <h4 class="topCards_titleText">Drekkasted nr 3</h4>
                    </div>
                    <div class="topCards_text">
                        <p>Her er det digg å dra for å drekka!</p>
                    </div>

                </div>
                <div class="topCards">
                    <img src="../20100902_img-test.jpg" height="200">
                    <div class="topCards_title">
                        <h4 class="topCards_titleText">Drekkasted nr 4</h4>
                    </div>
                    <div class="topCards_text">
                        <p>Her er det digg å dra for å drekka!</p>
                    </div>

                </div>
            </div>

        </div>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC62IwxRCQtl6aUXJdO2KLeGb7zVwBGayE&callback=initMap">
        </script>
        <script src="googlemaps.js"></script>
    </body>
</html>