<?php

    session_start();

?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1> Welcome </h1>
        <p> Bienvenue <?php echo $_SESSION["username"]; ?> </p>
    </body>
</html>