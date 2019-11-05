<?php
session_start();
require ('model/connect_bd.php');

if (isset($_GET['user'])) 
{
    $id = htmlspecialchars($_GET['user']);
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
