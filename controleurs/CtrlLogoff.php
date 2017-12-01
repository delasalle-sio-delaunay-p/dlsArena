<?php


/**
 * Contrôleur Logoff
 */

include_once ('modele/DAO.class.php');
include_once ('modele/Users.class.php');

if ( isset($_SESSION['idUser']) ) {
    unset ($_SESSION['idUser']);
}

if ( isset($_SESSION['login']) ) {
    unset ($_SESSION['login']);
}

if ( isset($_SESSION['fullName']) ) {
    unset ($_SESSION['fullName']);
}

//session_destroy();

include_once ('vues/indexVue.php');