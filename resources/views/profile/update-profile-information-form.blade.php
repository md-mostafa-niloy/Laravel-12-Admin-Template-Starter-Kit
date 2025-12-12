<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ __('Update Profile Information') }}</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="updateProfileInformation">
            <!-- Profile Photo -->
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div x-data="{ photoName: null, photoPreview: null }" class="mb-3">
                    <!-- Profile Photo File Input -->
                    <input type="file" id="photo" class="d-none" wire:model.live="photo" x-ref="photo"
                        x-on:change="
                               photoName = $refs.photo.files[0].name;
                               const reader = new FileReader();
                               reader.onload = (e) => { photoPreview = e.target.result; };
                               reader.readAsDataURL($refs.photo.files[0]);
                           " />

                    <label for="photo" class="form-label">{{ __('Photo') }}</label>

                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="!photoPreview">
                        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                            class="rounded-circle img-thumbnail" width="80" height="80">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="d-block rounded-circle bg-cover bg-no-repeat bg-center"
                            x-bind:style="'background-image: url(\'' + photoPreview +
                                '\'); background-size: cover; width: 80px; height: 80px;'">
                        </span>
                    </div>


                    <button type="button" class="btn btn-secondary mt-2 me-2" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Select A New Photo') }}
                    </button>

                    @if ($this->user->profile_photo_path)
                        <button type="button" class="btn btn-danger mt-2" wire:click="deleteProfilePhoto">
                            {{ __('Remove Photo') }}
                        </button>
                    @endif
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            @endif

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control" wire:model="state.name" required
                    autocomplete="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control" wire:model="state.email" required
                    autocomplete="username">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                        !$this->user->hasVerifiedEmail())
                    <p class="text-muted mt-2">
                        {{ __('Your email address is unverified.') }}
                        <button type="button" class="btn btn-link p-0" wire:click.prevent="sendEmailVerification">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if ($this->verificationLinkSent)
                        <p class="text-success mt-2">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                @endif
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-end">
                <span wire:loading.attr="disabled" wire:target="photo">
                    <x-action-message class="me-3" on="saved">
                        {{ __('Saved.') }}
                    </x-action-message>
                </span>
                <button type="submit" class="btn btn-primary w-100" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</div>
