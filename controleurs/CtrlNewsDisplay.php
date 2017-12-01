<?php


/**
 * Contrôleur News Display
 */

include_once ('modele/DAO.class.php');
include_once ('modele/Users.class.php');
include_once ('modele/News.class.php');

$dao = new DAO();

$lesNews = $dao->getNews();
include_once ('vues/newsVue.php');

unset($dao);
