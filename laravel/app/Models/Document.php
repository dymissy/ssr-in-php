<?php

namespace App\Models;

use Livewire\Wireable;

class Document implements Wireable
{
    /**
     * @param Translation[] $translations
     */
    private function __construct(
        protected int $documentId,
        protected string $fileName,
        protected string $language,
        protected string $languageCode,
        protected int $revision,
        protected string $type,
        protected \DateTime $uploadDate,
        protected string $uploader,
        protected int $textSegments,
        protected int $uniqueTextSegments,
        protected int $wordCount,
        protected int $characterCount,
        protected array $translations = []
    ) {
    }

    public function toLivewire(): array
    {
        return [
            'documentId' => $this->documentId,
            'fileName' => $this->fileName,
            'language' => $this->language,
            'languageCode' => $this->languageCode,
            'revision' => $this->revision,
            'type' => $this->type,
            'uploadDate' => $this->uploadDate,
            'uploader' => $this->uploader,
            'textSegments' => $this->textSegments,
            'uniqueTextSegments' => $this->uniqueTextSegments,
            'wordCount' => $this->wordCount,
            'characterCount' => $this->characterCount,
            'translations' => array_map(fn($translation) => $translation->toLivewire(), $this->translations),
        ];
    }

    public static function fromLivewire($value)
    {
        return self::create($value);
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
