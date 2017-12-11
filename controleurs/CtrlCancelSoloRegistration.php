<?php


/**
 * Contrôleur Paramètres du compte - Zone membre
 */

include_once ('modele/DAO.class.php');
include_once ('modele/Outils.class.php');
include_once ('modele/Users.class.php');

if (isset($_SESSION['login']) && isset($_SESSION['levelUser']) ) {
    
   $dao = new DAO();
   $login = $_SESSION['login'];
   
   $user = $dao->getUserByLogin($login);        
   $soloGames = $dao->getSoloGames();
   
   $soloRegs = $dao->getSoloRegByLogin($login);
   
   $login = $user->getLogin();
   $mail = $user->getMail();
   $firstname = $user->getFirstName();
   $lastname = $user->getLastName();
   $classe = $user->getIdClasse();
   
   unset($dao);
   
   include_once ('vues/annulerInscriptionSoloVue.php');
    
}
else {
    
}
