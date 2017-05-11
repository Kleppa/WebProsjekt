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

function loggedIn() {
    if(isset($_SESSION['username'])) {
        return true;
    }
    return false;
}

function mysqlPrep($string) {
    global $mysqli;
    $escaped_string = mysqli_real_escape_string($mysqli, $string);
    return $escaped_string;
}



