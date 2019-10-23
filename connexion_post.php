<?php
    require ('model/connect_bd.php')
    
    $log = $bdd->query('SELECT COUNT(gbaf_member) AS gbaf_memebr FROM member WHERE email = ? AND password = ?')

    $req->execute(array(
         'email' => htmlentities($_POST['email']), 
        'password' => htmlentities($_POST['password'])
        ));