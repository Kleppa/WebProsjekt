<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';

loggedIn();

?>
<html>
<head>
    <title>Add Food..</title>
    <link rel="stylesheet" href="../css/bootstrap-4/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">

    <form name="test" method="post" action="add_admin.php">
        <div class="form-group row">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" id="username" value="">
        </div>

        <div class="form-group row">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" value="">

            <label for="password_repeat">Repeat password:</label>
            <input type="password" name="password_repeat" class="form-control" id="password_repeat" value="">
        </div>

        <div class="row">
            <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
        </div>
    </form>
</div>

</body>
</html>
