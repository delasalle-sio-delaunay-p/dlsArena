<?php
/**
 * Contrôleur Login
 */

include_once ('modele/DAO.class.php');
include_once ('modele/Users.class.php');

if (isset($_POST['login']) && isset($_POST['password']) ) {
    
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $dao = new DAO();
    
    $result = $dao->getUserLevel($login, $password);
    
    if ($result == "administrateur") {
        $message = "Login OK !";
        $typeMessage = "information";
        include_once ('vues/indexVue.php');
        
    }
    else {
        $message = "Identifiant ou mot de passe incorrect !";
        $typeMessage = "avertissement";
        include_once ('vues/indexVue.php');
    }
    
    unset($dao);
    
}
else {
    
}