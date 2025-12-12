@props(['on'])

<div id="saved-message" class="small text-muted" style="display: none; opacity: 0; transition: opacity 1s;">
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const savedMessage = document.getElementById('saved-message');

        // Livewire event listener
    @this.on('{{ $on }}', function () {
        savedMessage.style.display = 'block'; // Show the message
        setTimeout(function() {
            savedMessage.style.opacity = 1; // Fade in
        }, 10);

        setTimeout(function () {
            savedMessage.style.opacity = 0; // Fade out
            setTimeout(function () {
                savedMessage.style.display = 'none'; // Hide the message after fading
            }, 1000); // Wait for the fade-out effect to complete
        }, 2000); // Show for 2 seconds
    });
    });
</script>
