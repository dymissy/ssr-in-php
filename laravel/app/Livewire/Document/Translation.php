<?php

namespace App\Livewire\Document;

use App\Services\ApiClient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Translation as TranslationModel;

class Translation extends Component
{
    public \App\Models\Translation $translation;
    public int $documentId;
    private ApiClient $apiClient;

    public function boot(ApiClient $client): void
    {
        $this->apiClient = $client;
    }

    public function mount(Request $request, int $documentId, TranslationModel $translation): void
    {
        $this->documentId = $documentId;
        $this->translation = $translation;
    }

    #[On('translation-confirmed.{translation.translationId}')]
    public function onConfirm(): void
    {
        $this->translation = $this->apiClient->confirmTranslation(
            $this->documentId,
            $this->translation->translationId
        );
    }

    public function render(): View
    {
        return view('livewire.document.translation', [
            'translation' => $this->translation
        ]);
    }
}
