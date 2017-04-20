<?php

require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';

use Carbon\Carbon;

Carbon::setLocale('no');

$sql  = "SELECT title, place, datetime, description, is_free, price ";
$sql .= "FROM events";

$mysqli->query($sql);

$events =

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overview</title>

    <!-- Include Material Design Lite library [getmdl.io] -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body class="mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<div class="mdl-layout">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <h3>Event Manager Pro</h3>
        </div>
    </header>
    <main class="mdl-layout__content">
        <h4>Kommende events</h4>
        <div class="grid">

            <?php

            foreach ($events as $event) {

                //print_r($event['starts_at']->isFuture());
                echo "<br/>";
                echo "<pre>";
                print_r($events);
                echo "</pre>";
                //if ($event['datetime']->isFuture()) {
                //    require 'card.php';
                //}
            }

            ?>

        </div>
        <h4>Tidligere events</h4>
        <div class="grid">

            <?php

            foreach ($events as $event) {
                if ($event['starts_at']->isPast()) {
                    require 'card.php';
                }
            }

            ?>

        </div>
    </main>

    <pre>
        <?php print_r($events) ?>
    </pre>
</body>
</html>