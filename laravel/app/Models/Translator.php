<?php

namespace App\Models;

use Livewire\Wireable;

class Translator implements Wireable
{
    private function __construct(
        protected string $name,
        protected string $avatarUrl
    ) {
    }

    public function toLivewire(): array
    {
        return [
            'name' => $this->name,
            'avatarUrl' => $this->avatarUrl,
        ];
    }

    public static function fromLivewire($value)
    {
        return self::create($value);
    }

    public static function create(array $data): self
    {
        return new self(
            $data['name'],
            $data['avatarUrl']
        );
    }
}
