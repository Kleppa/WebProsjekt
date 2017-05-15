<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';

$pagetitle = 'Restaurant';

if(!(isset($_GET['id']))){
    redirect('/places.php');
}

require '../header.php'; ?>

    <div class="container margin-adder">
        <div class="row">
            <?php
            $sql = "SELECT * FROM places WHERE id = {$_GET['id']};";
            $row = "";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $value) {
                    $row = $value;
                }
            } ?>
        </div> <!-- card-columns -->

        <div class="row justify-content-center">
            <div class="col-9">

                <ul class="nav nav-tabs" role="tablist" id="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Bilde</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Kart</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane  in active" id="profile">
                        <img class="img-fluid" id="bildeboks"
                             src="<?php echo $row['image_path']; ?>"/>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="buzz"><div id="map" style="width: 100%; height: 300px;"></div></div>

                </div>

            </div>
        </div>

        <div class="row justify-content-center"><h3 class="card-title">
                <?php echo $row['name'] ?></h3></div>


        <div class="row justify-content-center">
            <div class="col-sm-8">

                <ul class="nav nav-tabs">

                    <li class="nav-item">
                        <a href="#info" class="nav-link active" role="tab" data-toggle="tab">Fine Orde</a>
                    </li>

                    <li class="nav-item">
                        <a href="#spesial" class="nav-link" role="tab" data-toggle="tab">Spesialiter</a>
                    </li>

                    <li class="nav-item">
                        <a href="#kontakt" class="nav-link" role="tab" data-toggle="tab">Kontakt Oss</a>
                    </li>


                </ul>


                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="info">
                        <p class="card-text"><?php echo $row['description'] ?></p>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="spesial">
                        <p>2 Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kontakt">
                        <p class="card-text">Adresse: <?php echo $row['address']; ?></p>
                        <p class="card-text">Telefon: <?php echo $row['phone']; ?></p>
                        <p class="card-text">Åpningstider: <?php echo $row['opening_hours']; ?></p>
                        <p class="card-text">Nettsted: <?php echo $row['url']; ?></p>

                    </div>
                </div>

            </div>
        </div>


        <div class="row justify-content-center">
            <h6> Andre steder i området </h6></div>
        <!--Bilder skal fetches-->

        <div class="row justify-content-center text-center">

            <div class="col-3">
                <img class="img-fluid" src="http://placehold.it/200x300">
            </div>

            <div class="col-3">
                <img class="img-fluid" src="http://placehold.it/200x300">
            </div>

            <div class="col-3">
                <img class="img-fluid" src="http://placehold.it/200x300">
            </div>

            <!-- Alle bildene her skal fetches -->

        </div>
    </div>
<script>
            function initMap() {
            var westerdals = {lat: 59.9159279, lng: 10.7608717};
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: westerdals
            });

            var marker = new google.maps.Marker({
                position: westerdals,
                map: map,
                title: "Fjerdingen"
            });

                $(document).ready(function() {
                    google.maps.event.addListener(map, "idle", function () {
                        google.maps.event.trigger(map, 'resize');
                    });
                });
        }

</script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC62IwxRCQtl6aUXJdO2KLeGb7zVwBGayE&callback=initMap">
    </script>
    <script src="../css/js/tests/tabsBar.js"></script>


<?php require '../footer.php';