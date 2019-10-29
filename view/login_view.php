<!DOCTYPE html>
<html>
    <head>
    <title> Connexion </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/login.css">
    </head>
    <body>
    <div class="conteneur">
        
        <div class="BlocOne">
            <div class="titleLogin">
            <span> Connexion </span>
        </div>
            <form action="connexion_post" method="POST" >
                    <input class="loginEmail" type="text" name="email" id="email" placeholder="email"  /> <br>
                    <input class="loginPassword" type="password" name="password" id="password" placeholder="Mot de Passe" /> <br> 
                    <button class="loginButton" name="submit" href="view/partenaire.php" > Se connecter </button> 
            </form>
        <div class="registerLink">
          <span class="registerLink-01"> Pas encore de compte ?   </span>
          <a class="registerLink-02" href="view/register_view.php"> Se créer un compte</a>
        </div>
    </div>
    </div>
    </body>
</html>