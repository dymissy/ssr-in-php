@props(['progress'])
@php
    $progressClass = $progress === 100 ? 'bg-green-500' : 'bg-yellow-500';
@endphp
<div class="w-32 flex items-center gap-2">
    <div class="w-full h-2 bg-gray-200 rounded-full">
        <div class="h-2 {{ $progressClass }} rounded-full" style="width: {{ $progress }}%;"></div>
    </div>
    <div class="text-xs text-gray-500 font-bold whitespace-nowrap">{{ $progress }}%</div>
</div>
