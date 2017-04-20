<?php
require 'phpscripts/db_connector.php';
echo "required php passed";
echo $_GET['user'];
if (isset($_POST["user"]) && isset($_POST["pass"])) {
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
