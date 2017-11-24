<?php
class News
{
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------- Membres privés de la classe ---------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	private $id;				// identifiant de la news (numéro automatique dans la BDD)
	private $title;			    // titre de la news
	private $content;			// contenu de la news
	private $created;           // date de création
	private $author;            // auteur de la news

	// ------------------------------------------------------------------------------------------------------
	// ----------------------------------------- Constructeur -----------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function News($unId, $unTitle, $unContent, $unCreated, $unAuthor) {
		$this->id = $unId;
		$this->title = $unTitle;
		$this->content = $unContent;
		$this->created = $unCreated;
		$this->author = $unAuthor;
	}	
	
	// ------------------------------------------------------------------------------------------------------
	// ---------------------------------------- Getters et Setters ------------------------------------------
	// ------------------------------------------------------------------------------------------------------
	
	public function getId()	{return $this->id;}
	public function setId($unId) {$this->id = $unId;}
	
	public function getTitle()	{return $this->title;}
	public function setTitle($unTitle) {$this->title = $unTitle;}

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
		$msg = 'News : <br>';
		$msg .= 'id : ' . $this->getId() . '<br>';
		$msg .= 'titre : ' . $this->getTitle() . '<br>';
		$msg .= 'contenu : ' . $this->getContent() . '<br>';
		$msg .= 'date de création : ' . $this->getCreated() . '<br>';
		$msg .= 'auteur : ' . $this->getAuthor() . '<br>';
		$msg .= '<br>';
		
		return $msg;
	}
	
} // fin de la classe News
// ATTENTION : on ne met pas de balise de fin de script pour ne pas prendre le risque
// d'enregistrer d'espaces après la balise de fin de script !!!!!!!!!!!!