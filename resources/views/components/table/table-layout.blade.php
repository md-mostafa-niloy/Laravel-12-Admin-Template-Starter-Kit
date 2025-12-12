@props([
    'id' => 'dataTable',
    'tableVariant' => 'table table-sm table-hover table-striped align-middle mb-0',
])

<div class="table-responsive">
    <table id="{{ $id }}" class="table {{ $tableVariant }}">
        {{ $slot }}
    </table>
</div>
