<div class="col-md-4 d-flex justify-content-between">
    <div class="px-3">
        <h3 class="fs-5 fw-medium text-dark">{{ $title }}</h3>

        <p class="mt-1 text-muted small">
            {{ $description }}
        </p>
    </div>

    <div class="px-3">
        {{ $aside ?? '' }}
    </div>
</div>
