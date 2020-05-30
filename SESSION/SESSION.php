<?php

    session_start();
    $_SESSION["pseudo"] = "harry";
    $_SESSION["mdp"] = "test";

    echo "<br> Nº1:";
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    unset($_SESSION["mdp"]);
    echo "<br> Nº2:";
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    session_destroy();
    
    echo "<br> Nº3:";
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

?>