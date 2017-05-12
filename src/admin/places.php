<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/functions.php';

$pagetitle = 'Places';
require '../header.php'; ?>

    <!-- content -->
    <div class="container">
        <div class="card-columns mt-4">
            <?php
            $sql = "SELECT places.*,types.type FROM places LEFT JOIN types ON places.type=types.id;";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require '../include/cards.php';
                }
            } ?>
        </div> <!-- card-columns -->
        <a href="form_add_event.php">
            <div class="float-button circle d-flex align-content-between">
                <!-- <i class="material-icons md-48" style="color: deeppink;">add_circle</i> -->
                <i class="material-icons" style="color: white;">create</i>
            </div>
        </a>
    </div> <!-- container -->

<?php require '../footer.php';