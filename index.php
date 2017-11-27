<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

include_once ('modele/DAO.class.php');
include_once ('modele/Users.class.php');

// Page d'accueil

$app->get('/', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});

$app->get('/index', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});


// Page contact

$app->get('/contact', function (Request $request, Response $response) {
    require ('vues/contactVue.php');
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

// Page des news

$app->get('/news', function (Request $request, Response $response) {
    require ('vues/newsVue.php'); 
});

// Page infos
$app->get('/infos', function (Request $request, Response $response) {
    require ('vues/informationsVue.php');
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