<?php
require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Tuupola\Middleware\CorsMiddleware;

$app = AppFactory::create();

$app->add(new CorsMiddleware([
    "origin" => ["*"],
    "methods" => ["GET", "PATCH", "OPTIONS"],
    "headers.allow" => ["Content-Type", "Authorization"],
    "headers.expose" => [],
    "credentials" => false,
    "cache" => 0,
]));

$app->options('/{routes:.+}', function (Request $request, Response $response) {
    return $response;
});

$app->get('/documents/{documentId}', function (Request $request, Response $response, array $args) {
    $payload = file_get_contents(__DIR__ . '/data/document.json');
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});

$app->patch('/documents/{documentId}/translations/{translationId}', function (Request $request, Response $response, array $args) {
    $payload = json_encode([]);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});

$app->run();
