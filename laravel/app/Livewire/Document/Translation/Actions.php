<?php

namespace App\Livewire\Document\Translation;

use App\Models\Translation;
use App\Services\ApiClient;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Illuminate\Http\Request;

class Actions extends Component
{
    public Translation $translation;
    public int $documentId;
    private ApiClient $apiClient;

    public function boot(ApiClient $client): void
    {
        $this->apiClient = $client;
    }

    public function mount(Request $request, int $documentId, Translation $translation): void
    {
        $this->documentId = $documentId;
        $this->translation = $translation;
    }

    public function confirm(): void
    {
        $this->dispatch("translation-confirmed.{$this->translation->translationId}");
    }

    public function render(): View
    {
        return view('livewire.document.translation.actions', [
            'translation' => $this->translation
        ]);
    }
}
