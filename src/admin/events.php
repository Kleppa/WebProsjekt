<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/functions.php';

$pagetitle = 'Events';
require '../header.php'; ?>

    <!-- content -->
    <div class="container">
        <div class="card-columns mt-4">
            <?php
            $sql = "SELECT * FROM events;";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $e) {
                    echo generateEventCard($e);
                }
            } ?>
        </div> <!-- card-columns -->
    </div> <!-- container -->

<?php require '../footer.php';