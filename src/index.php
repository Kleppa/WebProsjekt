<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title>Wenture</title>


</head>
<body>

<?php
require "header.php";
?>

<div class="row">
    <div class="col-lg-6 col-md-2 col-md-offset-3" id="centerDiv">
        <img src="20100902_img-test.jpg">
    </div>
</div>
<!--Fix posistioning and scaleability -->
<div class="imageContainer">

    <!-- setup clickable images from database-->

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


</body>
</html>