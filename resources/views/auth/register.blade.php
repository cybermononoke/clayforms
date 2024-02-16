@extends ('layouts.app')

<x-guest-layout>

    <style>
  

        .left-aligned-label {
            text-align: left;
        }

        html {
            overflow: hidden;
        }

        
    </style>

    <div class="header text-center mb-8">
        <h5 class="text-2xl font-bold">/register</h5>
    </div>

    <div class="flex items-center justify-center mt-4">
            <a class="underline text-sm custom-color hover:custom-color rounded-md" href="{{ route('login') }}">
                {{ __('already registered?') }}
            </a>
    </div>

    <link href="{{ asset('resources/css/rings.css') }}" rel="stylesheet" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('name')" class="left-aligned-label" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('email')" class="left-aligned-label" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('password')" class="left-aligned-label" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('confirm password')" class="left-aligned-label" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>