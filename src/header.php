<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wenture - <?php if (isset($pagetitle)) {
            echo ucfirst($pagetitle);
        } ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/src/css/main.css">
    <?php if (isset($extra_links)) {
        foreach ($extra_links as $link => $v) {
            echo $v;
        }
    } ?>
</head>
<body>

<nav class="navbar navbar-toggleable-sm fixed-top" id="custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/src/img/logo2.png" style="width: 70px">
            Wenture
        </a>
        <div class="navbar-nav">
            <a class="nav-item nav-link <?php //TODO check if active ?>" href="#">Home</a>
            <a class="nav-item nav-link <?php //TODO check if active ?>" href="#">Drink</a>
            <a class="nav-item nav-link <?php //TODO check if active ?>" href="#">Eat</a>
            <a class="nav-item nav-link <?php //TODO check if active ?>" href="#">Chill</a>
        </div> <!--Navbar-nav-->
    </div><!--Container-->
</nav><!--Navbar -->
<div class="push-content"></div>