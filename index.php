<?php function server_root()
{
    $out = '';
    if (isset($_SERVER['CONTEXT_PREFIX'])) {
        $out .= $_SERVER['CONTEXT_PREFIX'];
    }
    return $out;
}

require "header.php" ?> <!--Header-->
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
            <img class="d-block img-fluid" src="http://placehold.it/1280x800" alt="Places to drink">
            <div class="carousel-caption">
                <h3>Chill bar</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/1280x800" alt="...">
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
        <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
            <img class="mb-3" src="http://placehold.it/200x200" alt="qwe" style="min-width: 100%;">
            <h4>Place #1</h4>
            <p>Keywords about the place</p>
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
        <div class="col-xl-3 col-lg-4 col-md-6 col-xs-12">
            <img class="mb-3" src="http://placehold.it/200x200" alt="qwe" style="min-width: 100%;">
            <h4>Place</h4>
            <p>Keywords about the place</p>
        </div>

    </div>
</div>


<?php require "footer.php" ?>
