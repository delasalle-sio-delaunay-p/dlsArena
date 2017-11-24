<?php
class Comment
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant du commentaire (numéro automatique dans la BDD)
	private $content;			// contenu du commentaire
	private $created;           // date de création
	private $author;            // auteur du commentaire

	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function Comment($unId, $unContent, $unCreated, $unAuthor) {
		$this->id = $unId;
		$this->content = $unContent;
		$this->created = $unCreated;
		$this->author = $unAuthor;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}

	public function getContent()	{return $this->content;}
	public function setContent($unContent) {$this->content = $unContent;}
	
	public function getCreated()	{return $this->created;}
	public function setCreated($unCreated) {$this->created = $unCreated;}

	public function getAuthor()	{return $this->author;}
	public function setAuthor($unAuthor) {$this->author = $unAuthor;}


	// ------------------------------------------------------------------------------------------------------
	// -------------------------------------- Méthodes d'instances ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	

	public function toString() {
		$msg = 'Commentaire : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'contenu : ' . $this->getContent() . '<br>';
		$msg .= 'date de création : ' . $this->getCreated() . '<br>';
		$msg .= 'auteur : ' . $this->getAuthor() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe Comment
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!