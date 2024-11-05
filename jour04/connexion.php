<?php

    session_start();

    $pseudo = $_GET["pseudo"] ?? "!";

    echo $pseudo;

    $_SESSION["username"] = $pseudo;

    echo "Pseudo sauvegardé";

    header("Location: welcome.php");

?>
