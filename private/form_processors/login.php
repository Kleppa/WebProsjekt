<?php
// Logs the user in by setting the username field in the current session.

session_start();
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';

if (loggedIn()) {
    redirect('../../admin/admin.php');
}

if (isset($_POST['submit']) && ($_POST['username'] || $_POST['username'])) {
    $username = mysqlPrep($_POST['username']);
    $password = mysqlPrep($_POST['password']);
    $sql = "SELECT * FROM users WHERE username = '{$username}';";

    if ($result = $mysqli->query($sql)) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify("{$password}", "{$row['password']}")) {
            $_SESSION['username'] = $username;
            $mysqli->close();
            redirect(server_root() . '/admin/admin.php');
        }
        $_SESSION['messages'] .= 'Password or username is incorrect.';
        $mysqli->close();
        redirect(server_root() . '/admin/login.php');
    } else {
        $_SESSION['messages'] .= 'Password or username is incorrect.';
        $mysqli->close();
        redirect(server_root() . '/admin/login.php');
    }
    $_SESSION['messages'] .= 'Missing username or password.';
    redirect(server_root() . '/admin/login.php');
}
redirect(server_root() . '/admin/login.php');
