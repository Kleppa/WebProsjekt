<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wenture</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Style/Scripts-->
    <link rel="stylesheet" href="css/bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>

<?php require "header.php" ?> <!--Header-->

    <!-- <div class="container ">-->
    <div id="customCarousel" class="carousel" data-ride="carousel"> <!--Bildekarusell-->

        <ol class="carousel-indicators"> <!-- Bildeindikatorer-->
            <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel" data-slide-to="1"></li>
            <li data-target="#customCarousel" data-slide-to="2"></li>
            <li data-target="#customCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/700x400" alt="...">
                <div class="carousel-caption">
                    <h3>Chill bar</h3>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/700x400" alt="...">
                <div class="carousel-caption">
                    <h3>Hip restaurant</h3>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/700x400" alt="...">
                <div class="carousel-caption">
                    <h3> The park</h3>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/700x400" alt="...">
                <div class="carousel-caption">
                    <h3>Concert this week!</h3>
                </div>
            </div>


        </div> <!-- Carousel inner box -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#customCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#customCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>


    </div> <!-- Carousel -->
<!--<div/>--> <!--Container-->

<?php require "footer.php" ?>