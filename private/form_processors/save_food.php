<?php
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);
    $desc = mysqlPrep($_POST['description']);

    $sql = isset($_GET['id']) ?
        "UPDATE food SET place = {$_POST['place']}, name = '{$name}', description = '{$desc}', 
        price = {$_POST['price']} WHERE id={$_POST['id']};"
        :
        "INSERT INTO food (place, name, description, price) 
        VALUES ({$_POST['place']}, '{$name}', '{$desc}', {$_POST['price']});";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_food.php');
    }
} else {
    redirect(server_root() . '/admin/manage_food.php');
}
