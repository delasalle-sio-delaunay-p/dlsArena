<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

include_once ('modele/DAO.class.php');
include_once ('modele/Users.class.php');
session_start();

// Page d'accueil

$app->get('/', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});

$app->get('/index', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});

$app->get('/logoff', function (Request $request, Response $response) {
    require ('controleurs/CtrlLogoff.php');
});

// Page contact

$app->get('/contact', function (Request $request, Response $response) {
    require ('vues/contactVue.php');
});

$app->post('/contact', function (Request $request, Response $response) {
    require ('controleurs/CtrlContact.php');
});

// Page de connexion

$app->get('/login', function (Request $request, Response $response) {
    require ('vues/loginVue.php');
});

$app->post('/login', function () {
    require ('controleurs/CtrlLogin.php');
});

// Page d'inscription

$app->get('/register', function (Request $request, Response $response) {
    require ('vues/inscriptionVue.php');
});

$app->post('/register', function (Request $request, Response $response) {
    require ('controleurs/CtrlInscription.php');
});
// Page des news

$app->get('/news', function (Request $request, Response $response) {
    //require ('vues/newsVue.php'); 
    require ('controleurs/CtrlNewsDisplay.php');
});

$app->get('/news/{id}', function (Request $request, Response $response, $args) {
    $newsId = $args['id'];
    require ('vues/newsCommentairesVue.php');
    
});

// Page infos
$app->get('/infos', function (Request $request, Response $response) {
    require ('vues/informationsVue.php');
});

// Page mentions légales
$app->get('/legal-mentions', function (Request $request, Response $response) {
    require ('vues/mentionsLegalesVue.php');
});
        
    
// Page faq
$app->get('/faq', function (Request $request, Response $response) {
   require ('vues/faqVue.php');
});

// Page équipe
$app->get('/team', function (Request $request, Response $response) {
    require ('vues/equipeVue.php');
});

// Page menu membre
$app->get('/my-menu', function (Request $request, Response $response) {
    require ('vues/menuMembreVue.php');
});

// Page jeux CS
$app->get('/cs', function (Request $request, Response $response) {
   require ('vues/csVue.php');
});

// Page jeux LoL
$app->get('/lol', function (Request $request, Response $response) {
   require ('vues/lolVue.php');
});

// Page jeux Fifa
$app->get('/fifa', function (Request $request, Response $response) {
   require ('vues/fifaVue.php');
});

// Page jeux Rocket League
$app->get('/rl', function (Request $request, Response $response) {
   require ('vues/rlVue.php');
});

// Page jeux Pokémon
$app->get('/pokemon', function (Request $request, Response $response) {
   require ('vues/pokemonVue.php');
});
$app->run();