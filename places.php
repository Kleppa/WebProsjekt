<?php
require_once 'vendor/autoload.php';
require_once 'private/phpscripts/db_connector.php';
require_once 'private/phpscripts/functions.php';

$pagetitle = 'Places';
require_once 'private/includes/header.php'; ?>

    <!-- content -->
    <div class="container margin-adder">
        <div class="row">
            <?php
            $sql = "SELECT places.* FROM places LEFT JOIN types ON places.type=types.id;";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require 'private/includes/place_card.php';
                }
            } ?>
        </div> <!-- card-columns -->

        <a href="<?php echo server_root(1) . '/admin/manage_place.php'; ?>">
            <div class="float-button circle d-flex align-content-between" id="addbtn">
                <i class="material-icons" style="color: white;">add</i>
            </div>
        </a>
    </div> <!-- container -->

<?php require_once 'private/includes/footer.php';
