<?php
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

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
            mysqli_free_result($result);
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
