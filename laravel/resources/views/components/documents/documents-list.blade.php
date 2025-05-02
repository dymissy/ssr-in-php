@php
    /** @var \App\Models\Document[] $documents */
@endphp
<div class="bg-white rounded shadow">
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead>
            <tr class="bg-gray-100 text-left text-gray-600">
                <th class="px-6 py-3"></th>
                <th class="px-6 py-3">File Name</th>
                <th class="px-6 py-3">Uploader</th>
                <th class="px-6 py-3">Target language</th>
                <th class="px-6 py-3 text-right"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                    <x-documents.document :document="$document" />
                @endforeach
            </tbody>
        </table>
    </div>
</div>
