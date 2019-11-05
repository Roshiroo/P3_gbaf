<?php
require ('../profil.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Information </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/profil.css">
    </head>
    <body>
        <div>
            <h1> Informations Utilisateur </h1>
        <div>
        <div>
            <table>
                <tr>
                    <td> Prénom : </td>
                    <td> <?php echo $user['firstName']; ?> </td>
                </tr>
                <tr>
                    <td> Nom : </td>
                    <td> <?php echo $user['lastName']; ?> </td>
                </tr>
                <tr>
                    <td> Email : </td>
                    <td> <?php echo $user['email']; ?> </td>
                </tr>
            </table>
        </div>
    </body>
</html>