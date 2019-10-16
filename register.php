<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/register.css">
        <title> Inscription </title>
    </head>
    <body>
    <div class="conteneur">
        <div class="element01">
            <div class="registerTitle">
                <span> Inscription au site GBAF </span>
            </div>
        <form action="register_post.php" method="POST"> 
                <input class="input01" type="text" name="firstName" placeholder="Prénom" autofocus required><br>
                <input class="input01" type="text" name="lastName" placeholder="Nom" autofocus required><br>
                <input class="input01" type="email" name="email" placeholder="Adresse email" autofocus required><br>
                <input class="input01" type="password" name="password" placeholder="Mot de passe" autofocus required><br>
                <input class="input01" type="password" name="repeat_password" placeholder="Confirmer le mot de passe" autofocus required/> <br>
                <button class="buttonRegister" href="partenaire.php" > Valider et s'inscrire</button>
        </form>
        </div> <!-- element01 -->
    </div> <!-- conteneur end -->
    </body>
</html>