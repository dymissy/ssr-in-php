@php
    /** @var \App\Models\Translation $translation */
@endphp
<tr class="border-t">
    <td class="px-6 py-4"><input type="checkbox" /></td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <img src="https://flagcdn.com/24x18/{{ $translation->languageCode }}.png" class="w-5 h-3" alt="{{ $translation->language }} flag" />
            <div class="text-blue-600 font-bold">{{ $translation->language }}</div>
        </div>
    </td>
    <td class="px-6 py-4 text-xs font-bold">
        <x-common.status :status="$translation->status" />
    </td>
    <td class="px-6 py-4">
        <x-common.progress :progress="$translation->progress" />
    </td>
    <td class="px-6 py-4">
        <x-document.translation.translators :translators="$translation->translators" />
    </td>
    <td class="px-6 py-4 flex gap-2">
        <livewire:document.translation.actions :documentId="$documentId" :translation="$translation" wire:key="{{ now() }}" />
    </td>
</tr>
