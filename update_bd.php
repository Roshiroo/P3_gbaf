<?php
session_start();
require ('model/connect_bd.php');

if (!isset($_SESSION['user']))
{
    header('Location: index.php');
}

        if($_SESSION['user']['firstName']) 
        {
            $firstName = $_SESSION['user'][1];
            $firstName = htmlspecialchars($_POST['firstName']);
            if(strlen($firstName) <= 255)
            {
                $bdd = connect();
                $req = $bdd->prepare('UPDATE member SET firstName = ? WHERE id = ?');
                $req->execute(array($firstName, $_SESSION['user']['id']));
            }
            else 
            {
                echo "Trop court le prénom !";
            }
        }
?>