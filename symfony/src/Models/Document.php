<?php

namespace App\Models;

class Document
{
    /**
     * @param Translation[] $translations
     */
    private function __construct(
        public int $documentId,
        public string $fileName,
        public string $language,
        public string $languageCode,
        public int $revision,
        public string $type,
        public \DateTime $uploadDate,
        public string $uploader,
        public int $textSegments,
        public int $uniqueTextSegments,
        public int $wordCount,
        public int $characterCount,
        public array $translations = []
    ) {
    }

    public static function create(array $data): self
    {
        $translations = array_map(
            fn($translation) => Translation::create($translation),
            $data['translations'] ?? []
        );

        return new self(
            $data['documentId'],
            $data['fileName'],
            $data['language'],
            $data['languageCode'],
            $data['revision'],
            $data['type'],
            new \DateTime($data['uploadDate']),
            $data['uploader'],
            $data['textSegments'],
            $data['uniqueTextSegments'],
            $data['wordCount'],
            $data['characterCount'],
            $translations
        );
    }
}
