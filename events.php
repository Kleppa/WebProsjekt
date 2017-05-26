<?php
session_start();
$pagetitle = 'Events';
require_once 'vendor/autoload.php';
require_once 'private/phpscripts/db_connector.php';
require_once 'private/phpscripts/functions.php';
require_once 'private/includes/header.php';

?>

    <!-- content -->
    <div class="container margin-adder">
        <div class="row">
            <?php
            $sql = "SELECT events.* FROM events LEFT JOIN types ON types.id = events.type ORDER BY score DESC ";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require 'private/includes/event_card.php';
                }
            } ?>
        </div> <!-- card-columns -->

        <a href="admin/manage_event.php">
            <?php

            if (loggedIn()) {

                echo '<div class="float-button circle d-flex align-content-between" id = "addbtn" >';
                echo '<i class="material-icons" style = "color: white;" > add</i ></div >';
            }
                ?>

        </a>
    </div> <!-- container -->

<?php require_once 'private/includes/footer.php';