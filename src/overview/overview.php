<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overview</title>
</head>
<body>
<?php
    require '../../vendor/autoload.php';
    require '../phpscripts/connector.php';

    use Carbon\Carbon;

    Carbon::setLocale('no');

    $events = Event::all();


?>
</body>
</html>