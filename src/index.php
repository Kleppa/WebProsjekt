<?php require "header.php"; ?>


        <div class="container">

            <h2>Carousel</h2>

            <p>The Carousel creates a rotating slide show.</p>

            <div id="karusell" class="carousel" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Arnaut_and_his_dog_by_Jean_Leon_gerome.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Arnaut Blowing Smoke in His Dog's Nose,</h3>
                        </div>
                    </div>

                    <div class="carousel-item-next">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Bristol_Museum_Tadema_unconscious_rivals.JPG" alt="...">
                        <div class="carousel-caption">
                            Unconscious Rivals, Lawrence Alma-Tadema
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/Ferdinand_Max_Bredt_-_Türkische_Frauen.jpg" alt="...">
                        <div class="carousel-caption">
                            Turkish Women, Ferdinand Max Bredt
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Leon_Cogniet_-_L_Expedition_D_Egypte_Sous_Les_Ordres_De_Bonaparte.jpg" alt="...">
                        <div class="carousel-caption">
                            The 1798 Egyptian Expedition Under the Command of Bonaparte, Léon Cogniet, Louvre
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="aaaaaa" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <p>You can create a slideshow of images.  It works best if they are all the same size, but these images from Wikipedia vary a bit, so the slide size varies.  The carousel is sizeable depending on page width.</p>

        </div>


    <!-- setup clickable images from database -->

    <div class="imageHolder" id="drinkImg"><a href=""><!--Image--></a> </div>
    <div class="imageHolder" id="TasteImg"><a href=""><!--Image--></a></div>
    <div class="imageHolder" id="StreetImg"><a href=""><!--Image--></a></div>
    <div class="imageHolder" id="chillImg"><a href=""><!--Image--></a></div>
</div>


<div class="txtContainerIndex">
    <p class="btnTxt" id="drinkText">Drinks</p>
    <p class="btnTxt" id="tasteTxt">Taste</p>
    <p class="btnTxt" id="streetTxt">Street art(?) </p>
    <p class="btnTxt" id="chillTxt">Chill </p>

</div>

<?php require "footer.php"; ?>
