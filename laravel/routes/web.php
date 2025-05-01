<?php

use App\Livewire\Document;
use Illuminate\Support\Facades\Route;

Route::get('/', Document::class)->name('home');
