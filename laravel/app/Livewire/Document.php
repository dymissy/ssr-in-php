<?php

namespace App\Livewire;

use App\Services\ApiClient;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Document extends Component
{
    public int $documentId;
    public \App\Models\Document $document;
    private ApiClient $apiClient;

    public function boot(ApiClient $client): void
    {
        $this->apiClient = $client;
    }

    public function mount(
        int $documentId
    ): void {
        $this->documentId = $documentId;
        $this->document = $this->apiClient->getDocument($this->documentId);
    }

    public function render(): View
    {
        return view('livewire.document', [
            'document' => $this->document,
        ]);
    }
}
