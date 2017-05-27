<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';

$pagetitle = 'Restaurant';

if (!(isset($_GET['id']))) {
    redirect('../places.php');
}
$sql = "SELECT * FROM places WHERE id = {$_GET['id']};";
$sql2 = "SELECT * FROM events WHERE id = {$_GET['id']};";
$result = $mysqli->query($sql);
$result2 = $mysqli->query($sql2);
$finalResult = "";

$boolean = false;

require '../private/includes/header.php'; ?>

<div class="container">
    <div class="row margin-adder">
        <?php

        foreach ($result as $row) {

            if ($_GET['id'] === $row['id'] && $_GET['type'] === $row['type']) {

                $boolean = true;
                $pagetitle = $row['title'];
                $finalResult = $row;
            }
        }
        foreach ($result2 as $row) {
            if ($_GET['id'] === $row['id'] && $_GET['type'] === $row['type']) {
                $finalResult = $row;
                $pagetitle = $row['title'];
            }
        }

        ?>
    </div> <!-- card-columns -->

    <div class="row justify-content-center"><h4 class="card-title">
            <?php echo $row['title'] ?></h4></div>

    <div class="row justify-content-center no-gutters">
        <div class="col-7">

            <!-- Tab panes -->
            <img class="img-fluid"  id="bildeboks"
                 src="<?php echo $row['image_path'] . '"' . 'alt="' . $row['title']; ?>"/>
        </div>

        <div class="col-3">
            <div id="map"></div>
        </div>


    </div>

    <div class="row justify-content-center">
        <div class="col-sm-8">

            <ul class="nav nav-tabs justify-content-center">

                <li class="nav-item">
                    <a href="#info" class="nav-link active" role="tab" data-toggle="tab">Description</a>
                </li>

                <li class="nav-item">
                    <a href="#spesial" class="nav-link" role="tab" data-toggle="tab">Worth Mentioning</a>
                </li>

                <li class="nav-item">
                    <a href="#kontakt" class="nav-link" role="tab" data-toggle="tab">Contact</a>
                </li>


            </ul>


            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="info">
                    <p class="card-text"><?php echo $row['description'] ?></p>
                </div>

                <div role="tabpanel" class="tab-pane" id="spesial">
                    <p> <?php echo $finalResult['pros'] ?></p>
                </div>
                <div role="tabpanel" class="tab-pane" id="kontakt">
                    <?php
                    if ($boolean) {
                        $openingHours = openingHoursToAssoc($finalResult['opening_hours'], 2);


                        $str = <<<HTML

                        
                        <p class="card-text">Adress: {$finalResult['address']} </p>
                        
                        <p class="card-text">Phone:  {$finalResult['phone']}</p>

                        <p class="card-text">Webpage:  {$finalResult['url']}</p>
                        
                        
HTML;
                        echo $str;

                        echo 'Opening Hours: ';
                        echo 'M:' . $openingHours['monday_from'] . '-' . $openingHours['monday_to'];
                        echo ' T:' . $openingHours['tuesday_from'] . '-' . $openingHours['tuesday_to'];
                        echo ' O:' . $openingHours['wednesday_from'] . '-' . $openingHours['wednesday_to'];
                        echo ' T:' . $openingHours['thursday_from'] . '-' . $openingHours['thursday_to'];
                        echo ' F:' . $openingHours['friday_from'] . '-' . $openingHours['friday_to'];
                        echo ' S:' . $openingHours['saturday_from'] . '-' . $openingHours['saturday_to'];
                        echo ' S:' . $openingHours['sunday_from'] . '-' . $openingHours['sunday_to'];
                    } else {
                        echo '<p class="card-text">No Contant info</p>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>


    <div class="row justify-content-center">
        <h6> - Other Cool Places - </h6></div>
    <!--Bilder skal fetches-->

    <div class="row justify-content-center text-center margin-adder-bot">

        <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
            <h5 class="card-title">
                <?php

                $newPlaceQuery = "SELECT * FROM places WHERE id NOT LIKE {$_GET['id']} ORDER BY RAND() LIMIT 1;";

                $newResult = $mysqli->query($newPlaceQuery);

                foreach ($newResult as $row) {
                    echo $row['title'];
                }


                ?></h5>
            <a href="details.php?id=<?php echo $row['id'].'&type='.$row['type']?>">
            <img class=" img-others" src="<?php echo $row['image_path'].'"'.'alt="'.$row['title'] ?>">
            </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
            <h5 class="card-title">
                <?php

                $newPlaceQuery = "SELECT * FROM places WHERE id NOT LIKE {$_GET['id']} ORDER BY RAND() LIMIT 1;";

                $newResult = $mysqli->query($newPlaceQuery);

                foreach ($newResult as $row) {
                    echo $row['title'];
                }


                ?></h5>
            <a href="details.php?id=<?php echo $row['id'].'&type='.$row['type']?>">
            <img class="img-others" src="<?php echo $row['image_path'].'"'.'alt="'.$row['title']  ?>">
            </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
            <h5 class="card-title">
                <?php

                $newPlaceQuery = "SELECT * FROM places WHERE id NOT LIKE {$_GET['id']} ORDER BY RAND() LIMIT 1;";

                $newResult = $mysqli->query($newPlaceQuery);

                foreach ($newResult as $row) {
                    echo $row['title'];
                } ?></h5>
            <a href= <?php

            echo '"details.php?id=' . $row['id'] . '&type=' . $row['type'] . '"';
            ?>>
                <img class="img-others" src="<?php echo $row['image_path'].'"'.'alt="'.$row['title']  ?>">
            </a>
        </div>

        <!-- Alle bildene her skal fetches -->

    </div>
</div>
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
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC62IwxRCQtl6aUXJdO2KLeGb7zVwBGayE&callback=initMap">
</script>
<script src="../css/js/tests/tabsBar.js"></script>


<?php require '../private/includes/footer.php'; ?>
