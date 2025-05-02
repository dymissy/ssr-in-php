@php
/** @var \App\Models\Translator[] $translators */
@endphp
<div class="flex -space-x-2">
    @foreach($translators as $translator)
        <x-common.avatar :avatar="$translator->avatarUrl" :name="$translator->name" />
    @endforeach
</div>
