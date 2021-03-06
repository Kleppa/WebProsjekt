<?php
// Saves or adds an event based on fields supplied by manage_event.php

session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';
if (!(loggedIn())) {
    redirect(server_root(1) . '/admin/login.php');
}

if (isset($_POST['submit'])) {

    $title = mysqlPrep($_POST['title']);
    $desc = mysqlPrep($_POST['description']);
    $price = (isset($_POST['price'])) ? '00.00' : mysqlPrep($_POST['price']);
    $imagePath = mysqlPrep($_POST['image_path']);
    $pros = mysqlPrep($_POST['pros']);

    validatePresences(['title', 'description', 'image_path', 'pros']);
    validateMaxLength(['title' => 30]);
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            $_SESSION['messages'] .= '<div class="alert alert-danger"><strong>Error! </strong>' . $error . '</div>';
        }
        redirect(server_root(1) . $_SERVER['REQUEST_URI']);
    }

    $datetime = explode('T', $_POST['datetime']);
    $date = $datetime[0];
    $time = $datetime[1];

    $sql = isset($_GET['id']) ?
        "UPDATE events SET title = '{$title}', place = {$_POST['place']}, `datetime` = '{$date} {$time}',
        description = '{$desc}', pros = {$pros}, is_free = {$_POST['is_free']}, price = '{$price}', image_path = '{$imagePath}'
        WHERE id={$_GET['id']};"
        :
        "INSERT INTO events (title, place, datetime, description, pros, is_free, price, image_path) 
        VALUES ('{$title}', {$_POST['place']}, '{$date}', '{$desc}', '{$pros}',{$_POST['is_free']},
        '{$price}', '{$imagePath}');";

    if ($result = $mysqli->query($sql)) {
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_event.php');
    }
} else {
    redirect(server_root() . '/admin/manage_event.php');
}
