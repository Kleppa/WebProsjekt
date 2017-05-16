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
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/manage_food.php');
    }
} else {
    redirect(server_root() . '/admin/manage_food.php');
}
