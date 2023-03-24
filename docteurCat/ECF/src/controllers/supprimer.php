<?php


function supprimer()
{
    unset($_SESSION);
    session_destroy();
    require_once __DIR__ . './../view/accueilView.php';
}
