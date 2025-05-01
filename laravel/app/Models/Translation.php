<?php

namespace App\Models;

use Livewire\Wireable;

class Translation implements Wireable
{
    /**
     * @param Translator[] $translators
     */
    private function __construct(
        protected int $translationId,
        protected string $languageCode,
        protected string $language,
        protected string $status,
        protected int $progress,
        protected array $translators = []
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
