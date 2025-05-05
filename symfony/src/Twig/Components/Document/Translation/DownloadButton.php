<?php

namespace App\Twig\Components\Document\Translation;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class DownloadButton
{
    #[LiveProp(writable: true)]
    public bool $downloaded = false;

    public bool $disabled = false;

    use DefaultActionTrait;

    #[LiveAction]
    public function download(): void
    {
        //do something here to start the download

        $this->downloaded = true;
    }
}