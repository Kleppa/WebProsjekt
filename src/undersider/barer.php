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



<?php require "../footer.php";