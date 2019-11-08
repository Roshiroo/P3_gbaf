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
            <table>
                <tr>
                    <td> Prénom : </td>
                    <td> <input type="text" name="firstName" Value="<?= $_SESSION['user']['firstName']; ?>" /> </td>
                </tr>
                <tr>
                    <td> Nom : </td>
                    <td> <input type="text" name="lastName" Value="<?= $_SESSION['user']['lastName']; ?>" /> </td>
                </tr>
                <tr>
                    <td> Email : </td>
                    <td> <input type="text" name="email" Value="<?= $_SESSION['user']['email']; ?>" /> </td>
                </tr>
                <tr>
                    <td> Nouveau Mot de passe : </td>
                    <td> <input type="password" name="nouveau mot de passe"  /> </td>
                </tr>
                <tr>
                    <td> Confirmation du nouveau mot de passe : </td>
                    <td> <input type="repeat_password" name="confirmer nouveau mot de passe" /> </td>
                </tr>
            </table>
            <a href="update_bd.php" name="update_confirm" > Modifier les informations </a>
    </body>
</html>