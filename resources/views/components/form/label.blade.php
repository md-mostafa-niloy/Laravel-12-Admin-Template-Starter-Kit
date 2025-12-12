<label for="{{ $for }}" {{ $attributes->merge(['class' => 'form-label']) }}>
    {{ $slot }}
    @if ($required)
        <span class="text-danger">*</span>
    @endif
</label>
