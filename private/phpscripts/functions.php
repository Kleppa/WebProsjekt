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

function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }

    return $out;
}

function mysqlPrep($string)
{
    global $mysqli;
    $escaped_string = mysqli_real_escape_string($mysqli, $string);
    return $escaped_string;
}
