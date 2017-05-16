<?php function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }

    return $out;
}

require 'vendor/autoload.php';
require 'private/phpscripts/db_connector.php';
require 'private/phpscripts/functions.php';

$pagetitle = 'Places';
require 'header.php'; ?>

    <!-- content -->
    <div class="container margin-adder">
        <div class="row">
            <?php
            $sql = "SELECT places.*,types.type FROM places LEFT JOIN types ON places.type=types.id;";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require 'private/includes/place_card.php';
                }
            } ?>
        </div> <!-- card-columns -->

        <a href="admin/manage_place.php">
            <div class="float-button circle d-flex align-content-between" id="addbtn">
                <i class="material-icons" style="color: white;">add</i>
            </div>
        </a>
    </div> <!-- container -->

<?php require 'footer.php';
