<?php
class TeamReg
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant de l'inscription (numéro automatique dans la BDD)
	private $status;			// statut de l'inscription
	private $idTeam;		    // id de l'équipe
	private $idGame;            // id du jeu concerné

	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function TeamReg($unId, $unStatus, $unIdTeam, $unIdGame) {
		$this->id = $unId;
		$this->status = $unStatus;
		$this->idTeam = $unIdTeam;
		$this->idGame = $unIdGame;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}
	
	public function getStatus()	{return $this->status;}
	public function setStatus($unStatus) {$this->status = $unStatus;}

	public function getIdTeam()	{return $this->idTeam;}
	public function setIdTeam($unIdTeam) {$this->idTeam = $unIdTeam;}
	
	public function getIdGame()	{return $this->idGame;}
	public function setIdGame($unIdGame) {$this->idGame = $unIdGame;}

	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Team reg : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'status : ' . $this->getStatus() . '<br>';
		$msg .= 'id team : ' . $this->getIdTeam() . '<br>';
		$msg .= 'id game : ' . $this->getIdGame() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe SoloReg
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!