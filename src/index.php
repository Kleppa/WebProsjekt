<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <title>Title</title>


</head>
<body>

<script src ="css/js/dropdown.js"></script>
<nav class="navbar fixed-top navbar-inverse bg-primary" id="navbar">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" style="background-color: #000000" type="button" data-toggle="dropdown">Meny
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">drinks</a></li>
            <li><a href="#">events</a></li>
            <li><a href="#">map</a></li>
        </ul>
    </div>
  <h1 class="col-md-offset-5" id="name">Wenture</h1>

</nav>

<div class="row c">
    <div class="col-lg-6 col-md-2 col-md-offset-3" id="centerDiv">
        <img src="20100902_img-test.jpg">
    </div>
</div>
<!-- -->
<div id="imageContainer">

    <!-- setup clickable images-->

    <div class="imageHolder" id="drinkImg"><a href=""><!--Image--></a> </div>
    <div class="imageHolder" id="TasteImg"><a href=""><!--Image--></a></div>
    <div class="imageHolder" id="StreetImg"><a href=""><!--Image--></a></div>
    <div class="imageHolder" id="chillImg"><a href=""><!--Image--></a></div>

    <p class="btnTxt" id="drinkText">Drinks</p>
    <p class="btnTxt" id="tasteTxt">Taste</p>
    <p class="btnTxt" id="streetTxt">Street art(?) </p>
    <p class="btnTxt" id="chillTxt">Chill </p>

</div>


</body>
</html>