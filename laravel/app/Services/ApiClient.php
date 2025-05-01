<?php

namespace App\Services;

use App\Models\Document;
use GuzzleHttp\Client;

class ApiClient
{
    public function __construct(private Client $client)
    {
    }

    public function getDocument(int $documentId): Document
    {
        $response = $this->client->get("/documents/$documentId");
        $data = json_decode($response->getBody()->getContents(), true);

        return Document::create($data['document']);
    }
}
