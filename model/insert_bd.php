<?php
function insert($firstName, $lastName, $email, $password)  
{   
    require ('connect_bd.php');
    try 
    {
        
    $bdd = connect();
    $req = $bdd->prepare('INSERT INTO member (firstName, lastName, email, password, created_at) 
    VALUES (:firstName, :lastName, :email, :password, NOW() )');
        $req->execute(array(
        'firstName' => $firstName , 
        'lastName' => $lastName , 
        'email' => $email , 
        'password' => $password ,
        ));
    return $req;
    } 
    catch (\Throwable $th) 
        {
        return NULL;
        }
}