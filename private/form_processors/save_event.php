<?php function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }

    return $out;
}

require server_root() . '/vendor/autoload.php';
require server_root() . '/private/phpscripts/db_connector.php';
require server_root() . '/private/phpscripts/functions.php';
require server_root() . '/private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $title = mysqlPrep($_POST['title']);
    $desc = mysqlPrep($_POST['description']);
    $price = mysqlPrep($_POST['price']);
    $imagePath = mysqlPrep($_POST['image_path']);

    $sql = isset($_GET['id']) ?
        "UPDATE events SET title = '{$title}', place = {$_POST['place']}, datetime = '{$_POST['datetime']}',
        description = '{$desc}', is_free = {$_POST['is_free']}, price = '{$price}', image_path = '{$imagePath}'
        WHERE id={$_GET['id']};"
        :
        "INSERT INTO events (title, place, datetime, description, is_free, price, image_path) 
        VALUES ('{$title}', {$_POST['place']}, '{$_POST['datetime']}', '{$desc}', {$_POST['is_free']},
        '{$price}', '{$imagePath}');";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_event.php');
    }
} else {
    redirect(server_root() . '/admin/manage_event.php');
}
