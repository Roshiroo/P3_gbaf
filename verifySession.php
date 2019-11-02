<?php

if (isset($_SESSION['user'])) 
{
    echo 'Bonjour !';
}
else {
    header ('Location : index.php');
}