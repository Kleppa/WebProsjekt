<?php
require 'phpscripts/db_connector.php';


echo $_GET['user'];
if (isset($_GET["user"]) && isset($_GET["pass"])) {
    echo "Ifcheck passed";
    $sql = "SELECT username, password FROM Users";
    $result = $conn->query($sql);

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
?>
