<?php

use App\Livewire\Document;
use App\Livewire\Documents;
use Illuminate\Support\Facades\Route;

Route::get('/', Documents::class)->name('home');
Route::get('/document/{documentId}', Document::class)->name('document');
