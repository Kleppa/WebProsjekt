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

if (isset($_GET['id'])) {

    $sql = "DELETE FROM {$_GET['type']} WHERE id = {$_GET['id']}";

    if ($result = $mysqli->query($sql)) {
        $result->free();
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    } else {
        $mysqli->close();
        redirect(server_root() . '/admin/admin.php');
    }
} else {
    redirect(server_root() . '/events.php');
}
