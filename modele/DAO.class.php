<?php
// -------------------------------------------------------------------------------------------------------------------------
//                                                 DAO : Data Access Object
//                   				Cette classe fournit des méthodes d'accès à la bdd
//                                                 Elle utilise l'objet PDO
//                       Auteur : Pierre D.                      Dernière modification : 25/10/2017
// -------------------------------------------------------------------------------------------------------------------------

// inclusion des paramètres de l'application
include_once ('parametres.localhost.php');
include_once ('Users.class.php');

// début de la classe DAO (Data Access Object)
class DAO
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
		
	private $cnx;				// la connexion à la base de données
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Constructeur et destructeur ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	public function __construct() {
		global $PARAM_HOTE, $PARAM_PORT, $PARAM_BDD, $PARAM_USER, $PARAM_PWD;
		try
		{	$this->cnx = new PDO ("mysql:host=" . $PARAM_HOTE . ";port=" . $PARAM_PORT . ";dbname=" . $PARAM_BDD,
							$PARAM_USER,
							$PARAM_PWD);
			return true;
		}
		catch (Exception $ex)
		{	echo ("Echec de la connexion a la base de donnees <br>");
			echo ("Erreur numero : " . $ex->getCode() . "<br />" . "Description : " . $ex->getMessage() . "<br>");
			echo ("PARAM_HOTE = " . $PARAM_HOTE);
			return false;
		}
	}
	
	public function __destruct() {
		unset($this->cnx);
	}


	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------

    /**
     * getUserLevel - retourne le niveau de l'utilisateur à partir du login/password
     * @param un login $loginUser
     * @param un password $passwordUser
     * @return string
     */
	public function getUserLevel($loginUser, $passwordUser)
	{	// préparation de la requête de recherche
	    $txt_req = "Select level from users where login = :loginUser and password = :passwordUser";
	    $req = $this->cnx->prepare($txt_req);
	    // liaison de la requête et de ses paramètres
	    $req->bindValue("loginUser", $loginUser, PDO::PARAM_STR);
	    $req->bindValue("passwordUser", sha1($passwordUser), PDO::PARAM_STR);
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    // traitement de la réponse
	    $reponse = "inconnu";
	    if ($uneLigne)
	    {	$level = $uneLigne->level;
	    if ($level == "1") $reponse = "utilisateur";
	    if ($level == "2") $reponse = "administrateur";
	    }
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    // fourniture de la réponse
	    return $reponse;
	}	






}