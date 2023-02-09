<?php

    if(isset($_POST["mail"]) || isset($_POST["psw"])){
    try {
        $reponse = $_bdd->query("SELECT mail, password FROM  userData WHERE mail = '{$_POST['mail']}' limit 1");
        $DATA = $reponse->fetch();
        $login = $_POST["mail"];
        $mdp = $_POST["psw"];
        if(!$login || !$mdp){
            echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
        }
        else if(!password_verify($_POST["psw"],$DATA['password'])){
            echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
        }
    else if(password_verify($_POST["psw"],$DATA['password']))
    {
        session_start();
        $_SESSION['nom'] = $DATA['mail'];
        echo "<p class=\"success\">Votre login est ".$_SESSION['nom']."votre mot de passe est  ".md5($mdp);
                                header("Location: connection.php");
                                exit;
                                
    }
    } catch (Exception $e) {
        //throw $th;
    }


}
    

?>
