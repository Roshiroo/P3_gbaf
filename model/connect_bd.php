<?php
function connect () 
{
    try 
        {
            $bdd = new PDO ('mysql:host=localhost;dbname=gbaf_member;charset=utf8', 'root' ,'');
            return $bdd;
        }   
            catch (Exception $e) 
            {
                die ('Erreur :' .$e->getMessage());
            }
}