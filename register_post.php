<?php
if  (isset($_POST['firstName']) AND isset($_POST['lastName']) AND isset($_POST['email']) AND isset($_POST['password'])) //semble avoir un soucis mais n'est pas complétement ignorer (remarquer grace au retrait de repeat_password)
{
    if ($_POST ['password'] != $_POST['repeat_password']) 
    {
        echo 'Wrong password';
        echo   ' <p> <a href="register.php"> recommencer </a> </p>';
    }
        else
        {
            $_POST['password'] = md5($_POST['password']);
            try 
            {
                $bdd = new PDO ('mysql:host=localhost;dbname=gbaf_member;charset=utf8', 'root' ,'');
            }   
                catch (Exception $e) 
                {
                    die ('Erreur :' .$e->getMessage());
                }
            $req = $bdd->prepare('INSERT INTO member (firstName, lastName, email, password, created_at) 
                        VALUES (:firstName, :lastName, :email, :password, NOW() )');
                         $req->execute(array(
                        'firstName' => htmlentities($_POST['firstName']), 
                        'lastName' => htmlentities($_POST['lastName']), 
                        'email' => htmlentities($_POST['email']), 
                        'password' => htmlentities($_POST['password']), 
                        ));
    header('Location: index.php');
    }
}