<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);
    $desc = mysqlPrep($_POST['description']);
    $address = mysqlPrep($_POST['address']);
    $openingHours = mysqlPrep($_POST['opening_hours']);
    $phone = mysqlPrep($_POST['phone']);
    $url = mysqlPrep($_POST['url']);
    $imagePath = mysqlPrep($_POST['image_path']);

    $sql  = "INSERT INTO places (name, description, address, opening_hours, phone, url, category, image_path, u20) 
            VALUES ('{$name}', '{$desc}', '{$address}', '{$openingHours}', '{$phone}', '{$url}', {$_POST['category']}, '{$imagePath}','{$_POST['u20']}');";
    $result = $mysqli->query($sql);

    if ($result) {
        mysqli_free_result($result);
        $mysqli->close();
        redirect('places.php');
    } else {
        $mysqli->close();
        redirect('form_add_place.php');
    }
} else {
    redirect('form_add_place.php');
}
