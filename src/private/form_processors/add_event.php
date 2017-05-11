<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $title = mysqlPrep($_POST['title']);
    $desc = mysqlPrep($_POST['description']);
    $price = mysqlPrep($_POST['price']);
    $imagePath = mysqlPrep($_POST['image_path']);

    $sql  = "INSERT INTO events (title, place, datetime, description, is_free, price, image_path) 
            VALUES ('{$title}', {$_POST['place']}, '{$_POST['datetime']}', '{$desc}', {$_POST['is_free']}, '{$price}', '{$imagePath}');";
    $result = $mysqli->query($sql);

    if ($result) {
        mysqli_free_result($result);
        $mysqli->close();
        redirect('events.php');
    } else {
        $mysqli->close();
        redirect('form_add_event.php');
    }
} else {
    redirect('form_add_event.php');
}
