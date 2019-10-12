<!DOCTYPE html>
<html>
    <head>
    <title> Connexion </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="connexion_post" method="POST" >
            <label for="email"> Adresse email : </label> <input type="text" name="email" id="email" placeholder="Email" autofocus required /> <br>
            <label for="password"> Mot de Passe : </label> <input type="password" name="password" id="password" placeholder="Mot de Passe" autofocus required/> <br> 
            <input type="submit" value="Se Connecter" /> 
        </form>
        <a href="register.php"> Se crée un compte</a>
    </body>
</html>