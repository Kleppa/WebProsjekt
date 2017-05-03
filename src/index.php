<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Style/jquery-->
    <link rel="stylesheet" href="css/mdl/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">


    <!--Title, GJØRE DENNE TIL VARIABEL?-->
    <title>Wenture</title>


</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!--Mdl layout starter-->
    <?php require "header.php" ?> <!--Header-->
        <main class="mdl-layout__content"> <!--Main content starter her-->

            <div id="karusell" class="carousel" data-ride="carousel"> <!--Bildekarusell-->

                <ol class="carousel-indicators"> <!-- Bildeindikatorer-->
                    <li data-target="#karusell" data-slide-to="0" class="active"></li>
                    <li data-target="#karusell" data-slide-to="1"></li>
                    <li data-target="#karusell" data-slide-to="2"></li>
                    <li data-target="#karusell" data-slide-to="3"></li>
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
                <a class="carousel-control-prev" href="#karusell" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#karusell" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div> <!-- Carousel -->


            <div id="categoryContainer">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--top"><a href="index.php"><img src="http://placehold.it/50x50"></a></div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--top"><img src="http://placehold.it/50x50"></div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--top"><img src="http://placehold.it/50x50"></div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--top"><img src="http://placehold.it/50x50"></div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--bottom"><p>Drinks</p></div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--bottom"><p>Food</p></div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--bottom"><p>Street-art</p></div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--bottom"><p>Chill</p></div>
                </div> <!--kategori-grid-->
            </div> <!-- Kategoriknapper-->


        <?php require "footer.php" ?> <!-- Footer -->

        </main><!-- Main content -->
    </div> <!-- MDL Layout -->
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="css/bootstrap-4/js/bootstrap.min.js"></script>
    <script src="css/mdl/material.min.js"></script>

</body>

</html>