<div {{ $attributes->merge(['class' => 'row']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-3 col-12 col-md-10">
        <div class="p-4 bg-white dark:bg-gray-800 shadow-sm rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
