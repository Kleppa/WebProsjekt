<?php
$pagetitle = 'about';
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';

require '../private/includes/header.php'
?>

    <div class="container margin-adder">
        <div class="row d-flex justify-content-center">
            <h1>WENTURE</h1>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <p>Wenture is the creation we made for our school project. Our goal is to make an
                    interactive website for the students at Westerdals, mapping the surrounding area around
                    Westerdals campuses.</p>

                <p> Our vision for Wenture is all about the experience students have off campus and when
                    they are going out to explore the city. Our website is filled with the best locations
                    around Westerdals, and with this we can show the students the best places to chill or
                    have drink.</p>

                <p>We also have a rating system where you can up vote places you like and then our overview
                    pages will sort the event/places from highest to lowest score. In that way, we keep the
                    hottest locations on top, ready to be explored!</p>

                <p>If you’re out of luck when coming to finding new places to visit, our handbook might be
                    the thing for you.</p>

                <p>Bon voyage, Wenturer!</p>

            </div> <!-- col -->
        </div> <!-- row -->

    </div> <!-- col -->

<?php require_once '../private/includes/footer.php';