<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';
require '../phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {

    $name = mysqlPrep($_POST['name']);
    $desc = mysqlPrep($_POST['description']);

    $sql  = "INSERT INTO food (place, name, description, price) 
            VALUES ({$_POST['place']}, '{$name}', '{$desc}', {$_POST['price']});";
    $result = $mysqli->query($sql);

    if ($result) {
        mysqli_free_result($result);
        $mysqli->close();
        redirect('places.php');
    } else {
        $mysqli->close();
        redirect('form_add_food.php');
    }
} else {
    redirect('form_add_food.php');
}
