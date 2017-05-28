<?php
session_start();
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
                    <div class="fill">
                        <img src="<?php echo server_root(1); ?>/img/wenture/pexels-photo-247915.jpg"
                             alt="Wenture-Info-Page">
                    </div>
                    <div class="carousel-caption">
                        <h2>Wenture</h2>
                        <h3>Student Handbook For Westerdals</h3>
                    </div>
                </a>
            </div>

            <div class="carousel-item">
                <a class="fillerTag" href="events.php?category=places">
                    <div class="fill">
                        <img src="<?php
                        if ($result = $mysqli->query("SELECT *  FROM places WHERE category= 1 OR category= 5 ORDER BY score DESC  LIMIT 1,1 ;")) {
                        $row = mysqli_fetch_assoc($result);
                        echo server_root() . $row['image_path']; ?>" alt="<?php echo $row['title']; ?>">
                        <?php } ?>
                    </div>
                    <div class="carousel-caption">
                        <h3>Places To Find A Drink!</h3>
                    </div>
                </a>
            </div> <!-- carousel-item -->

            <div class="carousel-item">
                <a class="fillerTag" href="events.php?category=drink">
                    <div class="fill">
                        <img src="<?php
                        if ($result = $mysqli->query("SELECT *  FROM places WHERE category =3 OR category=6 ORDER BY score DESC  LIMIT 1,1;")) {
                        $row = mysqli_fetch_assoc($result);
                        echo server_root(1) . $row['image_path']; ?>" alt="<?php echo $row['title']; ?>"> <!-- img -->
                        <?php } ?>
                    </div>
                    <div class="carousel-caption">
                        <h3>Places To Find Something To Eat!</h3>
                    </div>
                </a>
            </div> <!-- carousel-item -->

            <div class="carousel-item i">
                <a class="fillerTag" href="events.php?category=food">
                    <div class="fill">
                        <img src="<?php
                        if ($result = $mysqli->query("SELECT *  FROM events ORDER BY score DESC  LIMIT 1 ;")) {
                        $row = mysqli_fetch_assoc($result);
                        echo server_root(1) . $row['image_path']; ?>" alt="<?php echo $row['title']; ?>"> <!-- img -->
                        <?php } ?>
                    </div>
                    <div class="carousel-caption">
                        <h3>Activities Near Campus!</h3>
                    </div>
                </a>
            </div> <!-- carousel-item -->

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
                <p>See the most popular places:</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a style="color: black; text-decoration: none;" href="<?php
                if ($result = $mysqli->query("SELECT *  FROM events ORDER BY score DESC  LIMIT 1;")) {
                $row = mysqli_fetch_assoc($result);
                echo 'info/details.php?id=' . $row['id'] . '&type=' . $row['type']; ?>">
                    <div class="fill mb-2" style="height:196px;">
                        <img src="<?php echo server_root(1) . $row['image_path'] ?>"
                             alt="<?php echo $row['title']; ?>"> <!-- img -->
                    </div>
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>

                    <?php } ?>
                </a>
            </div> <!-- trending-place -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a style="color: black; text-decoration: none;" href="info/details.php<?php
                if ($result = $mysqli->query("SELECT *  FROM places ORDER BY score DESC  LIMIT 1;")) {
                $row = mysqli_fetch_assoc($result);
                echo '?id=' . $row['id'] . '&type=' . $row['type']; ?>">
                    <div class="fill mb-2" style="height:196px;">
                        <img src="<?php echo server_root(1) . $row['image_path']; ?>"
                             alt="<?php echo $row['title']; ?>">
                    </div>
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>

                    <?php } ?>
                </a>
            </div> <!-- trending-place -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a style="color: black; text-decoration: none;" href="info/details.php<?php
                if ($result = $mysqli->query("SELECT *  FROM places ORDER BY score DESC  LIMIT 1,1;")) {
                $row = mysqli_fetch_assoc($result);
                echo '?id=' . $row['id'] . '&type=' . $row['type']; ?>">

                    <div class="fill mb-2" style="height:196px;">
                        <img src="<?php echo server_root(1) . $row['image_path']; ?>"
                             alt="<?php echo $row['title']; ?>"> <!-- img -->
                    </div>
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>

                    <?php } ?>
                </a>
            </div> <!-- trending-place -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a style="color: black; text-decoration: none;" href="info/details.php<?php
                if ($result = $mysqli->query("SELECT *  FROM events ORDER BY score DESC  LIMIT 1,1;")) {
                $row = mysqli_fetch_assoc($result);
                echo '?id=' . $row['id'] . '&type=' . $row['type']; ?>">
                    <div class="fill mb-2" style="height:196px;">
                        <img src="<?php echo server_root(1) . $row['image_path']; ?>"
                             alt="<?php echo $row['title']; ?>">
                    </div>
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <?php } ?>
                </a>
            </div> <!-- trending-place -->

        </div> <!-- row -->
    </div> <!-- container -->

<?php require_once 'private/includes/footer.php';
