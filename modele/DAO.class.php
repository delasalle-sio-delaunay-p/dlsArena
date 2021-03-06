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
include_once ('News.class.php');
include_once ('Comments.class.php');
include_once ('Games.class.php');
include_once ('Teams.class.php');
include_once ('Classes.class.php');
include_once ('SoloReg.class.php');


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
	
	/***
	 * getTeams - retourne une collection d'objets équipe présentes dans la bdd
	 * @return Team[]
	 */
	public function getTeams()
	{  // préparation de la requete
	    $txt_req = "Select * from teams";
	    
	    $req = $this->cnx->prepare($txt_req);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    // construction d'une collection d'objets Team
	    $lesTeams = array();
	    
	    // tant qu'une ligne est trouvée :
	    while ($uneLigne)
	    {  //objet Team
	        $unId = utf8_encode($uneLigne->id);
	        $unName = utf8_encode($uneLigne->name);
	        $unCreateBy = utf8_encode($uneLigne->createBy);
	        $unPassword = utf8_encode($uneLigne->password);
	        
	        $uneTeam = new Team($unId, $unName, $unCreateBy, $unPassword);
	        
	        $lesTeams[]= $uneTeam;
	        
	        // extrait la ligne suivante
	        $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    }
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    // fourniture de la collection
	    return $lesTeams;
	}
	
	/***
	 * getNews - retourne une collection d'objets News
	 * @return news[]
	 */
	public function getNews()
	{  // préparation de la requete
	    $txt_req = "Select * from news";
	    
	    $req = $this->cnx->prepare($txt_req);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    // construction d'une collection d'objets News
	    $lesNews = array();
	    
	    $dao = New DAO();
	    
	    // tant qu'une ligne est trouvée :
	    while ($uneLigne)
	    {  //objet News
	        $unId = utf8_encode($uneLigne->id);
	        $unTitle = utf8_encode($uneLigne->title);
	        $unContent = utf8_encode($uneLigne->content);
	        $unCreated = utf8_encode($uneLigne->created);
	        $unAuthor = $dao->getUserFullNameById($uneLigne->id_users);
	        $unNbComments = $dao->getNbCommentsById($unId);
	        
	        $uneNews = new News($unId, $unTitle, $unContent, $unCreated ,$unAuthor, $unNbComments);
	        
	        $lesNews[]= $uneNews;
	        
	        // extrait la ligne suivante
	        $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    }
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    
	    unset($dao);
	    // fourniture de la collection
	    return $lesNews;
   
	}
	
	/***
	 * getSoloGames - retourne une collection (Game) d'objet des jeux solo
	 * @return Game[]
	 */
	public function getSoloGames()
	{  // préparation de la requete
	    $txt_req = "Select * from games where playersNumber = 1";
	    
	    $req = $this->cnx->prepare($txt_req);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    // construction d'une collection d'objets News
	    $lesSoloGames = array();
	    
	    $dao = New DAO();
	    
	    // tant qu'une ligne est trouvée :
	    while ($uneLigne)
	    {  //objet Game
	        $unId = utf8_encode($uneLigne->id);
	        $unName = utf8_encode($uneLigne->name);
	        $unPlayersNumber = utf8_encode($uneLigne->playersNumber);
	        $unPlatform = utf8_encode($uneLigne->platform);
	        
	        $unSoloGame = new Game($unId, $unName, $unPlayersNumber, $unPlatform);
	        
	        $lesSoloGames[]= $unSoloGame;
	        
	        // extrait la ligne suivante
	        $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    }
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    
	    unset($dao);
	    // fourniture de la collection
	    return $lesSoloGames;
	}
	
	/***
	 * getTeamGames - retourne une collection d'objet (Game) des jeux en équipe
	 * @return Game[]
	 */
	public function getTeamGames()
	{  // préparation de la requete
	    $txt_req = "Select * from games where playersNumber > 1";
	    
	    $req = $this->cnx->prepare($txt_req);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    // construction d'une collection d'objets News
	    $lesTeamGames = array();
	    
	    $dao = New DAO();
	    
	    // tant qu'une ligne est trouvée :
	    while ($uneLigne)
	    {  //objet Game
	        $unId = utf8_encode($uneLigne->id);
	        $unName = utf8_encode($uneLigne->name);
	        $unPlayersNumber = utf8_encode($uneLigne->playersNumber);
	        $unPlatform = utf8_encode($uneLigne->platform);
	        
	        $unTeamGame = new Game($unId, $unName, $unPlayersNumber, $unPlatform);
	        
	        $lesTeamGames[]= $unTeamGame;
	        
	        // extrait la ligne suivante
	        $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    }
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    
	    unset($dao);
	    // fourniture de la collection
	    return $lesTeamGames; 
	}
	
    /***
     * getSoloRegByLogin - retourne une collection d'objets SoloReg à partir du login
     * @param string $unLogin
     * @return SoloReg[]
     */
	public function getSoloRegByLogin($unLogin)
	{// préparation de la requete
	    $txt_req = "Select * from solo_registrations where id_users = (SELECT id from users where login = :login)";
	    
	    $req = $this->cnx->prepare($txt_req);
	    $req->bindValue("login", $unLogin, PDO::PARAM_STR);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    $lesSoloReg = array();
	    
	    $dao = New DAO();
	    
        while ($uneLigne) 
        {
    	    $unId = utf8_encode($uneLigne->id);
    	    $unStatus = utf8_encode($uneLigne->status);
    	    $unIdUser = utf8_encode($uneLigne->id_users);
    	    $unIdGame= utf8_encode($uneLigne->id_games);
    	        
    	    $uneSoloReg = new SoloReg($unId, $unStatus, $unIdUser, $unIdGame);
    	    
    	    $lesSoloReg[]= $uneSoloReg;
    	    
    	    // extrait la ligne suivante
    	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
        }
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    
	    unset($dao);
	    // fourniture de la collection
	    return $lesSoloReg;
	    
	}
	
	/***
	 * getGameNameById - retourne le nom du jeu à partir de son id
	 * @param int $unId
	 * @return string
	 */
	public function getGameNameById($unId)
	{  // préparation de la requete
	    $txt_req = "Select * from games where id = :id";
	    $req = $this->cnx->prepare($txt_req);
	    $req->bindValue("id", $unId, PDO::PARAM_STR);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    $unName = utf8_encode($uneLigne->name);
	    
	    return $unName;    
	}
	
	
	/***
	 * getRandomPassword - génère un nouveau mot de passe
	 * @param int $nb_car
	 * @return string
	 */
	public function getRandomPassword($nb_car)
	{
	    $chaine = 'azertyuiopqsdfghjklmwxcvbn';
	    $nb_lettres = strlen($chaine) - 1;
	    $generation = '';
	    for($i=0; $i < $nb_car; $i++)
	    {
	        $pos = mt_rand(0, $nb_lettres);
	        $car = $chaine[$pos];
	        $generation .= $car;
	    }
	    return $generation;
	}
	
	public function updatePassword($mail)
	{  
	    $dao = new DAO();
	    $pw = $dao->getRandomPassword(8);
	    
	    // préparation de la requete
	    $txt_req = "Update users set password = :pw where mail = :mail";
	    $req = $this->cnx->prepare($txt_req);
	    $req->bindValue("pw", sha1($pw), PDO::PARAM_STR);
	    $req->bindValue("mail", $mail, PDO::PARAM_STR);
	    
	    // extraction des données
	    $ok = $req->execute();
	    
	    unset($dao);
	    return $ok;
	    
	}
    /***
     * getTeamById - retourne un objet Team à partir de son id
     * @param int $unId
     * @return Team
     */
	public function getTeamById($unId)
	{// préparation de la requete
	    $txt_req = "Select * from teams where id = :id";
	    $req = $this->cnx->prepare($txt_req);
	    $req->bindValue("id", $unId, PDO::PARAM_STR);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    $unId = utf8_encode($uneLigne->id);
	    $unName = utf8_encode($uneLigne->name);
	    $unCreatedBy = utf8_encode($uneLigne->createdby);
	    $unPassword = utf8_encode($uneLigne->password);
	    
	    $uneTeam = new Team($unId, $unName, $unCreatedBy, $unPassword);
	    return $uneTeam;      
	}
	
	/***
	 * getClasses - retourne une collection d'objets Classe de toutes les classes présentes dans la bdd
	 * @return Classe[]
	 */
	public function getClasses()
	{  // préparation de la requete
	    $txt_req = "Select * from classes";
	    
	    $req = $this->cnx->prepare($txt_req);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    
	    // construction d'une collection d'objets Classe
	    $lesClasses = array();
	    
	    // tant qu'une ligne est trouvée :
	    while ($uneLigne)
	    {  //objet Salle
	        $unId = utf8_encode($uneLigne->id);
	        $unFullName = utf8_encode($uneLigne->fullname);
	        $unInitials = utf8_encode($uneLigne->initials);
	        
	        $uneClasse = new Classe($unId, $unFullName, $unInitials);
	        
	        $lesClasses[]= $uneClasse;
	        
	        // extrait la ligne suivante
	        $uneLigne = $req->fetch(PDO::FETCH_OBJ);
	    }
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    // fourniture de la collection
	    return $lesClasses;
	}
	
	/***
	 * getInitialsById - retourne le sigle d'une classe à partir de l'id
	 * @param int $unId
	 * @return string
	 */
	public function getInitialsById($unId)
	{  // préparation de la requete
	    $txt_req = "Select initials from classes where id = :id";
	    $req = $this->cnx->prepare($txt_req);
	    $req->bindValue("id", $unId, PDO::PARAM_STR);
	    
	    // extraction des données
	    $req->execute();
	    $uneLigne = $req->fetch(PDO::FETCH_OBJ);	    
	    $unInitials = utf8_encode($uneLigne->initials);
	    
	    return $unInitials;
	    
	}
	
	/***
	 * ajouterUtilisateur - retourne un booléen, true si réussite, false sinon
	 * @param user $unUser
	 * @return boolean
	 */
	public function ajouterUtilisateur($unUser) 
	{  
	    $unLevel = 1;
	    $unFirstName = $unUser->getFirstName();
	    $unLastName = $unUser->getLastName();
	    $unMail = $unUser->getMail();
	    //$unTel = $unUser->getTel();
	    $unLogin = $unUser->getLogin();
	    $unPassword = $unUser->getPassword();
	    $unIdClasse = $unUser->getIdClasse();
	    
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    } else {
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    
	    // préparation de la requete
	    $txt_req = "INSERT INTO users ( level, firstname, lastname, mail, login, password, ipAdress, id_classes)";
	    $txt_req .= " VALUES (:level, :firstname, :lastname, :mail, :login, :password, :ip, :idclasse)";
	    $req = $this->cnx->prepare($txt_req);
	    $req->bindValue("level", $unLevel, PDO::PARAM_STR);
	    $req->bindValue("firstname", $unFirstName, PDO::PARAM_STR);
	    $req->bindValue("lastname", $unLastName, PDO::PARAM_STR);
	    $req->bindValue("mail", $unMail, PDO::PARAM_STR);
	    //$req->bindValue("tel", $unTel, PDO::PARAM_STR);
	    $req->bindValue("login", $unLogin, PDO::PARAM_STR);
	    $req->bindValue("password", sha1($unPassword), PDO::PARAM_STR);
	    $req->bindValue("ip", $ip, PDO::PARAM_STR);
	    $req->bindValue("idclasse", $unIdClasse, PDO::PARAM_STR);
	    // extraction des données
	    $ok = $req->execute();
	    
	    return $ok;
	    
	}
	
	/***
	 * existeUtilisateur - retourne un booléen pour savoir si un utilisateur existe déjà dans la bdd
	 * @param string $unLogin
	 * @return boolean
	 */
	public function existeUtilisateur($unLogin)
	{	// préparation de la requete de recherche
	    $txt_req = "Select count(*) from users where login = :login";
	    $req = $this->cnx->prepare($txt_req);
	    // liaison de la requête et de ses paramètres
	    $req->bindValue("login", $unLogin, PDO::PARAM_STR);
	    // exécution de la requete
	    $req->execute();
	    $nbReponses = $req->fetchColumn(0);
	    // libère les ressources du jeu de données
	    $req->closeCursor();
	    
	    // fourniture de la réponse
	    if ($nbReponses == 0)
	        return false;
	    else
	        return true;
	}

	/***
	 * updateInfosConnexion - retourne un booléen, true si réussite, false sinon
	 * @param int $unId
	 * @return boolean
	 */
    public function updateInfosConnexion($unId)
    {
        // récupération de l'adresse ip du client
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        
        $dateTimeNow = date("Y-m-d H:i:s");
        
        $txt_req = "UPDATE users SET ipAdress = :ip, lastLogin = :dt WHERE id = :id";
        $req = $this->cnx->prepare($txt_req);
        $req->bindValue("ip", $ip, PDO::PARAM_STR);
        $req->bindValue("dt", $dateTimeNow, PDO::PARAM_STR);
        $req->bindValue("id", $unId, PDO::PARAM_STR);
        
        // extraction des données
        $ok = $req->execute();
        
        return $ok;   
    }
    
    /***
     * getUserByLogin - retourne un objet User à partir du login
     * @param string $unLogin
     * @return User
     */
    public function getUserByLogin($unLogin)
    {// préparation de la requete
        $txt_req = "Select * from users where login = :login";
        
        $req = $this->cnx->prepare($txt_req);
        $req->bindValue("login", $unLogin, PDO::PARAM_STR);
        // extraction des données
        $req->execute();
        $uneLigne = $req->fetch(PDO::FETCH_OBJ);
              
        $unId = utf8_encode($uneLigne->id);
        $unLevel = utf8_encode($uneLigne->level);
        $unFirstName = utf8_encode($uneLigne->firstname);
        $unLastName = utf8_encode($uneLigne->lastname);
        $unMail = utf8_encode($uneLigne->mail);
        //$unTel = utf8_encode($uneLigne->tel);
        $unLogin = utf8_encode($uneLigne->login);
        $unPassword = utf8_encode($uneLigne->password);
        $unIdClasse = utf8_encode($uneLigne->id_classes);
        $unUser = new User($unId, $unLevel, $unFirstName, $unLastName, $unMail, $unLogin, $unPassword, $unIdClasse);
            
        // libère les ressources du jeu de données
        $req->closeCursor();
        // fourniture de la collection
        return $unUser;
 
    }
    
    /***
     * getUserFullNameById - retourne le nom complet à partir d'un id
     * @param int $unId
     * @return string
     */
    public function getUserFullNameById($unId)
    {// préparation de la requete
        $txt_req = "Select * from users where id = :id";
        
        $req = $this->cnx->prepare($txt_req);
        $req->bindValue("id", $unId, PDO::PARAM_STR);
        // extraction des données
        $req->execute();
        $uneLigne = $req->fetch(PDO::FETCH_OBJ);
        
        $unFirstName = utf8_encode($uneLigne->firstname);
        $unLastName = utf8_encode($uneLigne->lastname);

        $fullName = $unFirstName.' '.$unLastName;
        
        // libère les ressources du jeu de données
        $req->closeCursor();
        
        return $fullName;
    }
    
    /***
     * getNbCommentsById - retourne le nombre de commentaires correspondant à l'id de la news
     * @param int $unId
     * @return int
     */
    public function getNbCommentsById($unId)
    {// préparation de la requete
        $txt_req = "Select count(*) from news, comments WHERE comments.id_news = news.id and news.id = :id";
        
        $req = $this->cnx->prepare($txt_req);
        $req->bindValue("id", $unId, PDO::PARAM_STR);
        // extraction des données
        $req->execute();
        $nbComments = $req->fetchColumn(0);
        
        // libère les ressources du jeu de données
        $req->closeCursor();
        
        return $nbComments;
        
    }

}