<?php
$_SESSION['nom'] = $login;
echo "<p class=\"success\">Votre login est ".$_SESSION['nom']."
    votre mot de passe est ".md5($mdp);
    header("Location: connection.php");
    exit;
?>