<section>
    <style>
        .text-left {
            text-align: left;
        }
    </style>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('update password') }}
        </h2>

        <p class="mt-1 text-sm " style="color: #4c4d4f;">
            {{ __('use a bunch of gibberish im sure itll work fine') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <div class="text-left">
                <x-input-label for="update_password_current_password" :value="__('current password')" />
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div>
            <div class="text-left">
                <x-input-label for="update_password_password" :value="__('new password')" />
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
        </div>

        <div>
            <div class="text-left">
                <x-input-label for="update_password_password_confirmation" :value="__('confirm password')" />
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('>save<') }}</x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>