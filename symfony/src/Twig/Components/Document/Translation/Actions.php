<?php

namespace App\Twig\Components\Document\Translation;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use App\Models\Translation as TranslationModel;

#[AsLiveComponent]
class Actions
{
    /** @var TranslationModel */
    #[LiveProp(useSerializerForHydration: true, updateFromParent: true)]
    public $translation;

    use DefaultActionTrait;

    public function mount(TranslationModel $translation): void
    {
        $this->translation = $translation;
    }
}