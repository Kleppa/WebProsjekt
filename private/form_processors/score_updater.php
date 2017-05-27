<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';

if (isset($_GET['id']) && isset($_GET['ref']) && isset($_GET['type'])) {
    if (isset($_SESSION['like_flag_id_' . $_GET['id'] . '_type_' . $_GET['type']])) {
        echo 'already set';
        redirect(server_root(1) . $_GET['ref']);
    }

    if ($_GET['type'] == 5) {
        if ($mysqli->query("UPDATE events SET score = score + 1 WHERE id = {$_GET['id']};")) {
            $_SESSION['like_flag_id_' . $_GET['id'] . '_type_' . $_GET['type']] = 1;
            redirect(server_root(1) . $_GET['ref']);
        }
        redirect(server_root(1) . $_GET['ref']);
    } else if ($_GET['type'] == 2) {
        if ($mysqli->query("UPDATE places SET score = score + 1 WHERE id = {$_GET['id']};")) {
            $_SESSION['like_flag_id_' . $_GET['id'] . '_type_' . $_GET['type']] = 1;
            redirect(server_root(1) . $_GET['ref']);
        }
        redirect(server_root(1) . $_GET['ref']);
    } else {
        redirect(server_root(1) . $_GET['ref']);
    }
}
redirect(server_root() . '/');
