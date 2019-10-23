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
            require ('model/connect_bd.php');
            require ('model/insert_bd.php');
    header('Location: index.php');
    }
}