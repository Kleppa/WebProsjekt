<?php
require_once 'vendor/autoload.php';
require_once 'private/phpscripts/functions.php';
require_once 'private/phpscripts/db_connector.php';
require_once 'private/includes/header.php';  // Header
?>
    <!--Bildekarusell-->
    <div id="customCarousel" class="carousel mb-3" data-ride="carousel">

        <!-- Bildeindikatorer-->
        <ol class="carousel-indicators">
            <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel" data-slide-to="1"></li>
            <li data-target="#customCarousel" data-slide-to="2"></li>
            <li data-target="#customCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <img class="d-block img-fluid"
                    <?php

                    $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                    if ($result = $mysqli->query($sql)) {
                        foreach ($result as $row){
                            echo 'src="'.$row['image_path'] . '"'.' alt="'.$row['title'].'"';
                            }

                        }
                    ?>>

                <div class="carousel-caption">
                    <h3>Chill bar</h3>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block img-fluid"
                    <?php
                    // KLARER IKKE å BRUKE WESTERDALS FJERDING BILDET??? prøvd alt aner ikke hva som er feil.
                    $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                    if ($result = $mysqli->query($sql)) {
                        foreach ($result as $row){
                            echo 'src="'.$row['image_path'] . '"'.' alt="'.$row['title'].'"';
                        }

                    }
                    ?>>

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
                <img class="d-block img-fluid" src="http://placehold.it/1000x600" alt="...">
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

    <div class="container" id="trending-wrapper">
        <div class="row">
            <div class="col">
                <h2>Trending places right now:</h2>
                <p>See the most popular places by category</p>
            </div>
        </div>

        <div class="row">
            <!-- Bildene maa gjores klikkbare!
            <a href="<?php/*

                $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                if ($result = $mysqli->query($sql)) {
                    echo 'info/restaurant_info?id='.$result['id'].'"';
                }

            */?>
            -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
                <img class="mb-3"   <?php

                $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row){
                        echo 'src="'.$row['image_path'] . '"'.' alt="'.$row['title'].'"style="height:218px;width:218px"';
                    }
                    echo 'style="min-width: 100%;min-height:100%">';
                    echo '<h4>'.$row['title'].'</h4>';
                    echo '<p>'.$row['description'].'</p>';

                }

                ?>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
                <img class="mb-3"  <?php $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1 ;";
                     if ($result = $mysqli->query($sql)) {
                foreach ($result as $row){
                echo 'src="'.$row['image_path'] . '"'.' alt="'.$row['name'].'"style="height:218px;width:218px"';
                }
                echo 'style="min-width: 100%;min-height:100%">';
                echo '<h4>'.$row['name'].'</h4>';
                echo '<p>'.$row['description'].'</p>';

                }
            ?>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
                <img class="mb-3" src="http://placehold.it/200x200" alt="qwe" style="min-width: 100%;">
                <h4>Place</h4>
                <p>Keywords about the place</p>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
                <img class="mb-3" src="http://placehold.it/200x200" alt="qwe" style="min-width: 100%;">
                <h4>Place</h4>
                <p>Keywords about the place</p>
            </div>

        </div>
    </div>

<?php require_once 'footer.php';
