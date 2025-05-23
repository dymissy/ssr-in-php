<?php

namespace App\Controller;

use App\Services\ApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DocumentsController extends AbstractController
{
    #[Route('/', name: 'documents')]
    public function index(ApiClient $apiClient): Response
    {
        return $this->render('documents/index.html.twig', [
            'documents' => $apiClient->getDocuments(),
        ]);
    }
}
