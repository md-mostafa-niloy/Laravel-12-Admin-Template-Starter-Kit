@extends('layouts.auth')
@section('title', 'Reset Password')
@section('content')
    <div class="col-lg-5">
        <div class="mb-0 card">
            <div class="row g-0 align-items-center">
                <div class="mx-auto col-xxl-12">
                    <div class="mb-0 border-0 shadow-none card">
                        <div class="card-body p-sm-3 m-lg-4">
                            <div class="text-center">
                                <h5 class="fs-3xl">Create new password</h5>
                                <p class="mb-3 text-muted">Your new password must be different from previous used password.
                                </p>
                            </div>

                            <div class="p-2">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email', $request->email) }}" required autofocus
                                            autocomplete="username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="position-relative auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5 password-input"
                                                placeholder="Enter password" id="password" name="password" required
                                                autocomplete="new-password">
                                            <button
                                                class="top-0 btn btn-link position-absolute end-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="align-middle ri-eye-fill"></i></button>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-confirmation">Confirm Password</label>
                                        <div class="mb-3 position-relative auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5 password-input"
                                                placeholder="Confirm password" id="password-confirmation"
                                                name="password_confirmation" required autocomplete="new-password">
                                            <button
                                                class="top-0 btn btn-link position-absolute end-0 text-decoration-none text-muted password-addon"
                                                type="button"><i class="align-middle ri-eye-fill"></i></button>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                            <div class="mt-4 text-center">
                                <p class="mb-0">Wait, I remember my password... <a href="{{ route('login') }}"
                                        class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div>
            </div>
        </div>
    </div>
@endsection
