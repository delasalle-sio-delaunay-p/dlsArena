<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

// Page d'accueil

$app->get('/', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});

$app->get('/index', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});

/*
$app->post('/index', function () {
    
});


$app->get('/index2', function (Request $request, Response $response) {
    require ('vues/indexVue2.php');
});

*/

// Page contact

$app->get('/contact', function (Request $request, Response $response) {
    require ('vues/contactVue.php');
});

// Page de connexion

$app->get('/login', function (Request $request, Response $response) {
    require ('vues/loginVue.php');
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

$app->run();