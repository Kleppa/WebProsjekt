<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';

use Carbon\Carbon;

Carbon::setLocale('no');

$sql  = "SELECT * ";
$sql .= "FROM events;";

if ($result = $mysqli->query($sql)) {

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Overview</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="nav">
        <div class="navbar">
            <h3>Event Manager Pro</h3>
        </div>
    </nav>

<div class="container">

    <h4>Kommende events</h4>
    <div class="row">
        <div class="col">
                <?php
                foreach($result as $e) {
                    require 'card.php';
                }
                ?>
        </div> <!-- col -->
    </div> <!-- row -->

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
<?php
$result->free();
$mysqli->close();
