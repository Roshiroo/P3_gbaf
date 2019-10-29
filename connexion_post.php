<?php
session_start(); 
    require ('model/connect_bd.php');

    if (isset($_POST['submit']) AND !empty($_POST['email']) AND !empty($_POST['password']))
    {
        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars ($_POST['password']);
        $bdd = connect();
        $req = $bdd->prepare('SELECT * FROM member  WHERE email = ? AND password = ?');
        $req->execute(array( $email, md5($password)));
        if ($req -> rowCount() == 1 ) 
        {
            $user = $req->fetch();
            $_SESSION['user'] = $user;
            header('Location: view/partenaire_view.php');
        }
        else 
        {
            echo 'Mot de passe ou email incorrect';
            echo   ' <p> <a href="index.php"> recommencer </a> </p>';
        }
    }
    else 
    {
        echo 'Erreur';
    }