<?php

namespace App\Livewire;

use App\Services\ApiClient;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\Request;

class Documents extends Component
{
    public int $documentId;
    /** @var \App\Models\Document[] */
    private array $documents;

    public function mount(
        Request $request,
        ApiClient $apiClient,
        int $documentId = 1
    ): void {
        $this->documentId = $documentId;
        $this->documents = $apiClient->getDocuments();
    }

    public function render(): View
    {
        return view('livewire.documents', [
            'documents' => $this->documents,
        ]);
    }
}
