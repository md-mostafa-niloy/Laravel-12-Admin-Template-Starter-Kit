<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ __('Two Factor Authentication') }}</h5>
        <p class="text-muted mb-0">{{ __('Add additional security to your account using two factor authentication.') }}
        </p>
    </div>

    <div class="card-body">
        <h3 class="h5 text-dark">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    {{ __('Finish enabling two factor authentication.') }}
                @else
                    {{ __('You have enabled two factor authentication.') }}
                @endif
            @else
                {{ __('You have not enabled two factor authentication.') }}
            @endif
        </h3>

        <div class="mt-3 text-muted">
            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 text-muted">
                    <p class="fw-semibold">
                        @if ($showingConfirmation)
                            {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.') }}
                        @else
                            {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.') }}
                        @endif
                    </p>
                </div>

                <div class="mt-4 p-2 d-inline-block bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 text-muted">
                    <p class="fw-semibold">
                        {{ __('Setup Key') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <label for="code" class="form-label">{{ __('Code') }}</label>
                        <input id="code" type="text" name="code" class="form-control mt-1"
                            inputmode="numeric" autofocus autocomplete="one-time-code" wire:model="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />
                        @error('code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endif

                @if ($showingRecoveryCodes)
                    <div class="mt-4 max-w-xl text-muted">
                        <p class="fw-semibold">
                            {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                        </p>
                    </div>

                    <div
                        class="d-grid gap-1 max-w-xl mt-4 px-4 py-4 font-monospace text-muted bg-light dark:bg-dark rounded-lg">
                        @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                            <div>{{ $code }}</div>
                        @endforeach
                    </div>
                @endif
            @endif
            <div class="mt-5">
                @if (!$this->enabled)
                    <x-confirms-password wire:then="enableTwoFactorAuthentication">
                        <x-button type="button" wire:loading.attr="disabled">
                            {{ __('Enable') }}
                        </x-button>
                    </x-confirms-password>
                @else
                    @if ($showingRecoveryCodes)
                        <x-confirms-password wire:then="regenerateRecoveryCodes">
                            <x-secondary-button class="me-3">
                                {{ __('Regenerate Recovery Codes') }}
                            </x-secondary-button>
                        </x-confirms-password>
                    @elseif ($showingConfirmation)
                        <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                            <x-button type="button" class="me-3" wire:loading.attr="disabled">
                                {{ __('Confirm') }}
                            </x-button>
                        </x-confirms-password>
                    @else
                        <x-confirms-password wire:then="showRecoveryCodes">
                            <x-secondary-button class="me-3">
                                {{ __('Show Recovery Codes') }}
                            </x-secondary-button>
                        </x-confirms-password>
                    @endif

                    @if ($showingConfirmation)
                        <x-confirms-password wire:then="disableTwoFactorAuthentication">
                            <x-secondary-button wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-secondary-button>
                        </x-confirms-password>
                    @else
                        <x-confirms-password wire:then="disableTwoFactorAuthentication">
                            <x-danger-button wire:loading.attr="disabled">
                                {{ __('Disable') }}
                            </x-danger-button>
                        </x-confirms-password>
                    @endif
                @endif
        @endif
    </div>
</div>
</div>
