<?php require '../header.php'; ?>

    <div class="container margin-adder">

        <div class="row justify-content-center">
            <div class="col-9">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Bilde</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Kart</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane  in active" id="profile"><img class="img-fluid" id="bildeboks" src="http://placehold.it/900x300"></div>
                    <div role="tabpanel" class="tab-pane fade" id="buzz">bbb</div>

                </div>

            </div>
            </div>

        <div class="row justify-content-center"> <h3> Navn på sted </h3> </div>

        <div class="row justify-content-center"> <h5> Oversikt | Spesial | Kontakt </h5> </div>

        <div class="row justify-content-center">
            <div class="col-8">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div> <!-- Her skal det stå pene ord om stedet, blir fethcet fra databasen.-->
        </div>

        <div class="row justify-content-center"> <h6> Andre steder i området </h6> </div>

        <!--Bilder skal fetches-->

        <div class="row justify-content-center text-center">

            <div class="col-3">
                <img class="img-fluid" src="http://placehold.it/200x300">
            </div>

            <div class="col-3">
                <img class="img-fluid" src="http://placehold.it/200x300">
            </div>

            <div class="col-3">
                <img class="img-fluid" src="http://placehold.it/200x300">
            </div>

            <!-- Alle bildene her skal fetches -->

        </div>

    </div> <!-- container -->

<?php require '../footer.php';