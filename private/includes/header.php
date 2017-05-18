<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wenture<?php

        if (isset($pagetitle)) {
            echo ' - ' . ucfirst($pagetitle);
        } ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="<?php echo server_root() . '/css/main.css'; ?>">
    <?php if (isset($extra_links)) {
        foreach ($extra_links as $link => $v) {
            echo $v;
        }
    }//test ?>
</head>

<body>

<nav class="navbar navbar-toggleable-sm fixed-top" id="custom-navbar">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="#navbar">
            <i class="material-icons">&#xE5D2;</i>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="<?php echo server_root() . '/'; ?>">
            <img src="<?php echo server_root() . '/img/logo2.png'; ?>" style="width: 70px">
            Wenture
        </a>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?php echo server_root() . '/'; ?>">Home</a>
                <a class="nav-item nav-link"
                   href="<?php echo server_root() . '/places.php?category=drink'; ?>">Drink</a>
                <a class="nav-item nav-link" href="<?php echo server_root() . '/places.php?category=food'; ?>">Eat</a>
                <a class="nav-item nav-link" href="<?php echo server_root() . '/events.php'; ?>">Chill</a>
            </div> <!--Navbar-nav-->
        </div>

    </div><!--Container-->
    <?php
    if (!loggedIn()) {
        echo '<div class="pull-right float-button circle" id="key">
<i class="material-icons" id="vpnKey">vpn_key</i> </div>';
    }
    ?>
</nav><!--Navbar -->
