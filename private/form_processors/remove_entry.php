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
    $type = mysqlPrep($_GET['type']);

    $sql = "DELETE FROM {$_GET['type']} WHERE id = {$_GET['id']}";

    if ($result = $mysqli->query($sql)) {
        $mysqli->close();
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        $mysqli->close();
        $_SESSION['messages'] = '<div class="alert alert-danger"><strong>Error! </strong>Query error. Check with a server manager.</div>';
        redirect(server_root() . '/admin/admin.php');
    }
} else {
    redirect(server_root() . '/events.php');
}
