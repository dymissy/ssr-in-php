@props(['disabled', 'downloaded'])
<button
    class="text-sm font-bold px-5 py-2 rounded-xl border cursor-pointer
         text-blue-600 hover:border-blue-700
         disabled:bg-gray-200 disabled:text-gray-400 disabled:border-gray-300 disabled:cursor-not-allowed"
    wire:click="download"
    @disabled($disabled)>
    {{ $downloaded ? 'Loading...' : 'Download' }}
</button>
