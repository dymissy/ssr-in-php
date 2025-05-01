<?php

namespace App\Models;

use Livewire\Wireable;

class Translation implements Wireable
{
    /**
     * @param Translator[] $translators
     */
    private function __construct(
        public int $translationId,
        public string $languageCode,
        public string $language,
        public string $status,
        public int $progress,
        public array $translators = []
    ) {
    }

    public function toLivewire(): array
    {
        return [
            'translationId' => $this->translationId,
            'languageCode' => $this->languageCode,
            'language' => $this->language,
            'status' => $this->status,
            'progress' => $this->progress,
            'translators' => array_map(fn($translator) => $translator->toLivewire(), $this->translators),
        ];
    }

    public static function fromLivewire($value)
    {
        return self::create($value);
    }

    public static function create(array $data): self
    {
        $translators = array_map(
            fn($translator) => Translator::create($translator),
            $data['translators'] ?? []
        );

        return new self(
            $data['translationId'],
            $data['languageCode'],
            $data['language'],
            $data['status'],
            $data['progress'],
            $translators,
        );
    }
}
