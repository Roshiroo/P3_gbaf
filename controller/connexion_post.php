<?php
session_start(); 
    require ('../model/verifyConnect.php');
    if (isset($_POST['submit']) AND !empty($_POST['email']) AND !empty($_POST['password']))
    {
        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars ($_POST['password']);
        $req = verifyConnect($email, $password);
        if ($req -> rowCount() == 1 ) //si mdp en double dans la bdd , ne connecte pas
        {
            
            $user = $req->fetch();
            $_SESSION['user'] = $user;
            header('Location: ../view/partenaire_view.php');
        }
        else 
        {
            echo 'Mot de passe ou email incorrect';
            echo   ' <p> <a href="../index.php"> recommencer </a> </p>';
        }
    }
    else 
    {
        echo 'Erreur';
    }