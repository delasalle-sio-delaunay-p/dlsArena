<?php
class Team
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				  // identifiant de l'équipe (numéro automatique dans la BDD)
	private $name;			      // nom de l'équipe
	private $createdBy;           // chef de l'équipe
	private $password;            // mot de passe de l'équipe

	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function Team($unId, $unName, $unCreatedBy, $unPassword) {
		$this->id = $unId;
		$this->name = $unName;
		$this->createdBy = $unCreatedBy;
		$this->password = $unPassword;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}
	
	public function getName()	{return $this->name;}
	public function setName($unName) {$this->name = $unName;}

	public function getCreatedBy()	{return $this->createdBy;}
	public function setCreatedBy($unCreatedBy) {$this->createdBy = $unCreatedBy;}

	public function getPassword()	{return $this->password;}
	public function setPassword($unPassword) {$this->password = $unPassword;}


	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Equipe : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'nom : ' . $this->getName() . '<br>';
		$msg .= 'id du créateur : ' . $this->getCreatedBy() . '<br>';
		$msg .= 'password : ' . $this->getPassword() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe Teams
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!