<?php
        require ('model/insert_bd.php');
if (isset($_POST['submit']) AND !empty($_POST['firstName']) AND !empty($_POST['lastName']) AND !empty($_POST['email']) AND !empty($_POST['password']) 
    AND (strlen($_POST['password']) >= 6 ) AND ($_POST ['password'] == $_POST['repeat_password']))
            
            { 
                $firstName = htmlentities($_POST['firstName']);
                $lastName = htmlentities($_POST['lastName']);
                $email = htmlentities($_POST['email']);
                $password = md5(htmlentities ($_POST['password']));
                $req = insert($firstName, $lastName, $email, $password);
                if ($req !== NULL) 
                {
                    header('Location: index.php');
                }
                else 
                {
                    echo 'Erreur dans base de donnée';
                }
                
            }
                else
                {
                    echo 'Il semble y avoir une erreur'; //changer la phrase
                    echo   ' <p> <a href="view/register_view.php"> recommencer </a> </p>';
                }
// NOTE : Rajouter les vérifications si : déjà un compte / email déjà use / contenu des champs.  s'orienter vers les regex ou boucle while