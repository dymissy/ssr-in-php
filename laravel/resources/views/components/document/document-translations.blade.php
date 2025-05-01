@php
    /** @var \App\Models\Document $document */
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
            @foreach($document->translations as $translation)
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
                        <x-document.document-translators :translators="$translation->translators" />
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="bg-blue-100 text-blue-600 border rounded-xl cursor-pointer hover:border-blue-700 text-sm px-5 py-2 font-bold">Confirm</button>
                        <button class="text-blue-600 border rounded-xl cursor-pointer hover:border-blue-700 text-sm px-5 py-2 font-bold">Download</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
