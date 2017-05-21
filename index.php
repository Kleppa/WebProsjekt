<?php
require_once 'vendor/autoload.php';
require_once 'private/phpscripts/functions.php';
require_once 'private/phpscripts/db_connector.php';
require_once 'private/includes/header.php';
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
                <a class="fillerTag" href="events.php">
                    <img class="d-block img-fluid"
                        <?phphttps://www.westerdals.no/content/uploads/2016/10/MH-brenneriveien-vulkan-oktober-15-1-800x600.jpg
                        $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                        if ($result = $mysqli->query($sql)) {
                            foreach ($result as $row) {
                                echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                            }
                        }
                        ?>>
                </a>
                <div class="carousel-caption">
                    <h3>Barer</h3>
                </div>
            </div>


            <div class="carousel-item">
                <a class="fillerTag" href="events.php?category=places">
                    <img class="d-block img-fluid"
                        <?php
                        // bildet viser paa alle pcer utenom jarand sin pc........
                        $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1 ;";
                        if ($result = $mysqli->query($sql)) {
                            foreach ($result as $row) {
                                echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                            }

                        }
                        ?>>
                </a>
                <div class="carousel-caption">
                    <h3>Steder</h3>
                </div>

            </div>


            <div class="carousel-item">
                <a class="fillerTag" href="events.php?category=drink">
                    <img class="d-block img-fluid"
                        <?php

                        $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1,1 ;";
                        if ($result = $mysqli->query($sql)) {
                            foreach ($result as $row) {

                                echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                            }

                        }
                        ?>>
                </a>


                    <div class="carousel-caption">
                        <h3> The park</h3>
                    </div>

            </div>

            <div class="carousel-item">
                <a class="fillerTag" href="events.php?category=food">
                    <img class="d-block img-fluid"
                        <?php

                        $sql = "SELECT *  FROM food ORDER BY score DESC  LIMIT 1 ;";
                        if ($result = $mysqli->query($sql)) {
                            foreach ($result as $row) {

                                echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                            }

                        }
                        ?>>
                        </a>
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
    </div>

    <div class="container" id="trending-wrapper">
    <div class="row">
        <div class="col">
            <h2>Trending places right now:</h2>
            <p>See the most popular places:</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <a style="color: black; text-decoration: none;" href= <?php
        $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
        if ($result = $mysqli->query($sql)) {
            foreach ($result as $row) {
                echo '"info/restaurant_info.php?id=' . $row['id'] . '"';
            }
        }


        ?>>
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
                <img class="mb-3" <?php

                $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"style="height:218px;width:218px"';
                    }
                    echo 'style="min-width: 100%;min-height:100%">';
                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';

                }

                ?>
            </div>
        </a>
        <a style="color: black; text-decoration: none;" href= <?php
        $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1 ;";
        if ($result = $mysqli->query($sql)) {
            foreach ($result as $row) {
                echo '"info/restaurant_info.php?id=' . $row['id'] . '"';
            }
        }


        ?>>
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">

                <img class="mb-3" <?php $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"style="height:218px;width:218px"';
                    }
                    echo 'style="min-width: 100%;min-height:100%">';
                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';

                }
                ?>
            </div>
        </a>
        <a style="color: black; text-decoration: none;" href= <?php
        $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1,1 ;";
        if ($result = $mysqli->query($sql)) {
            foreach ($result as $row) {
                echo '"info/restaurant_info.php?id=' . $row['id'] . '"';
            }
        }


        ?>>
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">

                <img class="mb-3" <?php $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1,1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"style="height:218px;width:218px"';
                    }
                    echo 'style="min-width: 100%;min-height:100%">';
                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';

                }
                ?>
            </div>
        </a>


        <a style="color: black; text-decoration: none;" href= <?php
        $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1,1 ;";
        if ($result = $mysqli->query($sql)) {
            foreach ($result as $row) {
                echo '"info/restaurant_info.php?id=' . $row['id'] . '"';
            }
        }


        ?>>
            <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12 ">

                <img class="mb-3" <?php $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1,1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"style="height:218px;width:218px"';
                    }
                    echo 'style="min-width: 100%;min-height:100%">';
                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';

                }
                ?>
            </div>
        </a>
    </div>
</div>

<?php require_once 'private/includes/footer.php';?>
