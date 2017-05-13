<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';

$pagetitle = 'Places';
require 'header.php'; ?>

    <!-- content -->
    <div class="container">
        <div class="card-columns mt-4">
            <?php
            $sql = "SELECT places.*,types.type FROM places LEFT JOIN types ON places.type=types.id;";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require 'private/includes/cards.php';
                }
            } ?>
        </div> <!-- card-columns -->
        <div class="popup">
            <h2>Here i am</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                Thank to pop me out of that button, but now i'm done so you can close this window.
            </div>
        </div>
        <a href="admin/manage_event.php">
            <div class="float-button circle d-flex align-content-between">
                <!-- <i class="material-icons md-48" style="color: deeppink;">add_circle</i> -->
                <i class="material-icons" style="color: white;">create</i>
            </div>
        </a>
    </div> <!-- container -->

<?php require 'footer.php';