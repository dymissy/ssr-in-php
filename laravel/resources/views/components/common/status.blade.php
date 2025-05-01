@props(['status'])
@php
    $classes = match ($status) {
        'In progress' => 'text-blue-600 bg-gray-50',
        'Confirmed' => 'text-green-700 bg-green-100',
        default => 'text-gray-600 bg-gray-100',
    };
@endphp
<span class="{{ $classes }} px-2 py-0.5 rounded">{{ $status }}</span>
