<?php

namespace Tests\Feature;

use App\Models\Document as DocumentModel;
use App\Livewire\Document;
use App\Models\Translation;
use App\Services\ApiClient;
use Livewire\Livewire;
use Tests\TestCase;

class DocumentTest extends TestCase
{
    private Translation $translation;

    protected function setUp(): void
    {
        parent::setUp();

        $apiClient = \Mockery::mock(ApiClient::class);
        $documentResponse = json_decode(file_get_contents(__DIR__ . '/../stubs/document1.json'), true);
        $this->translation = Translation::create($documentResponse['document']['translations'][0]);

        app()->singleton(ApiClient::class, function () use ($apiClient, $documentResponse) {

            $apiClient->shouldReceive('getDocument')
                ->with(1)
                ->andReturn(DocumentModel::create($documentResponse['document']));

            return $apiClient;
        });
    }

    public function test_display_document_page(): void
    {
        Livewire::test(Document::class, ['documentId' => 1])
            ->assertStatus(200)
            ->assertViewHas('document')
            ->assertSeeInOrder(['Dutch', 'German', 'French', 'Chinese (simplified)', 'Afrikaans'])
            ->assertSeeInOrder(['Confirmed', 'Unconfirmed', 'In progress', 'Unconfirmed', 'In progress'])
            ->assertSeeInOrder(['100%', '42%', '0%', '100%', '20%']);
    }

    public function test_should_dispatch_translation_confirmed_event(): void
    {
        Livewire::test(Document\Translation\Actions::class, ['documentId' => 1, $this->translation])
            ->call('confirm')
            ->assertDispatched('translation-confirmed.1');
    }
}
