<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
$id = mysqlPrep($_GET['id']);
$ref = mysqlPrep($_GET['ref']);
$type = mysqlPrep($_GET['type']);

if (isset($id) && isset($ref) && isset($type)) {
    if (isset($_SESSION['like_flag_id_' . $id . '_type_' . $type])) {

        redirect($ref);
    }

    if ($type == 5) {
        if ($mysqli->query("UPDATE events SET score = score + 1 WHERE id = {$id};")) {
            $_SESSION['like_flag_id_' . $id . '_type_' . $type] = 1;
            redirect($ref);
        }
        redirect($ref);
    } else if ($type == 2) {
        if ($mysqli->query("UPDATE places SET score = score + 1 WHERE id = {$id};")) {
            $_SESSION['like_flag_id_' . $id . '_type_' . $type] = 1;
            redirect($ref);
        }
        redirect($ref);
    } else {
        redirect($ref);
    }
}
redirect('/');
