@props(['submit'])

<div {{ $attributes->merge(['class' => 'row g-4']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="col-md-8 offset-md-1">
        <form wire:submit="{{ $submit }}">
            <div class="p-4 bg-white shadow {{ isset($actions) ? 'rounded-top' : 'rounded' }}">
                <div class="row g-3">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="d-flex justify-content-end p-3 bg-light shadow rounded-bottom">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
