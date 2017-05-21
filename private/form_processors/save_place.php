<?php
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $openingHours = $_POST['monday-time-from'];
    $openingHours .= ',' . $_POST['monday-time-to'];
    $openingHours .= ',' . $_POST['tuesday-time-from'];
    $openingHours .= ',' . $_POST['tuesday-time-to'];
    $openingHours .= ',' . $_POST['wednesday-time-from'];
    $openingHours .= ',' . $_POST['wednesday-time-to'];
    $openingHours .= ',' . $_POST['thursday-time-from'];
    $openingHours .= ',' . $_POST['thursday-time-to'];
    $openingHours .= ',' . $_POST['friday-time-from'];
    $openingHours .= ',' . $_POST['friday-time-to'];
    $openingHours .= ',' . $_POST['saturday-time-from'];
    $openingHours .= ',' . $_POST['saturday-time-to'];
    $openingHours .= ',' . $_POST['sunday-time-from'];
    $openingHours .= ',' . $_POST['sunday-time-to'];

    $title = mysqlPrep($_POST['title']);
    $desc = mysqlPrep($_POST['description']);
    $address = mysqlPrep($_POST['street'] . ',' . $_POST['zip'] . ',' . $_POST['city']);
    $openingHours = mysqlPrep($openingHours);
    $phone = mysqlPrep($_POST['tel']);
    $url = mysqlPrep($_POST['url']);
    $imagePath = mysqlPrep($_POST['img']);
    $u20 = ($_POST['u20'] == 'on') ? 1 : 0;

    $sql = isset($_GET['id']) ?
        "UPDATE places SET title = '{$title}', description = '{$desc}', address = '{$address}', 
        opening_hours = '{$openingHours}', phone = '{$phone}', url = '{$url}', 
        category = {$_POST['category']}, image_path = '{$imagePath}', u20= {$_POST['u20']} 
        WHERE id={$_GET['id']};"
        :
        "INSERT INTO places (title, description, address, opening_hours, phone, url, category, 
        image_path, u20) VALUES ('{$title}', '{$desc}', '{$address}', '{$openingHours}', '{$phone}', 
        '{$url}', {$_POST['category']}, '{$imagePath}', {$u20});";

    if ($result = $mysqli->query($sql)) {
        mysqli_free_result($result);
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_place.php');
    }
} else {
    redirect(server_root() . '/admin/manage_place.php');
}
