<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';
require '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);

    $sql  = "INSERT INTO categories (name) VALUES ('{$name}');";
    $result = $mysqli->query($sql);

    if ($result) {
        mysqli_free_result($result);
        $mysqli->close();
        redirect('places.php');
    } else {
        $mysqli->close();
        redirect('form_add_category.php');
    }
} else {
    redirect('form_add_category.php');
}
