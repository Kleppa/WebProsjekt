<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/validation_functions.php';

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
        redirect('/src/admin/admin.php');
    } else {
        $mysqli->close();
        redirect('/src/admin/form_add_food.php');
    }
} else {
    redirect('/src/admin/form_add_food.php');
}
