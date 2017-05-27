<?php
/**
 * Created by PhpStorm.
 * User: Kleppa
 * Date: 27/05/2017
 * Time: 15:11
 */
require_once '../../vendor/autoload.php';
require_once '../phpscripts/db_connector.php';
require_once '../phpscripts/functions.php';
require_once '../phpscripts/validation_functions.php';
session_start();


    if(isset($_POST['username'])){
        $_SESSION['username']=null;

        redirect($_POST['URI']);
    }
?>