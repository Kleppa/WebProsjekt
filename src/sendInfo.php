<?php
$path =  "db_connector.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $sql = "SELECT username, password FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "user: " . $row["username"] . " - password: " . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}
?>
