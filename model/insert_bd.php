<?php
    $req = $bdd->prepare('INSERT INTO member (firstName, lastName, email, password, created_at) 
    VALUES (:firstName, :lastName, :email, :password, NOW() )');
    $req->execute(array(
    'firstName' => htmlentities($_POST['firstName']), 
    'lastName' => htmlentities($_POST['lastName']), 
    'email' => htmlentities($_POST['email']), 
    'password' => htmlentities($_POST['password']), 
    ));