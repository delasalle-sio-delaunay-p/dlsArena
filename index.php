<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});

$app->get('/index', function (Request $request, Response $response) {
    require ('vues/indexVue.php');
});

$app->get('/contact', function (Request $request, Response $response) {
    require ('vues/contactVue.php');
});

$app->get('/login', function (Request $request, Response $response) {
    require ('vues/loginVue.php');
});

$app->get('/register', function (Request $request, Response $response) {
    require ('vues/inscriptionVue.php');
});

$app->get('/news', function (Request $request, Response $response) {
    require ('vues/newsVue.php');
});

$app->get('/infos', function (Request $request, Response $response) {
    require ('vues/informationsVue.php');
});

$app->get('/team', function (Request $request, Response $response) {
    require ('vues/equipeVue.php');
});

$app->run();