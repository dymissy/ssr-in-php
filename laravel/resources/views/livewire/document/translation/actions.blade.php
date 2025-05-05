@php
    /** @var \App\Models\Translation $translation */

    $confirmDisabled = $translation->status === 'Confirmed';
    $downloadDisabled = $translation->status !== 'Confirmed';
@endphp
<div>
    <button
        class="text-sm font-bold px-5 py-2 rounded-xl border cursor-pointer
         bg-blue-100 text-blue-600 hover:border-blue-700
         disabled:bg-gray-200 disabled:text-gray-400 disabled:border-gray-300 disabled:cursor-not-allowed"
        {{ $confirmDisabled ? 'disabled' : '' }}

        wire:click="confirm"
        wire:confirm="Are you sure you want to confirm this translation?"
    >
        Confirm
    </button>
    <livewire:document.translation.download-button :disabled="$downloadDisabled" />
</div>
