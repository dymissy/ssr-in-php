<?php

namespace App\Livewire\Document\Translation;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class DownloadButton extends Component
{
    public bool $downloaded = false;
    public bool $disabled = false;

    public function mount(bool $disabled, bool $downloaded = false): void
    {
        $this->disabled = $disabled;
        $this->downloaded = $downloaded;
    }

    public function download(): void
    {
        //do something here to start the download

        $this->downloaded = true;
    }

    public function render(): View
    {
        return view('livewire.document.translation.download-button', [
            'downloaded' => $this->downloaded,
            'disabled' => $this->disabled,
        ]);
    }
}
