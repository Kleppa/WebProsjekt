<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Style/jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mdl/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/bootstrap-4/css/bootstrap.min.css">

    <!--Title, GJØRE DENNE TIL VARIABEL?-->
    <title>Wenture</title>


</head>
<body>

<?php require "header.php"; ?> <!-- Header-->

    <!--<div class="container">-->
        <div id="karusell" class="carousel" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#karusell" data-slide-to="0" class="active"></li>
                    <li data-target="#karusell" data-slide-to="1"></li>
                    <li data-target="#karusell" data-slide-to="2"></li>
                    <li data-target="#karusell" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="http://placehold.it/800x500" alt="...">
                        <div class="carousel-caption">
                            <h3>Chill bar</h3>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/800x500" alt="...">
                        <div class="carousel-caption">
                            <h3>Hip restaurant</h3>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/800x500" alt="...">
                        <div class="carousel-caption">
                            <h3> The park</h3>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/800x500" alt="...">
                        <div class="carousel-caption">
                            <h3>Concert this week!</h3>
                        </div>
                    </div>


                </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#karusell" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#karusell" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>



        </div>




    <!-- setup clickable images from database -->

        <div class="imageHolder" id="drinkImg"><a href=""> </a> </div>
        <div class="imageHolder" id="TasteImg"><a href=""> </a></div>
        <div class="imageHolder" id="StreetImg"><a href=""> </a></div>
        <div class="imageHolder" id="chillImg"><a href=""> </a></div>



        <div class="txtContainerIndex">
            <p class="btnTxt" id="drinkText">Drinks</p>
            <p class="btnTxt" id="tasteTxt">Taste</p>
            <p class="btnTxt" id="streetTxt">Street art(?) </p>
            <p class="btnTxt" id="chillTxt">Chill </p>

        </div>


    <!--</div> -->
<?php require "footer.php"; ?>

<!--Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="css/bootstrap-4/js/bootstrap.min.js"></script>
<script src="css/mdl/material.min.js"></script>
</body>
</html>