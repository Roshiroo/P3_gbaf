<?php
session_start();
if (!isset($_SESSION['user']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Modification </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/profil.css">
    </head>
    <body>
        <div>
            <h1> Modification des informations </h1>
        <div>
        <div>
        <form action="update_bd.php" method="POST">
            <p> Prénom : <input type="text" name="firstName" Value="<?= $_SESSION['user']['firstName']; ?>" /> </p>
            <p> Nom : <input type="text" name="lastName" Value="<?= $_SESSION['user']['lastName']; ?>" /> </p>
            <p> Adresse email : <input type="text" name="email" Value="<?= $_SESSION['user']['email']; ?>" /> </p>
            <p> Nouveau mot de passe : <input type="password" name="password"  /> </p>
            <p> Confirmer nouveau mot de passe : <input type="repeat_password" name="repeat_password" /> </p>
            <button type="submit"> Modifier les informations </button>
        </form>
            
    </body>
</html>