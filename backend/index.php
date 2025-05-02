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

$app->get('/documents', function (Request $request, Response $response) {
    $documents = [];
    foreach (glob('data/document*.json') as $filename) {
        $data = json_decode(file_get_contents($filename), true);
        $documents[] = $data['document'];
    }

    $payload = json_encode(['documents' => $documents]);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});

$app->get('/documents/{documentId}', function (Request $request, Response $response, array $args) {
    $documentId = (int) $args['documentId'];
    if (!file_exists(__DIR__ . "/data/document$documentId.json")) {
        $response->getBody()->write(json_encode(['error' => 'Document not found']));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
    }

    $payload = file_get_contents(__DIR__ . "/data/document$documentId.json");
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});

$app->patch('/documents/{documentId}/translations/{translationId}',
    function (Request $request, Response $response, array $args) {
        $documentId = (int) $args['documentId'];
        if (!file_exists(__DIR__ . "/data/document$documentId.json")) {
            $response->getBody()->write(json_encode(['error' => 'Document not found']));
            return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
        }

        $translationId = (int) $args['translationId'];
        $data = json_decode(file_get_contents(__DIR__ . "/data/document$documentId.json"), true);

        $filteredTranslations = array_filter($data['document']['translations'], function ($item) use ($translationId) {
            return $item['translationId'] === $translationId;
        });

        $translation = array_values($filteredTranslations)[0] ?? null;
        if (!$translation) {
            $response->getBody()->write(json_encode(['error' => 'Translation not found']));

            return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
        }

        $translation['status'] = 'Confirmed';
        $translation['progress'] = 100;

        $response->getBody()->write(json_encode(['translation' => $translation]));

        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    });

$app->run();
