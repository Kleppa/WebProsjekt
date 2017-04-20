<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title>Wenture login</title>


</head>
<body>
<?php
require "header.php";
?>

<div id="loginContainer">
    <form action="sendInfo.php" method="post">
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">Username</span>
        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="user">
    </div>
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">Password</span>
        <input type="text" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="pass">

    </div>
    <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>