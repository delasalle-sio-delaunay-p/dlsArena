<?php


/**
 * Contrôleur Inscription
 */

include_once ('modele/DAO.class.php');
include_once ('modele/Users.class.php');

$dao = new DAO();

$login = $_POST['login'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];

if ($password != $passwordConf) {
    $message = "Le mot de passe ou sa confirmation sont différents !";
    $typeMessage = "avertissement";
    include_once ('vues/inscriptionVue.php');
}
else {
    if ( $dao->existeUtilisateur($login) == true) {
        $message = "Un utilisateur avec cet identifiant existe déjà !";
        $typeMessage = "avertissement";
        include_once ('vues/inscriptionVue.php');
    }
    else {
        
        
        $mail = $_POST['mail'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $tel = $_POST['tel'];
        $classe = $_POST['classe'];
        
        $user = new User("",1, $firstname, $lastname, $mail, $tel, $login, $password, $classe);
        $dao->ajouterUtilisateur($user);
        
        $message = "Inscription terminée. <br/> Vous pouvez à présent vous connecter.";
        $typeMessage = "information";
        include_once ('vues/indexVue.php');
        
        
    }
}

unset($dao);





