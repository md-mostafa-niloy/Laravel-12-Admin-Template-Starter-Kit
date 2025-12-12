<form action="{{ $action }}" method="{{ in_array($method, ['GET', 'POST']) ? $method : 'POST' }}"
    @if ($hasFiles) enctype="multipart/form-data" @endif
    spellcheck="{{ $spellcheck ? 'true' : 'false' }}" {{ $attributes }}>
    @csrf

    @if (!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
