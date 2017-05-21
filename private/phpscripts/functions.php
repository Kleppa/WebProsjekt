<?php

use Carbon\Carbon;

Carbon::setLocale('no');
function redirect($url)
{
    if (headers_sent() === false) {
        header('Location: ' . $url, false);
    }

    exit();
}

function loggedIn()
{
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
}

function server_root($type = 0)
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    } else if ($type === 0) {
        $out .= $_SERVER['DOCUMENT_ROOT'];
    }
    return $out;
}

function mysqlPrep($string)
{
    global $mysqli;
    $escaped_string = mysqli_real_escape_string($mysqli, $string);
    return $escaped_string;
}

function openingHoursToAssoc($array)
{
    if (isset($array['opening_hours'])) {
        $openingTimes = explode(",", $array['opening_hours']);
        $openingTimes = implode("-", $openingTimes);
        $openingTimes = explode("-", $openingTimes);

        $assocOpeningTimes = [
            'monday_from' => $openingTimes[0],
            'monday_to' => $openingTimes[1],
            'tuesday_from' => $openingTimes[2],
            'tuesday_to' => $openingTimes[3],
            'wednesday_from' => $openingTimes[4],
            'wednesday_to' => $openingTimes[5],
            'thursday_from' => $openingTimes[6],
            'thursday_to' => $openingTimes[7],
            'friday_from' => $openingTimes[8],
            'friday_to' => $openingTimes[9],
            'saturday_from' => $openingTimes[10],
            'saturday_to' => $openingTimes[11],
            'sunday_from' => $openingTimes[12],
            'sunday_to' => $openingTimes[13],
        ];

        return $assocOpeningTimes;
    }
    return null;
}
