<?php function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }

    return $out;
}

require_once server_root() . '/vendor/autoload.php';
require_once server_root() . '/private/phpscripts/db_connector.php';
require_once server_root() . '/private/phpscripts/functions.php';

$pagetitle = 'Events';
require 'header.php'; ?>

    <!-- content -->
    <div class="container margin-adder">
        <div class="row">
            <?php
            $sql = "SELECT events.*,types.type FROM events LEFT JOIN types ON types.id = events.type;";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require server_root() . '/private/includes/event_card.php';
                }
            } ?>
        </div> <!-- card-columns -->

        <a href="admin/manage_event.php">
            <div class="float-button circle d-flex align-content-between" id="addbtn">
                <!-- <i class="material-icons md-48" style="color: deeppink;">add_circle</i> -->
                <i class="material-icons" style="color: white;">add</i>
            </div>
        </a>
    </div> <!-- container -->

<?php require_once 'footer.php';