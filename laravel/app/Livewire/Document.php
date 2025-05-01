<?php

namespace App\Livewire;

use App\Services\ApiClient;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\Request;

class Document extends Component
{
    public int $documentId;
    public \App\Models\Document $document;

    public function mount(
        Request $request,
        ApiClient $apiClient,
        int $documentId = 1
    ) {
        $this->documentId = $documentId;
        $this->document = $apiClient->getDocument($this->documentId);
    }

    public function render(): View
    {
        return view('livewire.document', [
            'document' => $this->document,
        ]);
    }
}
