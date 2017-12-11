<?php
class User
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant de l'utilisateur (numéro automatique dans la BDD)
	private $level;			    // 1 = utilisateur lambda   2 = administrateur
	private $firstname;			// prénom de l'utilisateur
	private $lastname;			// nom de l'utilisateur
	private $mail;				// adresse mail de l'utilisateur
	//private $tel;				// numéro de téléphone de l'utilisateur
	private $login;				// nom de l'utilisateur
	private $password;			// mot de passe de l'utilisateur
	private $idClasse;          // identifiant de la classe de l'utilisateur
	
	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	/*
	 * Constructeurs avec 9 paramètres
	 */
	public function User($unId, $unLevel, $unFirstName, $unLastName, $unMail, $unLogin, $unPassword, $unIdClasse) {
		$this->id = $unId;
		$this->level = $unLevel;
		$this->firstname = $unFirstName;
		$this->lastname = $unLastName;
		$this->mail = $unMail;
		//$this->tel = $unTel;
		$this->login = $unLogin;
		$this->password = $unPassword;
		$this->idClasse = $unIdClasse;
	}
		
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}
	
	public function getLevel()	{return $this->level;}
	public function setLevel($unLevel) {$this->level = $unLevel;}

	public function getFirstName()	{return $this->firstname;}
	public function setFirstName($unFirstName) {$this->firstname = $unFirstName;}
	
	public function getLastName()	{return $this->lastname;}
	public function setLastName($unLastname) {$this->lastname = $unLastName;}

	public function getMail()	{return $this->mail;}
	public function setMail($unMail) {$this->mail = $unMail;}

	//public function getTel()	{return $this->tel;}
	//public function setTel($unTel) {$this->tel = $unTel;}

	public function getLogin()	{return $this->login;}
	public function setLogin($unLogin) {$this->login = $unLogin;}

	public function getPassword()	{return $this->password;}
	public function setPassword($unPassword) {$this->password = $unPassword;}

	public function getIdClasse()	{return $this->idClasse;}
	public function setIdClasse($unIdClasse) {$this->idClasse = $unIdClasse;}
	
	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Utilisateur : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'nom : ' . $this->getLastName() . '<br>';
		$msg .= 'prenom : ' . $this->getFirstName() . '<br>';
		$msg .= 'email : ' . $this->getMail() . '<br>';
		$msg .= 'tel : ' . $this->getTel() . '<br>';
		$msg .= 'niveau : ' . $this->getLevel() . '<br>';
		$msg .= 'login : ' . $this->getLogin() . '<br>';
		$msg .= 'password : ' . $this->getPassword() . '<br>';
		$msg .= 'id classe : ' . $this->getIdClasse() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe Users
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!