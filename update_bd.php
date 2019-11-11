<?php
session_start();
require ('model/connect_bd.php');

if (empty($_SESSION['user']))
{
    header('Location: index.php');
}
 
        if (isset($_POST['firstName'])) 
        {
            $firstName = htmlspecialchars($_POST['firstName']);
            if(strlen($firstName) <= 255)
            {
                $bdd = connect();
                $req = $bdd->prepare('UPDATE member SET firstName = ? WHERE id = ?');
                $req->execute(array($firstName, $_SESSION['user'][0]));
                header ('Location: view/profil_view.php');
                echo $firstName;
                die();
            }
            else 
            {
                echo "Trop court le prénom !";
            }
        }
?>