@extends('layouts.auth')
@section('title', 'Forgot Password')
@section('content')
    <div class="col-lg-5">
        <div class="mb-0 card">
            <div class="row g-0 align-items-center">
                <!--end col-->
                <div class="mx-auto col-xxl-12">
                    <div class="mb-0 border-0 shadow-none card">
                        <div class="card-body p-sm-2 m-lg-4">
                            <div class="mt-2 text-center">
                                <h5 class="fs-3xl">Forgot Password?</h5>
                                <div class="pb-4">
                                    <img src="{{ asset('assets/images/auth/email.png') }}" alt="" class="avatar-md">
                                </div>
                            </div>
                            @session('status')
                                <div class="mx-2 mb-2 text-center border-0 alert alert-success" role="alert">
                                    {{ $value }}
                                </div>
                            @endsession
                            @if (!session('status'))
                                <div class="mx-2 mb-2 text-center border-0 alert alert-warning" role="alert">
                                    Enter your email and instructions will be sent to you!
                                </div>
                            @endif
                            <div class="p-2">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control password-input" id="email"
                                            name="email" value="{{ old('email') }}" required autofocus
                                            autocomplete="username" placeholder="Enter Email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mt-4 text-center">
                                        <button class="btn btn-primary w-100" type="submit">Send Reset Link</button>
                                    </div>
                                </form><!-- end form -->
                            </div>
                            <div class="mt-4 text-center">
                                <p class="mb-0">Wait, I remember my password... <a href="{{ route('login') }}"
                                        class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
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
