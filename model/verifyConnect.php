<?php
function verifyConnect($email, $password) 
{
    require ('connect_bd.php');
    try 
    {
    $bdd = connect();
    $req = $bdd->prepare('SELECT * FROM member  WHERE email = ? AND password = ?');
    $req->execute(array( $email, md5($password)));
    return $req;
    } 
        catch (\Throwable $th) 
        {
        return NULL;
        }
}   