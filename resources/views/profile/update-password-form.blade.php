<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ __('Update Password') }}</h5>
        <p class="text-muted">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="updatePassword">
            <div class="mb-3">
                <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                <input id="current_password" type="password" class="form-control" wire:model="state.current_password"
                    autocomplete="current-password" placeholder="Enter your current password">
                @error('current_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('New Password') }}</label>
                <input id="password" type="password" class="form-control" wire:model="state.password"
                    autocomplete="new-password" placeholder="Enter your new password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" class="form-control"
                    wire:model="state.password_confirmation" autocomplete="new-password"
                    placeholder="Confirm your new password">
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</div>
