<?php
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/functions.php';

require_once '../private/includes/header.php';  // Header
?>

    <div class="container margin-adder">
        <div class="row justify-content-center"><h3> Navn på sted </h3></div>
        <div class="row justify-content-center no-gutters">
            <div class="col-7">

                <img class="img-fluid" id="bildeboks" src="http://placehold.it/900x300">

            </div>

            <div class="col-3">
                <div id="map" style="height: 216px;"></div>
            </div>

        </div>


        <div class="row justify-content-center">
            <div class="col-8">

                <ul class="nav nav-tabs "id="paddingcenter">

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
                    <div role="tabpanel" class="tab-pane active" id="info"><p>1 Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="spesial"><p>2 Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kontakt"><p>3 Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. </p>
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
            var westerdals = {lat: 59.9160168, lng: 10.7597406};
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: westerdals
            });

            var marker = new google.maps.Marker({
                position: westerdals,
                map: map,
                title: "Fjerdingen"
            });

        }

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC62IwxRCQtl6aUXJdO2KLeGb7zVwBGayE&callback=initMap">
    </script>
    <script src="<?php echo server_root() ?>/css/js/tests/tabsBar.js"></script>


<?php require_once'../footer.php';