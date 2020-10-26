<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;
/*
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});
require_once('../app/api/books.php');


$app->get('/hello/{name}', function ($request, $response, array $args) {
    // Show book identified by $args['id']
    $name = $args['name'];
    $response->getBody()->write("Hello there, $name");
    return $response;
});
*/
require_once('../app/api/books.php');

$app->run();
