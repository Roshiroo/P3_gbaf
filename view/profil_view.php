<?php
session_start();
require ('../model/verifyConnect.php');
$id = $_SESSION['user'][0];
$firstName = $_SESSION['user'][1];
$lastName = $_SESSION['user'][2];
$email = $_SESSION['user'][3];
$created = $_SESSION['user'][5];
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
                    <td> <?php echo $firstName; ?> </td>
                </tr>
                <tr>
                    <td> Nom : </td>
                    <td> <?php echo $lastName; ?> </td>
                </tr>
                <tr>
                    <td> Email : </td>
                    <td> <?php echo $email; ?> </td>
                </tr>
                <tr>
                    <td> Compte crée le : </td>
                    <td> <?php echo $created; ?> </td>
                </tr>
            </table>
            <a href="../update.php"> Modifier mes Informations </a>
        </div>
    </body>
</html>