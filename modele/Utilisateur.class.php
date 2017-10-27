<?php
class Utilisateur
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant de l'utilisateur (numéro automatique dans la BDD)
	private $nom;				// nom de l'utilisateur
	private $prenom;			// prénom de l'utilisateur
	private $email;				// adresse mail de l'utilisateur
	private $tel;				// numéro de téléphone de l'utilisateur
	private $niveau;			// 1 = utilisateur lambda   2 = administrateur
	private $login;				// nom de l'utilisateur
	private $password;			// mot de passe de l'utilisateur
	
	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function Utilisateur($unId, $unNom, $unPrenom, $unEmail, $unTel, $unNiveau, $unLogin, $unPassword) {
		$this->id = $unId;
		$this->nom = $unNom;
		$this->prenom = $unPrenom;
		$this->email = $unEmail;
		$this->tel = $unTel;
		$this->niveau = $unNiveau;
		$this->login = $unLogin;
		$this->password = $unPassword;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}

	public function getNom()	{return $this->nom;}
	public function setNom($unNom) {$this->nom = $unNom;}
	
	public function getPrenom()	{return $this->prenom;}
	public function setPrenom($unPrenom) {$this->prenom = $unPrenom;}

	public function getEmail()	{return $this->email;}
	public function setEmail($unEmail) {$this->email = $unEmail;}

	public function getTel()	{return $this->tel;}
	public function setTel($unTel) {$this->tel = $unTel;}

	public function getNiveau()	{return $this->niveau;}
	public function setNiveau($unLevel) {$this->niveau = $unNiveau;}
	
	public function getLogin()	{return $this->login;}
	public function setLogin($unLogin) {$this->login = $unLogin;}

	public function getPassword()	{return $this->password;}
	public function setPassword($unPassword) {$this->password = $unPassword;}
	
	
	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Utilisateur : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'nom : ' . $this->getNom() . '<br>';
		$msg .= 'prenom : ' . $this->getPrenom() . '<br>';
		$msg .= 'email : ' . $this->getEmail() . '<br>';
		$msg .= 'tel : ' . $this->getTel() . '<br>';
		$msg .= 'niveau : ' . $this->getNiveau() . '<br>';
		$msg .= 'login : ' . $this->getLogin() . '<br>';
		$msg .= 'password : ' . $this->getPassword() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe Utilisateur
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!