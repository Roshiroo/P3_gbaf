<?php
session_start();
require ('model/connect_bd.php');

if (isset($_SESSION['user'])) 
{
    $id = $_SESSION['user'][0];
    $firstName = $_SESSION['user'][1];
    $bdd = connect();
    $req = $bdd->prepare('SELECT * FROM member WHERE id = ?');
    $req->execute(array($id)); 
    if ($req->RowCount() == 1) 
    {
        $user = $req->fetch();
        header('Location: view/profil_view.php?user=?');
    } 
    else 
    {
        $error = 'Utilisateur introuvable !';
    }
}
else 
{
    $error = 'nnon précisé';
}
