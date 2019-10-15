<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/register.css">
        <title> Inscription </title>
    </head>
    <body>
        <form action="register_post.php" method="POST"> 
            <label for="firstName"> Prénom : </label>
                <input type="text" name="firstName" autofocus required><br>
            <label for="lastName">Nom : </label>
                <input type="text" name="lastName" autofocus required><br>
            <label for="email"> Adresse email : </label> 
                <input type="email" name="email" autofocus required><br>
            <label for="passeword">Mot de Passe :</label> 
                <input type="password" name="password" autofocus required><br>
            <label for="repeat_password"> Répetez votre mot de passe : </label>
                <input type="password" name="repeat_password" autofocus required/> <br>
                <input type="submit" value="Crée son compte" />
        </form>
    </body>
</html>