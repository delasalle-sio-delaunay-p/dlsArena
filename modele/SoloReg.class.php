<?php
class SoloReg
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant de l'inscription (numéro automatique dans la BDD)
	private $status;			// statut de l'inscription
	private $idUser;		    // id de l'auteur de l'inscription
	private $idGame;            // id du jeu concerné

	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function SoloReg($unId, $unStatus, $unIdUser, $unIdGame) {
		$this->id = $unId;
		$this->status = $unStatus;
		$this->idUser = $unIdUser;
		$this->idGame = $unIdGame;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}
	
	public function getStatus()	{return $this->status;}
	public function setStatus($unStatus) {$this->status = $unStatus;}

	public function getIdUser()	{return $this->idUser;}
	public function setIdUser($unIdUser) {$this->idUser = $unIdUser;}
	
	public function getIdGame()	{return $this->idGame;}
	public function setIdGame($unIdGame) {$this->idGame = $unIdGame;}

	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Solo reg : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'status : ' . $this->getStatus() . '<br>';
		$msg .= 'id user : ' . $this->getIdUser() . '<br>';
		$msg .= 'id game : ' . $this->getIdGame() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe SoloReg
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!