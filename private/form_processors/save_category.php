<?php
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);

    $sql = isset($_GET['id']) ?
        "UPDATE categories SET name '{$name}';"
        :
        "INSERT INTO categories (name) VALUES ('{$name}');";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_category.php');
    }
} else {
    redirect(server_root() . '/admin/manage_category.php');
}
