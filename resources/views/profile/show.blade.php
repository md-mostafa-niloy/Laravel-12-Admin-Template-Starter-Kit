@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Profiles</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
            @endif
        </div>
        <div class="col-md-6">
            @livewire('profile.delete-user-form')
        </div>
        <div class="col-md-6">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                @livewire('profile.update-password-form')
            @endif
        </div>
        {{--        <div class="col-md-6"> --}}
        {{--            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication()) --}}
        {{--                @livewire('profile.two-factor-authentication-form') --}}
        {{--            @endif --}}
        {{--        </div> --}}
        <div class="col-md-6">
            @livewire('profile.logout-other-browser-sessions-form')
        </div>

    </div>
@endsection
