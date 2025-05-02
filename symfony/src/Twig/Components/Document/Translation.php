<?php

namespace App\Twig\Components\Document;

use App\Services\ApiClient;
use App\Models\Translation as TranslationModel;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveListener;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class Translation
{
    /** @var TranslationModel */
    #[LiveProp(useSerializerForHydration: true)]
    public $translation;

    #[LiveProp]
    public int $documentId;

    use DefaultActionTrait;

    public function __construct(private ApiClient $apiClient)
    {
    }

    public function mount(TranslationModel $translation, int $documentId): void
    {
        $this->translation = $translation;
        $this->documentId = $documentId;
    }

    #[LiveListener('translationConfirmed')]
    public function onTranslationConfirmed(): void
    {
        $this->translation->status = 'Confirmed';
    }
}