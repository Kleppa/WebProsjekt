<?php
require '/WebProsjekt/vendor/autoload.php';
require '/WebProsjekt/src/private/phpscripts/db_connector.php';
require '/WebProsjekt/src/private/phpscripts/functions.php';
require '/WebProsjekt/src/private/phpscripts/validation_functions.php';

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
