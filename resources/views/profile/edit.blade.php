@extends('layouts.app')

@section('content')

<!-- STATUS CONTAINER -->
<div class="status-container">
    <p2>STATUS</p2>
    @if ($isLoggedIn)
    <p>logged in as {{ $user->name }}</p>
    @else
    <p>not logged in</p>
    @endif

    <!-- add logout functionality to profile page -->
    <a href="/force-logout" class="menu-link" @click="open = false">L0G0UT</a>
</div>

<div class="container flex justify-center">




    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full sm:max-w-md">
            <x-slot name="header">
                <h2 class="font-semibold text-xl leading-tight" style="color: #F8C8DC;">
                    {{ __('Profile') }}
                </h2>
            </x-slot>
            <div class="py-12" style="color: #F8C8DC;">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                    <div class="p-4 sm:p-8 bg-transparent rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                    <div class="p-4 sm:p-8 bg-transparent rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                    <div class="p-4 sm:p-8 bg-transparent rounded-lg" style="color: #F8C8DC;">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection