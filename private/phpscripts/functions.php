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

function openingHoursToAssoc($string, $precision = 8)
{
    $array = explode(",", $string);
    $array = implode("-", $array);
    $array = explode("-", $array);

    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = substr($array[$i], 0, $precision);
    }

    $assocOpeningTimes = [
        'monday_from' => $array[0],
        'monday_to' => $array[1],
        'tuesday_from' => $array[2],
        'tuesday_to' => $array[3],
        'wednesday_from' => $array[4],
        'wednesday_to' => $array[5],
        'thursday_from' => $array[6],
        'thursday_to' => $array[7],
        'friday_from' => $array[8],
        'friday_to' => $array[9],
        'saturday_from' => $array[10],
        'saturday_to' => $array[11],
        'sunday_from' => $array[12],
        'sunday_to' => $array[13],
    ];

    return $assocOpeningTimes;
}
