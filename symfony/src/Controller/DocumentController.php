<?php

namespace App\Controller;

use App\Services\ApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DocumentController extends AbstractController
{
    #[Route('/document/{documentId}', name: 'document')]
    public function index(ApiClient $apiClient, int $documentId): Response
    {
        return $this->render('document/index.html.twig', [
            'document' => $apiClient->getDocument($documentId),
        ]);
    }
}
