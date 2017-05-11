<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/functions.php';

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