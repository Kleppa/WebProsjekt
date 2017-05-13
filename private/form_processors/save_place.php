<?php
require $_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . 'private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . 'private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . 'private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);
    $desc = mysqlPrep($_POST['description']);
    $address = mysqlPrep($_POST['address']);
    $openingHours = mysqlPrep($_POST['opening_hours']);
    $phone = mysqlPrep($_POST['phone']);
    $url = mysqlPrep($_POST['url']);
    $imagePath = mysqlPrep($_POST['image_path']);

    $sql = isset($_GET['id']) ?
        "UPDATE places SET name = '{$name}', description = '{$desc}', address = '{$address}', 
        opening_hours = '{$openingHours}', phone = '{$phone}', url = '{$url}', 
        category = {$_POST['category']}, image_path = '{$imagePath}', u20= {$_POST['u20']}) 
        WHERE id={$_POST['id']};"
        :
        "INSERT INTO places (name, description, address, opening_hours, phone, url, category, 
        image_path, u20) VALUES ('{$name}', '{$desc}', '{$address}', '{$openingHours}', '{$phone}', 
        '{$url}', {$_POST['category']}, '{$imagePath}','{$_POST['u20']}');";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect('admin/admin.php');
    } else {
        $mysqli->close();
        redirect('admin/manage_place.php');
    }
} else {
    redirect('admin/manage_place.php');
}
