{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
@extends('layouts.auth')
@section('title', 'Register')
@section('content')
    <div class="col-lg-5">
        <div class="mb-0 card">
            <div class="row g-0 align-items-center">
                <div class="mx-auto col-xxl-12">
                    <div class="mb-0 border-0 shadow-none card">
                        <div class="card-body p-sm-4 m-lg-4">
                            <div class="text-center">
                                <h5 class="fs-3xl">Register</h5>
                                <p class="text-muted">Create a new account by filling out the form below.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name <span
                                                class="text-danger">*</span></label>
                                        <div class="position-relative ">
                                            <input type="text" class="form-control password-input" id="name"
                                                placeholder="Ex: John Doe" name="name" required autofocus
                                                autocomplete="name" value="{{ old('name') }}">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="position-relative ">
                                            <input type="email" class="form-control password-input" id="username"
                                                placeholder="Ex: user@example.com" name="email" required autofocus
                                                autocomplete="username" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="mb-3 position-relative auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5 password-input "
                                                placeholder="*******" id="password" name="password" required
                                                autocomplete="new-password">
                                            <button
                                                class="top-0 btn btn-link position-absolute end-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="align-middle ri-eye-fill"></i></button>
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password-confirmation">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <div class="mb-3 position-relative auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5 password-input "
                                                placeholder="*******" id="password-confirmation"
                                                name="password_confirmation" required autocomplete="new-password">
                                            <button
                                                class="top-0 btn btn-link position-absolute end-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="align-middle ri-eye-fill"></i></button>
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Sign
                                            Up</button>
                                    </div>
                                </form>

                                <div class="mt-5 text-center">
                                    <p class="mb-0">Don't have an account ? <a href="{{ route('login') }}"
                                            class="fw-semibold text-secondary text-decoration-underline">
                                            SignIn</a> </p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
