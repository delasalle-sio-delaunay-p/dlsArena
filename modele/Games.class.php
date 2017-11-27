<?php
class Game
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant du jeu (numéro automatique dans la BDD)
	private $name;			    // nom du jeu
	private $playerNumber;		// nb de joueurs
	private $platform;           // plateforme du jeu

	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function Game($unId, $unName, $unPlayerNumber, $unPlatform) {
		$this->id = $unId;
		$this->name = $unName;
		$this->playerNumber = $unPlayerNumber;
		$this->platform = $unPlatform;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}
	
	public function getName()	{return $this->name;}
	public function setName($unName) {$this->name = $unName;}

	public function getPlayerNumber()	{return $this->playerNumber;}
	public function setPlayerNumber($unPlayerNumber) {$this->playerNumber = $unPlayerNumber;}
	
	public function getPlatform()	{return $this->platform;}
	public function setPlatform($unPlatform) {$this->platform = $unPlatform;}

	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Game : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'nom : ' . $this->getName() . '<br>';
		$msg .= 'nb joueurs : ' . $this->getPlayerNumber() . '<br>';
		$msg .= 'plateforme : ' . $this->getPlatform() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe Games
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!