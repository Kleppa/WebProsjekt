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

    <div class="card-columns">
        <?php
        foreach($result as $e) {
            $output  = "<div class=\"card mb-3\">";
            $output .= "<img class=\"card-img-top img-fluid\" src=\"" . $e['image_path'] . "\">";
            $output .= "<div class=\"card-block\">";
            $output .= "<h2 class=\"card-title\">" . $e['title'] . "</h2>";
            $output .= "<p class=\"card-text\">" . $e['description'] . "</p>";
            $output .= "<a href=\"#\" class=\"btn btn-info\">Edit</a>";
            $output .= "<a href=\"#\" class=\"btn btn-danger\">Delete</a>";
            $output .= "</div>"; // card-block
            $output .= "<div class=\"card-footer text-muted\">";
            $output .= "<p>" . $e['datetime'] . "</p>";
            $output .= "</div>"; // card-footer
            $output .= "</div>"; // card

            echo $output;
        }
        ?>
    </div> <!-- col -->

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
<?php
$result->free();
$mysqli->close();
