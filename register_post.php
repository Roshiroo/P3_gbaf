<?php
        require ('model/insert_bd.php');
if (isset($_POST['submit'])) 
{
    if (!empty($_POST['firstName']) AND !empty($_POST['lastName']) AND !empty($_POST['email']) AND !empty($_POST['password']))
    {
        if (strlen($_POST['password']) >= 6 ) 
        {
            if ($_POST ['password'] == $_POST['repeat_password'])
            {
                $_POST['password'] = md5($_POST['password']);
                $req = insert();
                header('Location: index.php');
            }
                else
                {
                    echo 'Les mots de passes ne sont pas identiques !';
                    echo   ' <p> <a href="view/register_view.php"> recommencer </a> </p>';
                }
        }
            else 
            {
                echo 'Votre mots de passe est trop petit';
                echo   ' <p> <a href="view/register_view.php"> recommencer </a> </p>';
            }
    }
        else 
        {
            echo 'La totaliter des champs ne sont pas remplis';
            echo   ' <p> <a href="view/register_view.php"> recommencer </a> </p>';
        }
}
// NOTE : Rajouter les vérifications si : déjà un compte / email déjà use / contenu des champs.  s'orienter vers les regex ou boucle while