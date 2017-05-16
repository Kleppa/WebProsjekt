<?php function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }

    return $out;
}

require server_root() . 'vendor/autoload.php';
require server_root() . 'private/phpscripts/db_connector.php';
require server_root() . 'private/phpscripts/functions.php';
require server_root() . 'private/phpscripts/validation_functions.php';

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
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_place.php');
    }
} else {
    redirect(server_root() . '/admin/manage_place.php');
}
