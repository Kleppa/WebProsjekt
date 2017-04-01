<?php

require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';

use Carbon\Carbon;

Carbon::setLocale('no');

// Test-connection: $connection = new PDO("mysql:host=localhost;dbname=database;port=3306", 'root', 'password');
$events = Event::all();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overview</title>
</head>
<body>
<pre>
    <?php print_r($events); ?>
</pre>
</body>
</html>