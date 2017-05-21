<?php
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $title = mysqlPrep($_POST['title']);
    $desc = mysqlPrep($_POST['description']);
    $address = mysqlPrep($_POST['address']);
    $openingHours = mysqlPrep($_POST['opening_hours']);
    $phone = mysqlPrep($_POST['phone']);
    $url = mysqlPrep($_POST['url']);
    $imagePath = mysqlPrep($_POST['image_path']);

    $sql = isset($_GET['id']) ?
        "UPDATE places SET title = '{$title}', description = '{$desc}', address = '{$address}', 
        opening_hours = '{$openingHours}', phone = '{$phone}', url = '{$url}', 
        category = {$_POST['category']}, image_path = '{$imagePath}', u20= {$_POST['u20']}) 
        WHERE id={$_POST['id']};"
        :
        "INSERT INTO places (title, description, address, opening_hours, phone, url, category, 
        image_path, u20) VALUES ('{$title}', '{$desc}', '{$address}', '{$openingHours}', '{$phone}', 
        '{$url}', {$_POST['category']}, '{$imagePath}','{$_POST['u20']}');";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_place.php');
    }
} else {
    redirect(server_root() . '/admin/manage_place.php');
}
