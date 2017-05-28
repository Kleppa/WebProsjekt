<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {
    validatePresences(['username', 'password', 'password_repeat']);
    validateMaxLength(['username' => 15, 'password' => 20, 'password_repeat' => 20]);
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            $_SESSION['messages'] .= '<div class="alert alert-danger"><strong>Error! </strong>' . $error . '</div>';
        }
        redirect(server_root(1) . $_SERVER['REQUEST_URI']);
    }

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
            $_SESSION['messages'] = 'Username already exists.';
            redirect(server_root() . '/admin/manage_admin.php');
        }
    } else {
        $_SESSION['messages'] = '<div class="alert alert-warning"><strong>Error! </strong>Passwords need to match.</div>';
        redirect(server_root() . '/admin/manage_admin.php');
    }
} else {
    redirect(server_root() . '/admin/manage_admin.php');
}
