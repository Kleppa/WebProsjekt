<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Style/jquery-->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/bootstrap-4/css/bootstrap.min.css">

    <!--Title, GJØRE DENNE TIL VARIABEL?-->
    <title>Wenture</title>


</head>
<body>


<div id="contentContainer">

    <div id="body">

<?php require "../header.php" ?>





<div class="headline"><h1>Hytta Bar</h1></div>

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'London')">Fine Ord</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Spesialiter</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Kontakt Oss</button>
</div>

<div id="London" class="tabcontent">
    <p>Hytta Bar er en fin og attraktiv plass der man føler seg som på hytta. og ja, vi ha utedass.</p>
</div>

<div id="Paris" class="tabcontent">
    <p>- Chill bar</p>
    <p>- Billig HyttePils</p>
    <p>- Kidza sitter igjen hjemme</p>
</div>

<div id="Tokyo" class="tabcontent">
    <p>- Tlf: 999 99 999 </p>
    <p>- Adresse: Veien 1, 0000 Oslo </p>
    <p>- E-Post: post@post.no</p>
</div>



<?php require "../footer.php" ?>

    </div>

</div>
<!--Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="../css/bootstrap-4/js/bootstrap.min.js"></script>
<script src="../css/mdl/material.min.js"></script>
<script src="../css/js/tests/tabsBar.js"></script>
</body>
</html>