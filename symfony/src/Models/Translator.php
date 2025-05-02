<?php

namespace App\Models;
class Translator
{
    private function __construct(
        public string $name,
        public string $avatarUrl
    ) {
    }

    public static function create(array $data): self
    {
        return new self(
            $data['name'],
            $data['avatarUrl']
        );
    }
}
