<?php

$con=mysqli_connect('tek.westerdals.no','gabreve1_admin','QMdZOxXBi','gabreve1_pro101v17gr12');
echo $_GET['user'];
if (isset($_GET["user"]) && isset($_GET["pass"])) {

    //$result = mysqli_query("SELECT username, password FROM Users");

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "user: " . $row["username"] . " - password: " . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($con);
}
