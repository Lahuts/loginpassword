<fieldset>
            <legend>Connectez vous à votre Session</legend>
            <form action=<?= "log.php"?> method="post">
                <label for="mail">adresse mail :</label>
                <input type="email" name="mail" id="mail">
                <label for="psw">mot de passe</label>
                <input type="password" name="psw" id="psw">
                <input type="submit" value="ENVOYER">
            </form>
        </fieldset>