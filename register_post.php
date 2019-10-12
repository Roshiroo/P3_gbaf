<?php
    try {
        $bdd = new PDO ('mysql:host=localhost;dbname=gbaf_member;charset=utf8', 'root' ,'');
    } catch (Exception $e) {
        die ('Erreur :' .$e->getMessage());
    }
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $bdd->prepare('INSERT INTO member (firstName, lastName, email, password, repeat_password, created_at) 
                        VALUES (:firstName, :lastName, :email, :password, :repeat_password, NOW() )');
                        $req->execute(array(
                            'firstName' => htmlentities($_POST['firstName']), 
                            'lastName' => htmlentities($_POST['lastName']), 
                            'email' => htmlentities($_POST['email']), 
                            'password' => htmlentities($_POST['password']), 
                            'repeat_password' => htmlentities($_POST['repeat_password'])
                            ));

                    
                         /*   if (ISSET($_POST['submit'])) {
                                if (strlen($_POST['password'])>=6) {
                                    if ($_POST['passsword']==$_POST['repeat_password']) {
                                        $_POST['password']= md5($_POST['password']);
                                    } else {
                                        echo 'Mot de passe non identique';
                                    }
                                } else {
                                    echo 'Le mot de passe doit faire 6 caractère minimun';
                                }
                            } */
   header('Location: index.php'); 