@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="p-3">
        <div class="h5 text-dark mb-0">
            {{ $title }}
        </div>

        <div class="mt-4 text-muted">
            {{ $content }}
        </div>
    </div>

    <div class="d-flex justify-content-end gap-2 text-end">
        {{ $footer }}
    </div>
</x-modal>
