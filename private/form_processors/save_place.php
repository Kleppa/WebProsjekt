<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {
    validatePresences(['title', 'description', 'street', 'city', 'zip', 'img', 'img_text', 'image_path', 'pros']);
    validateMaxLength(['title' => 30, 'street' => 30, 'city' => 30, 'zip' => 4, 'img_text' => 50, 'pros' => 70]);
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            $_SESSION['messages'] .= '<div class="alert alert-danger"><strong>Error! </strong>' . $error . '</div>';
        }
        redirect(server_root(1) . $_SERVER['REQUEST_URI']);
    }

    $openingHours = '';
    if (isset($_POST['closed_check_monday'])) {
        $openingHours .= 'closed-closed';
    } else {
        $openingHours .= $_POST['monday_time_from'] . '-' . $_POST['monday_time_to'];
    }
    $openingHours .= ',';
    if (isset($_POST['closed_check_tuesday'])) {
        $openingHours .= 'closed-closed';
    } else {
        $openingHours .= $_POST['tuesday_time_from'] . '-' . $_POST['tuesday_time_to'];
    }
    $openingHours .= ',';
    if (isset($_POST['closed_check_wednesday'])) {
        $openingHours .= 'closed-closed';
    } else {
        $openingHours .= $_POST['wednesday_time_from'] . '-' . $_POST['wednesday_time_to'];
    }
    $openingHours .= ',';
    if (isset($_POST['closed_check_thursday'])) {
        $openingHours .= 'closed-closed';
    } else {
        $openingHours .= $_POST['thursday_time_from'] . '-' . $_POST['thursday_time_to'];
    }
    $openingHours .= ',';
    if (isset($_POST['closed_check_friday'])) {
        $openingHours .= 'closed-closed';
    } else {
        $openingHours .= $_POST['friday_time_from'] . '-' . $_POST['friday_time_to'];
    }
    $openingHours .= ',';
    if (isset($_POST['closed_check_saturday'])) {
        $openingHours .= 'closed-closed';
    } else {
        $openingHours .= $_POST['saturday_time_from'] . '-' . $_POST['saturday_time_to'];
    }
    $openingHours .= ',';
    if (isset($_POST['closed_check_sunday'])) {
        $openingHours .= 'closed-closed';
    } else {
        $openingHours .= $_POST['sunday_time_from'] . '-' . $_POST['sunday_time_to'];
    }

    $title = mysqlPrep($_POST['title']);
    $desc = mysqlPrep($_POST['description']);
    $pros = mysqlPrep($_POST['pros']);
    $address = mysqlPrep($_POST['street'] . ',' . $_POST['zip'] . ',' . $_POST['city']);
    $openingHours = mysqlPrep($openingHours);
    $phone = mysqlPrep($_POST['tel']);
    $url = mysqlPrep($_POST['url']);
    $imagePath = mysqlPrep($_POST['img']);
    $imageText = mysqlPrep($_POST['img_text']);
    $u20 = (isset($_POST['u20'])) ? 1 : 0;

    $sql = isset($_GET['id']) ?
        "UPDATE places SET title = '{$title}', description = '{$desc}', pros = '{$pros}', address = '{$address}', 
        opening_hours = '{$openingHours}', phone = '{$phone}', url = '{$url}', 
        category = {$_POST['category']}, image_path = '{$imagePath}', img_text = '{$imageText}', u20 = $u20 
        WHERE id = {$_GET['id']};"
        :
        "INSERT INTO places (title, description, pros, address, opening_hours, phone, url, category, 
        image_path, img_text, u20) VALUES ('{$title}', '{$desc}', '{$pros}', '{$address}', '{$openingHours}', '{$phone}', 
        '{$url}', {$_POST['category']}, '{$imagePath}', '{$imageText}', {$u20});";

    if ($result = $mysqli->query($sql)) {
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_place.php');
    }
} else {
    redirect(server_root() . '/admin/manage_place.php');
}
