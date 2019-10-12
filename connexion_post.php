<?php
    try {
        $bdd = new PDO ('mysql:host=localhost;dbname=gbaf_member;charset=utf8', 'root' ,'');
        
    } catch (Exception $e) {
        die ('Erreur :' .$e->getMessage());
    }
    
    $log = $bdd->query('SELECT COUNT(gbaf_member) AS gbaf_memebr FROM member WHERE email = ? AND password = ?')

    $req->execute(array(
         'email' => htmlentities($_POST['email']), 
        'password' => htmlentities($_POST['password'])
        ));
        
    }