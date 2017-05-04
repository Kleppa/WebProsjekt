<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Style/jquery-->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/mdl/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/bootstrap-4/css/bootstrap.min.css">

    <!--Title, GJØRE DENNE TIL VARIABEL?-->
    <title>Wenture</title>


</head>
<body>



<?php require "../header.php" ?>



<div id="karusell" class="carousel" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#karusell" data-slide-to="0" class="active"></li>
        <li data-target="#karusell" data-slide-to="1"></li>
        <li data-target="#karusell" data-slide-to="2"></li>
        <li data-target="#karusell" data-slide-to="3"></li>

    </ol>

    <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
            <img class="d-block img-fluid" src="http://placehold.it/700x200" alt="...">
            <div class="carousel-caption">
                <h3>Fasade</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/700x200" alt="...">
            <div class="carousel-caption">
                <h3>Baren</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/700x200" alt="...">
            <div class="carousel-caption">
                <h3>Lokalet</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/700x200" alt="...">
            <div class="carousel-caption">
                <h3>Misc</h3>
            </div>
        </div>


    </div> <!-- Carousel inner box -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#karusell" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#karusell" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


</div> <!-- Carousel -->

<div class="headline"><h1>Hytta Bar</h1></div>

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'London')">London</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>





<?php require "../footer.php" ?>

<!--Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="../css/bootstrap-4/js/bootstrap.min.js"></script>
<script src="../css/mdl/material.min.js"></script>

</body>
</html>