<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';

$pagetitle = 'Places';
require '../header.php'; ?>

    <!-- content -->
    <div class="container">
        <div class="card-columns">
            <?php
            $sql = "SELECT * FROM places;";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $p) {
                    echo generatePlaceCard($p);
                }
            } ?>
        </div> <!-- card-columns -->
    </div> <!-- container -->

<?php require '../footer.php';