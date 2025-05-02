@php
    /** @var \App\Models\Translation[] $translations */
    /** @var int $documentId */
@endphp
<div class="bg-white rounded shadow">
    <div class="flex justify-between items-center px-6 py-4 border-b">
        <h3 class="font-semibold text-gray-800">Languages</h3>
        <a href="#" class="text-blue-600 text-sm font-bold">+ Add languages</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead>
            <tr class="bg-gray-100 text-left text-gray-600">
                <th class="px-6 py-3"></th>
                <th class="px-6 py-3">Language</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3">Progress</th>
                <th class="px-6 py-3">Translators</th>
                <th class="px-6 py-3"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($translations as $translation)
                <x-document.translation.row :translation="$translation" :documentId="$documentId" />
            @endforeach
            </tbody>
        </table>
    </div>
</div>
