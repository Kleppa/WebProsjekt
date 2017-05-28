<?php
session_start();

require_once 'vendor/autoload.php';
require_once 'private/phpscripts/db_connector.php';
require_once 'private/phpscripts/functions.php';
$pagetitle = 'Events';
require_once 'private/includes/header.php';
?>
    <!-- content -->
    <div class="container">
        <div class="row justify-content-center margin-adder">
            <h4 class="card-title mb-4"><?php
                if ($_SERVER['REQUEST_URI'] == server_root(1) . '/events.php') {
                    echo 'Activities Near Campus!';
                } ?></h4>
        </div>

        <div class="row">
            <?php
            if ($result = $mysqli->query("SELECT events.* FROM events LEFT JOIN types ON types.id = events.type ORDER BY score DESC;")) {
                foreach ($result as $row) {
                    require 'private/includes/event_card.php';
                }
            } ?>
        </div> <!-- card-columns -->

        <?php
        if (loggedIn()) { ?>
            <a href="admin/manage_event.php">
                <div class="float-button circle d-flex align-content-between" id="addbtn">
                    <i class="material-icons" style="color: white;">add</i>
                </div>
            </a>
        <?php } ?>
    </div> <!-- container -->

<?php require_once 'private/includes/footer.php';