<?php
class Classe
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant de l'utilisateur (numéro automatique dans la BDD)
	private $fullname;			// nom complet de la classe
	private $initials;			// sigle de la classe

	
	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function Classe($unId, $unFullName, $unInitials) {
		$this->id = $unId;
		$this->fullname = $unFullName;
		$this->initials = $unInitials;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}
	
	public function getFullName()	{return $this->fullname;}
	public function setFullName($unFullName) {$this->fullname = $unFullName;}

	public function getInitials()	{return $this->initials;}
	public function setInitials($unInitials) {$this->initials = $unInitials;}
	
	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Classes : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'nom complet : ' . $this->getFullName() . '<br>';
		$msg .= 'sigle : ' . $this->getInitials() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe Classes
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!