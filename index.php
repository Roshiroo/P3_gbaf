<!DOCTYPE html>
<html>
    <head>
    <title> Connexion </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="partenaire.php" method="POST" >
            <label for="identifiant"> Identifiant : </label> <input type="text" name="identifiant" id="identifiant" placeholder="L'identifiant" /> <br>
            <label for="password"> Mot de Passe : </label> <input type="password" name="password" id="password" placeholder="Mot de Passe" /> <br> 
            <input type="submit" value="Se Connecter" /> 
        </form>
        <a href="register.php"> Se crée un compte</a>
    </body>
</html>