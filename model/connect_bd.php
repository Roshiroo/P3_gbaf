<?php
    try 
        {
            $bdd = new PDO ('mysql:host=localhost;dbname=gbaf_member;charset=utf8', 'root' ,'');
        }   
            catch (Exception $e) 
            {
                die ('Erreur :' .$e->getMessage());
            }