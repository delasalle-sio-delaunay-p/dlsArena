<?php


/**
 * Contrôleur Contact
 */

include_once ('modele/DAO.class.php');
include_once ('modele/Outils.class.php');

if (isset($_POST['mail']) && isset($_POST['sujet']) && isset($_POST['contenu'])) {
    
    $mail = $_POST['mail'];
    $sujet = $_POST['sujet'];
    $contenu = 'Nouveau message de '.$mail.' Contenu du message : '.$_POST['contenu'];
    $mail_emetteur = "dls@nexart.fr";
    $mail_destinataire = "dls@nexart.fr";

    $ok = Outils::envoyerMail($mail_destinataire, $sujet, $contenu, $mail_emetteur);
    
    $message = "Votre message a bien été envoyé !";
    $typeMessage = "information";
    include_once ('vues/contactVue.php');
    
}
else {
    
}
