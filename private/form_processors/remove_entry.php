<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/validation_functions.php';

if (isset($_GET['id'])) {

    $sql = "DELETE FROM {$_GET['type']} WHERE id = {$_GET['id']}";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect('/admin/admin.php');
    } else {
        $mysqli->close();
        redirect('/admin/admin.php');
    }
} else {
    redirect('/events.php');
}
