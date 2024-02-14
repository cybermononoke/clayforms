@extends ('layouts.app')

<x-guest-layout>

    <style>
        h5 {
            font-family: 'Karla', sans-serif;
            color: #F8C8DC;
        }

        .left-aligned-label {
            text-align: left;
        }

        .register-link {
            display: inline-block;

            font-size: 0.875rem;
            color: #F8C8DC;
        }

        .register-link:hover {
            color: #F06292;
        }
    </style>


    <div class="header text-center mb-8">
        <h5 class="text-2xl font-bold">/login</h5>
    </div>

    <div class="flex items-center justify-center mt-4">
        <a class="underline text-sm custom-color hover:custom-color rounded-md" href="{{ route('register') }}">
            {{ __('need to register?') }}
        </a>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>

            <x-input-label for="email" :value="__('email')" class="left-aligned-label" />

            <!-- Original code -->
            <x-text-input id="email" class="block mt-1 w-full bg-transparent" type="email" name="email" :value="old('email')" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-input-label for="password" :value="__('password')" class="left-aligned-label" />

            <!-- Original code -->
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>





        <div class="flex justify-end">
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>













</x-guest-layout>