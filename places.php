<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'private/phpscripts/db_connector.php';
require_once 'private/phpscripts/functions.php';

$pagetitle = 'Places';
require_once 'private/includes/header.php'; ?>

    <!-- content -->
    <div class="container margin-adder">
        <div class="row">
            <?php
            $sql = "SELECT * FROM places ";
            if (isset($_GET['category'])) {
                $cat = explode(",", $_GET['category']);
                $sql .= " WHERE category = {$cat[0]}";
                if (count($cat) > 1) {
                    for ($i = 1; $i < count($cat); $i++)
                        $sql .= " OR category = {$cat[$i]}";
                }
            }
            $sql .= " ORDER BY score DESC;";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require 'private/includes/place_card.php';
                }
            } ?>
        </div> <!-- card-columns -->

        <a href="<?php echo server_root(1) . '/admin/manage_place.php'; ?>">
            <?php
            if (loggedIn()) {

                echo '<div class="float-button circle d-flex align-content-between" id = "addbtn" >';
                echo '<i class="material-icons" style = "color: white;" > add</i ></div >';
            }
            ?>
        </a>
    </div> <!-- container -->

<?php require_once 'private/includes/footer.php';
