<?php
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
    
    echo $_GET["email"] . "<br>";
    echo $_GET["password"] . "<br>";

    $email = $_GET["email"];
    $mdp = $_GET["password"];

    // vérifier si adresse = test@gmail.com
    // et le password = test

    if($email == "test@gmail.com" && $mdp == "test"){
        echo "<h2>Bienvenu sur votre compte, vous êtes
        bien connecté avec l'adresse email </h2>" . $email;
    }
    else {
        echo "<h2 style='color:red'>Veuillez vérifier votre adresse email</h2>";
    }
   

?>