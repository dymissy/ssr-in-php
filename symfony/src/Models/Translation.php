<?php

namespace App\Models;

class Translation
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
