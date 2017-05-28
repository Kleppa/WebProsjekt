<?php
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';
session_start();

// if logged in, sets the username in the session to null and sends the user back to the request site
if (isset($_SESSION['username']) && ($_SESSION['username'] != null)) {
        $_SESSION['username']=null;

    redirect($_SERVER['HTTP_REFERER']);
    }
