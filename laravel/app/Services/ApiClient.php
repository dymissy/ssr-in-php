<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiClient
{
    public function __construct(private Client $client)
    {
    }

    public function getDocument(int $documentId): array
    {
        $response = $this->client->get("/documents/$documentId");

        return json_decode($response->getBody()->getContents(), true);
    }
}
