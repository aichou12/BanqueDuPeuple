<?php

if (isset($_GET['page'])){

    require_once 'accueil';
    switch ($_GET['page']) {
        case 'Ajout':
            require_once 'ajout';
            break;
        case 'Liste':
            require_once 'liste';
            break;

        default:

            break;
    }
}else{
    require_once 'accueil.php';
}
