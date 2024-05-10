<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to My First PHP Page</h1>
    <?php 
        echo"<p>Hello World!>";
    ?>
    <p>Current Date and Time: <?php
    date_default_timezone_set('America/New_York');
    echo date("Y-m-d H:i:s"); ?></p>
</body>
</html>