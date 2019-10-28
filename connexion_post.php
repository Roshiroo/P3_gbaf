<?php
    require ('model/connect_bd.php');
        $bdd = connect();
        $log = $bdd->prepare('SELECT email, password FROM member WHERE email = :email , password = :password');
        $resultat = $log->fetch();
        
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
        
    if (!$resultat) 
    {
        echo 'Il y a une erreur, <a href="index.php"> retry </a>';
    }
    else 
    {
        if ($isPasswordCorrect) 
        {
            header('Location: view/partenaire_view.php');
        }
        else 
        {
         echo 'ENCORE UNE ERREUR REEEEEEEE';
        }
    }
