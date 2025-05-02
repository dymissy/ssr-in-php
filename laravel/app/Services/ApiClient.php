<?php

namespace App\Services;

use App\Models\Document;
use App\Models\Translation;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ApiClient
{
    public function __construct(private Client $client)
    {
    }

    /**
     * @return Document[]
     * @throws GuzzleException
     */
    public function getDocuments(): array
    {
        $response = $this->client->get("/documents");
        $data = json_decode($response->getBody()->getContents(), true);

        return array_map(function (array $document) {
            return Document::create($document);
        }, $data['documents']);
    }

    public function getDocument(int $documentId): Document
    {
        $response = $this->client->get("/documents/$documentId");
        $data = json_decode($response->getBody()->getContents(), true);

        return Document::create($data['document']);
    }

    public function confirmTranslation(int $documentId, int $translationId): Translation
    {
        $response = $this->client->patch("/documents/$documentId/translations/$translationId");
        $data = json_decode($response->getBody()->getContents(), true);

        return Translation::create($data['translation']);
    }
}
