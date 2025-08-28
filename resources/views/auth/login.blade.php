<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Login button and forgot password -->
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Divider with OR text -->
        <div class="flex items-center justify-center w-full my-6">
            <span class="px-3 text-black lowercase text-lg">or</span>

        </div>

        <!-- Social Login Buttons -->
        <div class="flex flex-col space-y-3">
            <!-- GitHub button -->
            <a href="{{ route('socialite.redirect', 'github') }}"
                class="flex items-center justify-center gap-2 w-full py-2  text-black rounded-lg transition">
                <i class="fab fa-github"></i>&nbsp;
                <span class="font-medium">Login with GitHub</span>
            </a>
        </div>
        <div class="flex flex-col space-y-3">
            <!-- GitHub button -->
            <a href="{{ route('socialite.redirect', 'google') }}"
                class="flex items-center justify-center gap-2 w-full py-2  text-black rounded-lg transition">
                <i class="fab fa-google"></i>&nbsp;
                <span class="font-medium">Login with Google</span>
            </a>
        </div>

    </form>
</x-guest-layout>
