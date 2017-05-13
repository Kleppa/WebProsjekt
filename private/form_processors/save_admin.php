<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/private/phpscripts/validation_functions.php';

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
            redirect('/admin/admin.php');
        } else {
            $mysqli->close();
            redirect('/admin/manage_admin.php');
        }
    } else {
        redirect('/admin/manage_admin.php');
    }
} else {
    redirect('/admin/manage_admin.php');
}
