<?php
$pagetitle = 'home';
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
                    <?php
                    $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                    if ($result = $mysqli->query($sql)) {
                        $row = mysqli_fetch_assoc($result);
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                    }
                    ?>>
            </a>
            <div class="carousel-caption">
                <h3>Events</h3>
            </div>
        </div>
        <div class="carousel-item">
            <a class="fillerTag" href="events.php?category=places">
                <img class="d-block img-fluid"
                    <?php
                    $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1 ;";
                    if ($result = $mysqli->query($sql)) {
                        $row = mysqli_fetch_assoc($result);
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                    }
                    ?>>
            </a>
            <div class="carousel-caption">
                <h3>Places</h3>
            </div>
        </div>
        <div class="carousel-item">
            <a class="fillerTag" href="events.php?category=drink">
                <img class="d-block img-fluid"
                    <?php
                    $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1,1 ;";
                    if ($result = $mysqli->query($sql)) {
                        $row = mysqli_fetch_assoc($result);
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                    }
                    ?>>
            </a>
            <div class="carousel-caption">
                <h3> XXXX</h3>
            </div>

        </div>

        <div class="carousel-item">
            <a class="fillerTag" href="events.php?category=food">
                <img class="d-block img-fluid"
                    <?php
                    $sql = "SELECT *  FROM food ORDER BY score DESC  LIMIT 1 ;";
                    if ($result = $mysqli->query($sql)) {
                        $row = mysqli_fetch_assoc($result);
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '"';
                    }
                    ?>>
            </a>
            <div class="carousel-caption">
                <h3>Food</h3>
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
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a style="color: black; text-decoration: none;" href= <?php
            $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    echo '"info/details.php?id=' . $row['id'] . '&type=' . $row['type'] . '"';
                }
            }
            ?>>
                <img class="img-fluid img-others" <?php

                $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '">';
                    }

                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';

                } ?>
            </a>
        </div>
        <div class=" col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a style="color: black; text-decoration: none;" href= <?php
            $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1 ;";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    echo '"info/details.php?id=' . $row['id'] . '&type=' . $row['type'] . '"';
                }
            }
            ?>>
                <img class="img-fluid img-others" <?php $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '">';
                    }

                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';

                }
                ?>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a style="color: black; text-decoration: none;" href= <?php
            $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1,1 ;";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    echo '"info/details.php?id=' . $row['id'] . '&type=' . $row['type'] . '"';
                }
            }


            ?>>


                <img class="img-fluid img-others" <?php $sql = "SELECT *  FROM places ORDER BY score DESC  LIMIT 1,1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '">';
                    }
                    //NO STYLES HERE OYOOO
                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';

                }
                ?>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a style="color: black; text-decoration: none;" href= <?php
            $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1,1 ;";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    echo '"info/details.php?id=' . $row['id'] . '&type=' . $row['type'] . '"';
                }
            }
            ?>>
                <img class="img-fluid img-others" <?php $sql = "SELECT *  FROM events ORDER BY score DESC  LIMIT 1,1 ;";
                if ($result = $mysqli->query($sql)) {
                    foreach ($result as $row) {
                        echo 'src="' . $row['image_path'] . '"' . ' alt="' . $row['title'] . '">';
                    }

                    echo '<h4>' . $row['title'] . '</h4>';
                    echo '<p>' . $row['description'] . '</p>';
                }
                ?>
            </a>
        </div>
    </div>
</div>
<?php require_once 'private/includes/footer.php'; ?>
