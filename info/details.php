<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';

$pagetitle = 'Restaurant';

if (!(isset($_GET['id']))) {
    redirect('../places.php');
}

$result = $mysqli->query("SELECT * FROM types WHERE id = {$_GET['type']};") or die;
$row = mysqli_fetch_assoc($result);

$result = $mysqli->query("SELECT * FROM {$row['type']} WHERE id = {$_GET['id']};") or die;
$row = mysqli_fetch_assoc($result);

require '../private/includes/header.php'; ?>

    <div class="container margin-adder">
    <div class="row justify-content-center mb-2">
        <h4 class="card-title"><?php echo $row['title'] ?></h4>
    </div>

    <div class="row justify-content-center no-gutters mb-3">
        <div class="col-md-6 col-lg-8 col-12">
            <!-- Tab panes -->
            <div class="fill" style="height:300px">
                <img src="<?php echo server_root(1) . $row['image_path'] . '"' . 'alt="' . $row['title']; ?>"/>
            </div>
        </div> <!-- col -->

        <div class="col-md-6 col-lg-4 col-12">
            <div id="map" style="height:300px"></div>
        </div> <!-- col -->
    </div> <!-- justify-content -->

    <div class="row justify-content-center">
        <div class="col-md-8 col-12">

            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a href="#info" class="nav-link active" role="tab" data-toggle="tab">Description</a>
                </li>
                <li class="nav-item">
                    <a href="#spesial" class="nav-link" role="tab" data-toggle="tab">Kudos</a>
                </li>
                <li class="nav-item">
                    <a href="#kontakt" class="nav-link" role="tab" data-toggle="tab">Contact</a>
                </li>
            </ul>

            <div class="tab-content m-4">
                <div role="tabpanel" class="tab-pane active" id="info">
                    <p class="card-text"><?php echo $row['description'] ?></p>
                </div> <!-- tab-pane -->

                <div role="tabpanel" class="tab-pane" id="spesial">
                    <p> <?php echo $row['pros'] ?></p>
                </div> <!-- tab-pane -->

                <div role="tabpanel" class="tab-pane" id="kontakt">
                    <?php if ($_GET['type'] == 2){ ?>
                    <p class="card-text">Adress: <?php echo $row['address']; ?></p>
                    <p class="card-text">Phone: <?php echo $row['phone']; ?></p>
                    <p class="card-text">Webpage: <?php echo $row['url']; ?></p>
                    <p class="card-text"><?php

                        $openingHours = openingHoursToAssoc($row['opening_hours'], 2);

                        echo 'Opening Hours: </br>';
                        echo 'M:' . $openingHours['monday_from'] . '-' . $openingHours['monday_to'];
                        echo ' T:' . $openingHours['tuesday_from'] . '-' . $openingHours['tuesday_to'];
                        echo ' W:' . $openingHours['wednesday_from'] . '-' . $openingHours['wednesday_to'];
                        echo ' T:' . $openingHours['thursday_from'] . '-' . $openingHours['thursday_to'];
                        echo ' F:' . $openingHours['friday_from'] . '-' . $openingHours['friday_to'];
                        echo ' S:' . $openingHours['saturday_from'] . '-' . $openingHours['saturday_to'];
                        echo ' S:' . $openingHours['sunday_from'] . '-' . $openingHours['sunday_to'];
                        } else {
                            echo '<p class="card-text">No Contant info</p>';
                        } ?></p>
                </div> <!-- tab-pane -->
            </div> <!-- tab content -->

        </div> <!-- col -->
    </div> <!-- justify-content -->


    <div class="row justify-content-center">
        <h6> - Other Cool Places - </h6>
    </div>

    <div class="row justify-content-center text-center margin-adder-bot">
        <div class="col-lg-4 col-md-6 col-xs-12">
            <h5 class="card-title"><?php
                $newResult = $mysqli->query("SELECT * FROM places WHERE id NOT LIKE {$_GET['id']} ORDER BY RAND() LIMIT 1;");
                $row = mysqli_fetch_assoc($newResult);
                echo $row['title'];
                ?></h5>
            <a href="details.php<?php echo '?id=' . $row['id'] . '&type=' . $row['type']; ?>">
                <div class="fill" style="height:196px">
                    <img class="img-others"
                         src="<?php echo server_root(1) . $row['image_path'] . '"' . 'alt="' . $row['title'] ?>">
                </div> <!-- fill -->
            </a>
        </div> <!-- col -->

        <div class="col-lg-4 col-md-6 col-xs-12">
            <h5 class="card-title"><?php
                $newResult = $mysqli->query("SELECT * FROM places WHERE id NOT LIKE {$_GET['id']} ORDER BY RAND() LIMIT 1;");
                $row = mysqli_fetch_assoc($newResult);
                echo $row['title'];
                ?></h5>
            <a href="details.php<?php echo '?id=' . $row['id'] . '&type=' . $row['type']; ?>">
                <div class="fill" style="height:196px">
                    <img class="img-others"
                         src="<?php echo server_root(1) . $row['image_path'] . '"' . 'alt="' . $row['title'] ?>">
                </div> <!-- fill -->
            </a>
        </div> <!-- col -->

        <div class="col-lg-4 col-md-6 col-xs-12">
            <h5><?php
                $newResult = $mysqli->query("SELECT * FROM places WHERE id NOT LIKE {$_GET['id']} ORDER BY RAND() LIMIT 1;");
                $row = mysqli_fetch_assoc($newResult);
                echo $row['title'];
                ?></h5>
            <a href="details.php<?php echo '?id=' . $row['id'] . '&type=' . $row['type']; ?>">
                <div class="fill" style="height:196px">
                    <img class="img-others"
                         src="<?php echo server_root(1) . $row['image_path'] . '"' . 'alt="' . $row['title'] ?>">
                </div>
            </a>
        </div> <!-- col -->

    </div> <!-- row -->
    </div> <!-- content -->

<script>
    function initMap() {
        var westerdals = {lat: 59.9160168, lng: 10.7597406};
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            scrollwheel: false,
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
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC62IwxRCQtl6aUXJdO2KLeGb7zVwBGayE&callback=initMap"></script>
<script src="../css/js/tests/tabsBar.js"></script>

<?php require '../private/includes/footer.php';
