<?php

session_start();

if($_POST){
    $_SESSION["pseudo"] = $_POST["pseudo"];
}

if(isset($_SESSION["pseudo"])) { ?>
    <h2> Vous êtes connecté avec le pseudo :  <?php echo $_SESSION["pseudo"]; ?>  </h2>
<?php }

else { ?>
    <form method="post">
    <label for="pseudo">Pseudo:</label> <br>
    <input type="text" name="pseudo" value=""/> <br>
    <input type="password" name="mdp" value=""/> <br>
    <input type="submit" name="envoi" value="envoi"/>
    </form>;
<?php } ?>