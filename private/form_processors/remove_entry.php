<?php
// Removes  an entry from the database

session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';
if (!(loggedIn())) {
    redirect(server_root(1) . '/admin/login.php');
}

if (isset($_GET['id'])) {

    $sql = "DELETE FROM {$_GET['type']} WHERE id = {$_GET['id']}";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    }
} else {
    redirect(server_root() . '/events.php');
}
