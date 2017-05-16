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
    if ($_POST['password'] === $_POST['password_repeat']) {

        $username = mysqlPrep($_POST['username']);
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = isset($_GET['id']) ?
            "UPDATE users SET username = '{$username}' users.password = '{$hashedPassword}' 
            WHERE id = {$_GET['id']};"
            :
            "INSERT INTO users (username, password) 
            VALUES ('{$username}', '{$hashedPassword}');";

        if ($result = $mysqli->query($sql)) {
            $result->free();
            $mysqli->close();
            redirect(server_root() . '/admin/admin.php');
        } else {
            $mysqli->close();
            redirect(server_root() . '/admin/manage_admin.php');
        }
    } else {
        redirect(server_root() . '/admin/manage_admin.php');
    }
} else {
    redirect(server_root() . '/admin/manage_admin.php');
}
