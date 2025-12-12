<section>
    <div class="card mb-5">
        <div class="card-header">
            <h5 class="card-title">{{ __('Delete Account') }}</h5>
            <p class="text-muted mb-0">{{ __('Permanently delete your account.') }}</p>
            <div class="card-body">
                <p class="text-muted mb-0">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
                <button class="btn btn-danger mt-3" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </button>
                <div class="mb-5">
                    <x-dialog-modal wire:model.live="confirmingUserDeletion">
                        <x-slot name="title">
                            {{ __('Delete Account') }}
                        </x-slot>

                        <x-slot name="content">
                            {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                            <div class="mt-4" x-data="{}"
                                x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                                <x-input type="password" class="mt-1 block w-3/4" autocomplete="current-password"
                                    placeholder="{{ __('Password') }}" x-ref="password" wire:model="password"
                                    wire:keydown.enter="deleteUser" />

                                <x-input-error for="password" class="mt-2" />
                            </div>
                        </x-slot>

                        <x-slot name="footer">
                            <x-secondary-button wire:click="$toggle('confirmingUserDeletion')"
                                wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                                {{ __('Delete Account') }}
                            </x-danger-button>
                        </x-slot>
                    </x-dialog-modal>
                </div>

            </div>
        </div>
    </div>
    {{--    <x-action-section> --}}
    {{--        <x-slot name="title"> --}}
    {{--            {{ __('Delete Account') }} --}}
    {{--        </x-slot> --}}

    {{--        <x-slot name="description"> --}}
    {{--            {{ __('Permanently delete your account.') }} --}}
    {{--        </x-slot> --}}

    {{--        <x-slot name="content"> --}}
    {{--            <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400"> --}}
    {{--                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }} --}}
    {{--            </div> --}}

    {{--            <div class="mt-5"> --}}
    {{--                <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled"> --}}
    {{--                    {{ __('Delete Account') }} --}}
    {{--                </x-danger-button> --}}
    {{--            </div> --}}

    {{--            <!-- Delete User Confirmation Modal --> --}}
    {{--            <x-dialog-modal wire:model.live="confirmingUserDeletion"> --}}
    {{--                <x-slot name="title"> --}}
    {{--                    {{ __('Delete Account') }} --}}
    {{--                </x-slot> --}}

    {{--                <x-slot name="content"> --}}
    {{--                    {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }} --}}

    {{--                    <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)"> --}}
    {{--                        <x-input type="password" class="mt-1 block w-3/4" --}}
    {{--                                 autocomplete="current-password" --}}
    {{--                                 placeholder="{{ __('Password') }}" --}}
    {{--                                 x-ref="password" --}}
    {{--                                 wire:model="password" --}}
    {{--                                 wire:keydown.enter="deleteUser" /> --}}

    {{--                        <x-input-error for="password" class="mt-2" /> --}}
    {{--                    </div> --}}
    {{--                </x-slot> --}}

    {{--                <x-slot name="footer"> --}}
    {{--                    <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled"> --}}
    {{--                        {{ __('Cancel') }} --}}
    {{--                    </x-secondary-button> --}}

    {{--                    <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled"> --}}
    {{--                        {{ __('Delete Account') }} --}}
    {{--                    </x-danger-button> --}}
    {{--                </x-slot> --}}
    {{--            </x-dialog-modal> --}}
    {{--        </x-slot> --}}
    {{--    </x-action-section> --}}
</section>
